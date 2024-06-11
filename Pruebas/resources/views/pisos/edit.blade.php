<!-- resources/views/pisos/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Pisos</title>
</head>
<body>
    <h1>Formulario edició pisos</h1>

    <form method="POST" action="{{ route('pisos.update', $pis->id) }}">
        {{-- Metodo de seguridad --}}
        @csrf
        @method('PUT')     

        <label>Nom Referencia</label>
        <input name="nom_referencia" value="{{ old('nom_referencia', $pis->nom_referencia) }}">
        @error('nom_referencia')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Tipus</label>
        <input name="tipus" value="{{ old('tipus', $pis->tipus) }}">
        @error('tipus')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Direcció</label>
        <input name="direccio" value="{{ old('direccio', $pis->direccio) }}">
        @error('direccio')
        <p>{{ $message }}</p>
        @enderror
    
        <label>M2</label>
        <input name="m2" value="{{ old('m2', $pis->m2) }}">
        @error('m2')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Habitacions</label>
        <input name="habitacions" value="{{ old('habitacions', $pis->habitacions) }}">
        @error('habitacions')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Lavabos</label>
        <input name="lavabos" value="{{ old('lavabos', $pis->lavabos) }}">
        @error('lavabos')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Tipus de cuina</label>
        <input name="tipus_cuina" value="{{ old('tipus_cuina', $pis->tipus_cuina) }}">
        @error('tipus_cuina')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Descripció</label>
        <input name="descripcio" value="{{ old('descripcio', $pis->descripcio) }}">
        @error('descripcio')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Té ascensor?</label>
        <input name="ascensor" type="checkbox" value="1" {{ old('ascensor', $pis->ascensor) ? 'checked' : '' }}> Sí
        <input name="ascensor" type="hidden" value="0">
        @error('ascensor')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Estat</label>
        <input name="estat" value="{{ old('estat', $pis->estat) }}">
        @error('estat')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Preu</label>
        <input name="preu" value="{{ old('preu', $pis->preu) }}">
        @error('preu')
        <p>{{ $message }}</p>
        @enderror
    
        <button type="submit">Actualitzar</button>
        <a href="{{ route('pisos.index') }}">Cancelar</a>
      </form>
    
</body>
</html>
