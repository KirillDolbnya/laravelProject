@extends('layout.main')

@section('content')

<div>
    <form action="{{route('worker.update',$worker->id)}}" method="POST">
        @csrf
        @method('patch')
        <div>
            <input placeholder="name" name="name" type="text" value="{{ (old('name')) ?? $worker->name}}">
            @error('name')
            {{$message}}
            @enderror
        </div>
        <div>
            <input placeholder="surname" name="surname" type="text" value="{{$worker->surname}}">
        </div>
        <div>
            <input placeholder="email" name="email" type="email" value="{{$worker->email}}">
        </div>
        <div>
            <input placeholder="age" name="age" type="number" value="{{$worker->age}}">
        </div>
        <div>
            <textarea placeholder="description" name="description" type="text">{{$worker->description}}</textarea>
        </div>
        <div>
            <input placeholder="is_married" type="checkbox" id="checkbox" name="is_married" {{ ($worker->is_married == 1 ) ? 'checked' : ''}}>
            <label for="checkbox">is married</label>
        </div>
        <button type="submit">edit</button>
    </form>
</div>
@endsection
