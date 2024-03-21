<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
create

<div>
    <form action="{{route('worker.store')}}" method="POST">
        @csrf
        @method('POST')
        <div>
            <input placeholder="name" name="name" type="text">
        </div>
        <div>
            <input placeholder="surname" name="surname" type="text">
        </div>
        <div>
            <input placeholder="email" name="email" type="email">
        </div>
        <div>
            <input placeholder="age" name="age" type="number">
        </div>
        <div>
            <textarea placeholder="description" name="description" type="text"></textarea>
        </div>
        <div>
            <input placeholder="is_married" type="checkbox" id="checkbox" name="is_married">
            <label for="checkbox">is married</label>
        </div>
        <button type="submit">create</button>
    </form>
</div>
</body>
</html>
