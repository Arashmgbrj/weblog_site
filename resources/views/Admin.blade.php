<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="#">add_post</a>
    @foreach($data as $data)
     <h1>{{ $data->titile_m }}</h1>
     <h3>{{ $data->m_par }}</h3>
     <h3>{{$data->like}}</h3>
     <a href="#">edit</a>
     <a href="#">delete</a>
    @endforeach
    
</body>
</html>