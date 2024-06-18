<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear reserva</title>
</head>
<body>
    <h1>Formulari reserva nova</h1>

    <form method="POST" action="{{ route('reservas.store') }}">
        {{-- Metodo de seguridad --}}
        @csrf

        <div class="form-group">
            <label for="client_id">Seleccionar Client:</label>
            <select name="client_id" id="client_id" class="form-control" value="{{ old('client_id') }}">
                <option value="">Seleccionar Client</option>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->nom }}</option>
                @endforeach
            </select>
        </div>
    
        {{-- <div class="form-group">
            <label for="pis_id">Seleccionar Pis:</label>
            <select name="pis_id" id="pis_id" class="form-control" value="{{ old('pis_id') }}">
                <option value="">Seleccionar Pis</option>
                @foreach($pisos as $pis)
                    <option value="{{ $pis->id }}">{{ $pis->nom_referencia }}</option>
                @endforeach
            </select>
        </div> --}}

        <label>Cognom</label>
        <input name="cognom" value="{{ old('cognom') }}">
        @error('cognom')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Telèfon</label>
        <input name="telefon" value="{{ old('telefon') }}">
        @error('telefon')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Data de naixement</label>
        <input name="data_naixement" value="{{ old('data_naixement') }}">
        @error('data_naixement')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Correu electrònic</label>
        <input name="email" value="{{ old('email') }}">
        @error('email')
        <p>{{ $message }}</p>
        @enderror
        
        <button type="submit">Guardar</button>
        <a href="{{ route('clients.index') }}">Cancelar</a>
      </form>
    
</body>
</html>