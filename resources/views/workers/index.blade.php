@extends('layout.main')

@section('content')
<form action="{{route('worker.index')}}">
    <label>
        <input type="text" placeholder="name" name="name" value="{{ request()->get('name') }}">
    </label>
    <label>
        <input type="text" placeholder="surname" name="surname" value="{{ request()->get('surname') }}">
    </label>
    <label>
        <input type="text" placeholder="email" name="email" value="{{ request()->get('email') }}">
    </label>
    <label>
        <input type="text" placeholder="to" name="to" value="{{ request()->get('to') }}">
    </label>
    <label>
        <input type="text" placeholder="from" name="from" value="{{ request()->get('from') }}">
    </label>
    <label>
        <textarea name="description" id="" cols="30" rows="10">{{ request()->get('description') }}</textarea>
    </label>
    <label>
        <input type="checkbox" name="is_married" {{ request()->get('is_married') == 'on' ? 'checked' : '' }}>
        is_married
    </label>
    <button type="submit">Filter</button>
    <a href="{{ route('worker.index') }}">Сбросить</a>
</form>

<div class="workers">
    @foreach($workers as $worker)
        <div class="worker">
            <div>
                <p>{{$worker->id}}</p>
            </div>
            <div>
                <p>{{$worker->name}}</p>
                <p>{{$worker->surname}}</p>
                <p>{{$worker->email}}</p>
                <p>{{$worker->description}}</p>
                <p>{{$worker->age}}</p>
                <p>{{$worker->is_married}}</p>
            </div>
            <div class="buttons">
                <a class="btn" href="{{route('worker.show',['worker' => $worker->id])}}">show</a>
                <a class="btn" href="{{route('worker.edit',['worker' => $worker->id])}}">edit</a>
                <form action="{{route('worker.delete',['worker'=>$worker->id])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn">delete</button>
                </form>
            </div>
        </div>
    @endforeach
    <div>
        {{ $workers->withQueryString()->links()}}
    </div>
</div>
@endsection

