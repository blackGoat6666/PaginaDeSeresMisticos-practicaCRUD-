<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle ?? 'Seres Misticos' }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #9A95AD;
        }
        header {
            background-color: #423E51;
            color: white;
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #423E51;
            color: white;
            padding: 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .sidebar {
            background-color: #69608C;
            color: white;
            padding: 20px;
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
        }
        .content {
            margin-left: 220px; /* Adjust this value according to your sidebar width */
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>{{ $pageTitle ?? 'Seres Misticos' }}</h1>
    </header>
    <div class="sidebar">
        <button>Bienvenida</button>
        <a href="{{route('dragones.create')}}"><button>Registrar dragon</button></a>
        <a href="{{route('dragones.index')}}"><button>Ver Dragones</button></a>
        <!-- Aquí puedes colocar enlaces, widgets, etc. para tu barra lateral -->
        <p>Barra lateral</p>
    </div>
    <div class="content">
        <!-- Aquí puedes colocar el contenido principal de tu página -->
        @yield('content')
    </div>
    <footer>
        <p>From Iarita</p>
    </footer>
</body>
</html>
