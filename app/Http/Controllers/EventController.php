<?php

namespace App\Http\Controllers;

use App\Http\Resources\Event\EventCollection;
use App\Http\Resources\Event\EventResource;
use App\Http\Responses\CustomResponse;
use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Services\Implementation\EventService;
use Illuminate\Http\JsonResponse;

class EventController extends Controller
{
    /**
     * @param Event $model
     * @param EventService $eventService
     * @param CustomResponse $customResponse
     */
    public function __construct(Event $model, public readonly EventService $eventService, public CustomResponse $customResponse)
    {
        $authParameter = 'event';
        parent::__construct($model, $this->eventService, $customResponse, $authParameter, EventCollection::class, EventResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreEventRequest $request
     * @return JsonResponse
     */
    public function store(StoreEventRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param Event $event
     * @return JsonResponse
     */
    public function show(Event $event): JsonResponse
    {
        return $this->showHelper($event);
    }

    /**
     * @param Event $event
     * @param UpdateEventRequest $request
     * @return JsonResponse
     */
    public function update(Event $event, UpdateEventRequest $request): JsonResponse
    {
        return $this->updateHelper($event, $request);
    }

    /**
     * @param Event $event
     * @return JsonResponse
     */
    public function destroy(Event $event): JsonResponse
    {
        return $this->destroyHelper($event);
    }
}
