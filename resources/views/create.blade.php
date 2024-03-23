<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Create Post</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
{{--        <a class="navbar-brand h1" href={{ route('posts.index') }}>CRUDPosts</a>--}}
        <div class="justify-end ">
            <div class="col ">
{{--                <a class="btn btn-sm btn-success" href={{ route('posts.create') }}>Add Post</a>--}}
            </div>
        </div>
</nav>

<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Создание продукта</h3>
            <form action="{{ route('product.add') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Наименование</label>
                    <input type="text" class="form-control" id="title" name="name" required>
                </div>
                @error('name')
                    {{ $message }}
                @enderror
                <br>
                <button type="submit" class="btn btn-primary">Создать</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>
