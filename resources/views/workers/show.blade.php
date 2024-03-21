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
show
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
</div>

<style>

    .worker{
        display: flex;
        flex-direction: column;
        gap: 5px;
        padding: 5px;
        border: 1px solid black;
        box-sizing: border-box;
    }

    .buttons{
        display: flex;
        flex-direction: column;
        gap: 5px;
        width: 100%;
    }

    .btn{
        display: block;
        text-align: center;
        color: white;
        border-radius: 20px;
        background: rgb(5, 130, 204);
        padding: 10px;
        text-decoration: none;
    }

</style>
</body>
</html>
