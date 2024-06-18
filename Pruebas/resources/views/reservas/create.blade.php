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
                    <option value="{{ $client->id }}">{{ $client->nom }} {{ $client->cognom }}</option>
                @endforeach
            </select>
            @error('client_id')
            <p>{{ $message }}</p>
            @enderror
        </div>
    
         <div class="form-group">
            <label for="pis_id">Seleccionar Pis:</label>
            <select name="pis_id" id="pis_id" class="form-control" value="{{ old('pis_id') }}">
                <option value="">Seleccionar Pis</option>
                @foreach($pisos as $pis)
                    <option value="{{ $pis->id }}">{{ $pis->nom_referencia }}</option>
                @endforeach
            </select>
            @error('pis_id')
            <p>{{ $message }}</p>
            @enderror
        </div> 

        <label>Data de Reserva</label>
        <input type="text" value="{{ now()->toDateTimeString() }}" readonly>
       
        
        <label>Estat</label>
        <select name="estat" disabled>
            <option value="Per revisar" selected>Per revisar</option>
            <option value="Aprovada">Aprovada</option>
            <option value="Rebutjada">Rebutjada</option>
        </select>
        <input type="hidden" name="estat" value="Per revisar">
        @error('estat')
        <p>{{ $message }}</p>
        @enderror
        
        
        <button type="submit">Guardar</button>
        <a href="{{ route('reservas.index') }}">Cancelar</a>
      </form>
    
</body>
</html>