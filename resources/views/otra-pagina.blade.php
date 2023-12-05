<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aves de Guatemala</title>
</head>
<body>
<div style="text-align: center; margin-top: 50px;">
    <h1>AVES DE GUATEMALA</h1>
    <p>Número de Registros Encontrados: {{ $apiData['numSpecies'] }}</p>

    <!-- Ciclo para obtener las grabaciones -->
    @foreach ($apiData['recordings'] as $recording)
        <div>
            <!-- Obtencion del audio y reproduccion -->
            <audio controls>
                <source src="{{ $recording['file'] }}" type="audio/mp3">
            </audio>
            <p><strong>Familia: </strong>{{$recording['gen']}}</p>
            <p><strong>Nombre: </strong>{{ $recording['en'] }} </p>
            <p><strong>Ubicación: </strong> {{ $recording['cnt'] }} {{ $recording['loc'] }} </p>
            <p><strong>Descubridor: </strong> {{ $recording['rec'] }}</p>
        </div>
        <hr>
    @endforeach
</div>
</body>
</html>
