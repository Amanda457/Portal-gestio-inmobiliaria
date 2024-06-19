<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar reserva</title>
</head>
<body>
    <h1>Formulari editar reserva</h1>

    <form method="POST" action="{{ route('reservas.update', $reserva->id) }}">
        {{-- Metodo de seguridad --}}
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="client_id">Seleccionar Client:</label>
            <select name="client_id" id="client_id" class="form-control" value="{{ old('client_id', $reserva->client_id) }}" disabled>
                <option value="">Seleccionar Client</option>
                @foreach($clients as $client)
                <option value="{{ $client->id }}" {{ $client->id == old('client_id', $reserva->client_id) ? 'selected' : '' }}>
                    {{ $client->nom }} {{ $client->cognom }}
                </option>
                 @endforeach
            </select>
            @error('client_id')
            <p>{{ $message }}</p>
            @enderror
        </div>
    
         <div class="form-group">
            <label for="pis_id">Seleccionar Pis:</label>
            <select name="pis_id" id="pis_id" class="form-control" value="{{ old('pis_id', $reserva->pis_id) }}" disabled>
                <option value="">Seleccionar Pis</option>
                @foreach($pisos as $pis)
                <option value="{{ $pis->id }}" {{ $pis->id == old('pis_id', $reserva->pis_id) ? 'selected' : '' }}>
                    {{ $pis->nom_referencia }}
                </option>
                 @endforeach
            </select>
            @error('pis_id')
            <p>{{ $message }}</p>
            @enderror
        </div> 

        <label>Data de Reserva</label>
        <input type="text" value="{{$reserva->data_reserva }}" disabled>
    
        <div class="form-group">
            <label>Estat</label>
            <select name="estat">
                <option value="Per revisar" {{ $reserva->estat == 'Per revisar' ? 'selected' : '' }}>Per revisar</option>
                <option value="Aprovada" {{ $reserva->estat == 'Aprovada' ? 'selected' : '' }}>Aprovada</option>
                <option value="Rebutjada" {{ $reserva->estat == 'Rebutjada' ? 'selected' : '' }}>Rebutjada</option>
            </select>
            @error('estat')
            <p>{{ $message }}</p>
            @enderror
        </div>
        
        <button type="submit">Actualitzar</button>
        <a href="{{ route('reservas.index') }}">Cancelar</a>
      </form>
    
</body>
</html>