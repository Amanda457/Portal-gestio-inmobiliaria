<!-- resources/views/pisos/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Pisos</title>
</head>
<body>
    <h1>Formulario creació pisos</h1>

    <form method="POST" action="{{ route('pisos.store')}}"  >
        {{-- Metodo de seguridad --}}
        @csrf
        <label>Nom Referencia</label>
        <input name = "nom referencia">

        <label>Direcció</label>
        <input name = "direccio">

        <label>M2</label>
        <input name = "m2">

        <label>Habitacions</label>
        <input name = "habitacions">

        <label>Lavabos</label>
        <input name = "lavabos">


        <label>Tipus de cuina</label>
        <input name = "tipus_cuina">

        <label>Descripció</label>
        <input name = "descripio">

        <label>Té ascensor?</label>
        <input name = "ascensor">

        <label>Estat</label>
        <input name = "estat">

        <label>Preu</label>
        <input name = "preu">
        
        <button type="submit">Guardar</button>
        <a href="{{ route('pisos.index')}}">Cancelar</a>
    </form>
    
</body>
</html>
