<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class CustomResponse extends Response
{
    /**
     * @param int $code
     * @param string $message
     * @param array|ResourceCollection|JsonResource|null $data
     * @param array|null $auth
     * @return JsonResponse
     */
    private function generateResponseStructure(int $code, string $message, array|ResourceCollection|JsonResource $data = null, array $auth = null): JsonResponse
    {
        $meta = [
            'code'    => $code,
            'message' => $message,
        ];

        if ($data instanceof ResourceCollection && ($data->resource instanceof Paginator || $data->resource instanceof LengthAwarePaginator)) {
            $paginationData = $this->getPaginationData($data->resource);

            $meta['pagination'] = $paginationData;
        }

        return response()->json(array_filter([
            'meta' => $meta,
            'auth' => $auth,
            'data' => $data
        ]), $code);
    }

    /**
     * @param Paginator|LengthAwarePaginator $paginator
     * @return array
     */
    private function getPaginationData(Paginator|LengthAwarePaginator $paginator): array
    {

        $links = array_filter([
            'previous_page' => $paginator->previousPageUrl(),
            'next_page'     => $paginator->nextPageUrl(),
        ]);

        return array_filter([
            'total'        => $paginator->total(),
            'count'        => $paginator->count(),
            'per_page'     => $paginator->perPage(),
            'current_page' => $paginator->currentPage(),
            'total_pages'  => $paginator->lastPage(),
            'links'        => $links
        ]);
    }

    /**
     * @param string $message
     * @param array|ResourceCollection|JsonResource|null $data
     * @param array|null $auth
     * @return JsonResponse
     */
    public function success(string $message = 'Success', array|ResourceCollection|JsonResource $data = null, array $auth = null): JsonResponse
    {
        return $this->generateResponseStructure(self::HTTP_OK, $message, $data, $auth);
    }

    /**
     * @return JsonResponse
     */
    public function noContent(): JsonResponse
    {
        return $this->generateResponseStructure(self::HTTP_NO_CONTENT, 'No content.');
    }

    /**
     * @return JsonResponse
     */
    public function internalServerError(): JsonResponse
    {
        return $this->generateResponseStructure(self::HTTP_INTERNAL_SERVER_ERROR, 'Internal server error');
    }

    /**
     * @param string $message
     * @return JsonResponse
     */
    public function badRequest(string $message): JsonResponse
    {
        return $this->generateResponseStructure(self::HTTP_BAD_REQUEST, $message);
    }

    /**
     * @param string $message
     * @return JsonResponse
     */
    public function forbiddenRequest(string $message = 'You do not have permission to access this route!'): JsonResponse
    {
        return $this->generateResponseStructure(self::HTTP_FORBIDDEN, $message);
    }

    /**
     * @return JsonResponse
     */
    public function unauthorizedRequest(): JsonResponse
    {
        return $this->generateResponseStructure(self::HTTP_UNAUTHORIZED, 'Unauthorized request');
    }
}
