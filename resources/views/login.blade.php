<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form class="col-3 offset-4 border rounded" method="POST" action="{{ route('user.login') }}">
        @csrf
        <div class="form-group">
            <label for="email" class="col-form-label-lg">Your email</label>
            <input class="form-control" id="email" name="email" type="text" value="" placeholder="Email">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password" class="col-form-label-lg">Password</label>
            <input class="form-control" id="password" name="password" type="password" value="" placeholder="Password">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-primary" type="submit" name="sendMe" value="1">Login</button>
        </div>
    </form>
</body>
</html>
