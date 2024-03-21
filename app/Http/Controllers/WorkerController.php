<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\StoreRequest;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();


        return view('workers.index', compact('workers'));
    }

    public function show(Worker $worker)
    {
        return view('workers.show',compact('worker'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $data['is_married'] = isset($data['is_married']);

        Worker::create($data);

        return redirect(route('worker.index'));
    }

    public function create()
    {
        return view('workers.create');
    }

    public function update()
    {
        $worker = Worker::find(1);

        $worker->update([
            'name' => 'Denis'
        ]);

        return 'was updated';
    }

    public function delete()
    {

        $worker = Worker::find(1);

        $worker->delete();
        return 'was deleted';
    }
}
