<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

   @vite('resources/js/app.js')
</head>
<body class="bg-info">
  <div>
    <h1 class="text-center">BIGLIETTI TRENO</h1>
  <div class="d-flex flex-row flex-wrap gap-5 align-items-center justify-content-center">
    @foreach ($train as $singletrain)
    <div class="bg-light w-25 text-center p-4">
       <h4>Azienda:{{$singletrain['Azienda']}}</h1>
       <p>Stazione di partenza:{{$singletrain['Stazione_di_partenza']}}</p>
       <p>Stazione di arrivo:ì{{$singletrain['Stazione_di_arrivo']}}ì</p>
       <p>Orario di partenza:{{$singletrain['Orario_di_partenza']}}</p>
       <p>Orario di arrivo:{{$singletrain['Orario_di_arrivo']}}</p>
       <p>COD:{{$singletrain['Codice_treno']}}</p>
       <p>N.carrozze:{{$singletrain['Numero_carrozze']}}</p>
       <p>e' in orario:{{$singletrain['In_orario'] }}</p>
       <p>è cancellato:{{$singletrain['Cancellato']}}</p>
      </div> 
    @endforeach
  </div>
  </div>
</body>
</html>
