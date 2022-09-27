<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Responses\CustomResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class LogInController extends Controller
{
    private CustomResponse $response;

    private int $authentication_token_lifespan_minutes;

    public function __construct()
    {
        $this->response = new CustomResponse();
        $this->authentication_token_lifespan_minutes = config('sanctum.expiration');
    }

    /**
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $request->validated();

        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return $this->response->badRequest("Invalid user credentials!");
        }

        $user = Auth::user();

        $token = $user->createToken("CheckAndGo");

        $auth = [
            'token'             => $token->plainTextToken,
            'token_expiry_date' => $token->accessToken->created_at->addMinutes($this->authentication_token_lifespan_minutes),
        ];

        return $this->response->success("Successfully logged in user.", $user->toArray(), $auth);
    }

    /**
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        $user = Auth::user();

        $user->currentAccessToken()->delete();

        return $this->response->noContent();
    }

    /**
     * @return JsonResponse
     */
    public function getAuthenticatedUser(): JsonResponse
    {
        return $this->response->success('Successfully return logged in user.', Auth::user()->toArray());
    }

    /**
     * @return JsonResponse
     */
    public function refreshToken(): JsonResponse
    {
        $user = Auth::user();

        $user->currentAccessToken()->delete();

        $token = $user->createToken('ProgressionFrameworkApp');

        $auth = [
            'token'             => $token->plainTextToken,
            'token_expire_date' => $token->accessToken->created_at->addMinutes($this->authentication_token_lifespan_minutes),
        ];

        return $this->response->success(message: "Successfully refreshed token", auth: $auth);
    }
}
