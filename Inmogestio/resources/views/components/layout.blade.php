<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Example Website' }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
      
    </head>
    <body class=" font-sans antialiased bg-purple-50">
    <nav>
     
      
    </nav>
    {{ $slot }}
    <footer>
      
    
    </footer>
  </body>
</html>