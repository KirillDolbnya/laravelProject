@extends('layout.main')

@section('content')
<div>
    <form action="{{route('worker.store')}}" method="POST">
        @csrf
        @method('POST')
        <div>
            <input placeholder="name" name="name" type="text" value="{{old('name')}}">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div>
            <input placeholder="surname" name="surname" type="text" value="{{old('surname')}}">
            @error('surname')
            {{ $message }}
            @enderror
        </div>
        <div>
            <input placeholder="email" name="email" type="email" value="{{old('email')}}">
            @error('email')
            {{ $message }}
            @enderror
        </div>
        <div>
            <input placeholder="age" name="age" type="number" value="{{old('age')}}">
            @error('age')
            {{ $message }}
            @enderror
        </div>
        <div>
            <textarea placeholder="description" name="description" type="text">{{old('description')}}</textarea>
            @error('description')
            {{ $message }}
            @enderror
        </div>
        <div>
            <input placeholder="is_married" type="checkbox" id="checkbox" name="is_married">
            <label for="checkbox">is married</label>
        </div>
        <button type="submit">create</button>
    </form>
</div>
@endsection
