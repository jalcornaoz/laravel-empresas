<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(["resources/js/app.js","resources/css/app.css"])
</head>
<body>

    <h1>Hola en la Página Principal</h1>

    <hr>
    <div id="app">
        <saludo nombre="Pedro"></saludo>
        <cronometro></cronometro>
    </div>
    
</body>
</html>