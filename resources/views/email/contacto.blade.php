<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="color: blueviolet;"><strong>CORREO DE CONTACTO</strong></h1>
    <p>primer correo enviado desde laravel!!</p>
    <p>
        <strong>Nombre: {{$contacto['name']}}</strong>
        <br>
        <strong>Correo: {{$contacto['description']}}</strong>
        <br>
        <strong>Mensaje: {{$contacto['amount']}}</strong>
    </p>
</body>
</html>