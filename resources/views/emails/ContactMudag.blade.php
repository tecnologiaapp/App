<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h1>Dudas, comentarios o sugerencias</h1>

    <p><strong>Nombre:</strong> {{ $details['name'] }}</p>
    <p><strong>Correo electrónico:</strong> {{ $details['email'] }}</p>
    <p><strong>Mensaje:</strong> {{ $details['msg'] }}</p>
</body>
</html>