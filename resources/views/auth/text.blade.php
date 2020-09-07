<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
{{ Form::open(['route' => 'do_login', 'metod' =>'post']) }}
<label for="exampleInputEmail1">email</label>
{{ Form::text('email', null) }}<br>
<label for="exampleInputEmail1">password</label>
{{ Form::password('password') }}<br>
<button type="submit">Dang nhap</button>
{{ Form::close() }}

</body>
</html>