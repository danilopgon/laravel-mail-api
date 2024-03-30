    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nuevo correo recibido</title>
    </head>
    <body style="background-color: #f7fafc; font-family: Arial, sans-serif;">
        <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
            <h1 style="font-size: 24px; font-weight: bold; margin-bottom: 20px;">Nuevo correo recibido</h1>
            <p>Has recibido un nuevo correo desde el formulario de contacto del sitio web {{ strval(env('APP_NAME')) }}.</p>
            <p>A continuación se muestran los detalles del mensaje:</p>
            <ul style="list-style-type: disc; margin-left: 20px; margin-top: 10px;">
                <li><strong>Nombre:</strong> {{ $name }}</li>
                <li><strong>Correo electrónico:</strong> {{ $email }}</li>
                <li><strong>Teléfono:</strong> {{ $phone }}</li>
            </ul>
            <p style="margin-top: 20px;"><strong>Mensaje:</strong></p>
            <p>{{ $message }}</p>
        </div>
    </body>
    </html>