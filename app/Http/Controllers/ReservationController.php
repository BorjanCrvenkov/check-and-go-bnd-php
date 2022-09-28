<?php

namespace App\Http\Controllers;

use App\Http\Resources\Reservation\ReservationCollection;
use App\Http\Resources\Reservation\ReservationResource;
use App\Http\Responses\CustomResponse;
use App\Models\Reservation;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use App\Services\Implementation\ReservationService;
use Illuminate\Http\JsonResponse;

class ReservationController extends Controller
{
    /**
     * @param Reservation $model
     * @param ReservationService $reservationService
     * @param CustomResponse $customResponse
     */
    public function __construct(Reservation $model, public readonly ReservationService $reservationService,
                                public CustomResponse $customResponse)
    {
        $authParameter = 'reservation';
        parent::__construct($model, $this->reservationService, $customResponse, $authParameter,
            ReservationCollection::class, ReservationResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreReservationRequest $request
     * @return JsonResponse
     */
    public function store(StoreReservationRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param Reservation $reservation
     * @return JsonResponse
     */
    public function show(Reservation $reservation): JsonResponse
    {
        return $this->showHelper($reservation);
    }

    /**
     * @param Reservation $reservation
     * @param UpdateReservationRequest $request
     * @return JsonResponse
     */
    public function update(Reservation $reservation, UpdateReservationRequest $request): JsonResponse
    {
        return $this->updateHelper($reservation, $request);
    }

    /**
     * @param Reservation $reservation
     * @return JsonResponse
     */
    public function destroy(Reservation $reservation): JsonResponse
    {
        return $this->destroyHelper($reservation);
    }
}
