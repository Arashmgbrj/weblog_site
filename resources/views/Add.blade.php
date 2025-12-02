<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{Route('add_blog')}}" enctype="multipart/form-data">
        @csrf
        <input name="m_title" type="text" readonly>
        <input name="m_pr" type="text" readonly>
        <input name="m_title1" type="text" readonly>
        <input name="m_pr1" type="text" readonly>
        <input name="m_title2"type="text"  readonly>
        <input name="m_pr2"type="text"  readonly>
        <input name="aout"type="text"  readonly>
        <input name="category"type="text"  readonly>
        <input name="label" type="text" readonly>
        <input type="file" name="image" >
        <button type="submit">add</button>
    </form>
</body>
</html>