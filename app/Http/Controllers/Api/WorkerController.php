<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
use App\Http\Resources\WorkerResource;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();

        return WorkerResource::collection($workers);
    }

    public function show(Worker $worker)
    {
        return new WorkerResource($worker) ;
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $worker = Worker::create($data);

        return WorkerResource::make($worker);
    }

    public function update(Worker $worker,UpdateRequest $request)
    {
        $data = $request->validated();
        $worker->update($data);
        $worker->fresh();
        return new WorkerResource($worker);
    }

    public function destroy(Worker $worker)
    {
        $worker->delete();

        return response()->json([
            'message' => 'Удалить'
        ]);
    }
}
