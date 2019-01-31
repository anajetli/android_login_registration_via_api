<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
</head>
<body>
    Welcome, {{ $user->name }}
    <br><br><br>

    <form action="{{ url('/profile')}}" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}

        @if(session('errors'))
            @foreach ($errors as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif

        @if(session('success'))
            {{ session('success') }}            
        @endif
        <br><br>
    
        Select image to upload:
        <br>
        <input type="file" name="image" id="image">
        <br><br>
        <button type="submit">Upload Image</button>
    </form>

    <br><br>
    @if($user->image != '')
        <img src="{{ url('/image/user/120/'.$user->image) }}" alt="{{ $user->name }}">
        <br><br>
        <img src="{{ url('/image/user/150/'.$user->image) }}" alt="{{ $user->name }}">
        <br><br>
        <img src="{{ url('/image/user/500/'.$user->image) }}" alt="{{ $user->name }}">
    @endif




</body>
</html>