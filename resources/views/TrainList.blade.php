<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-Migration</title>
</head>
    <body>
        
     <ul>
        @foreach ($Trains as $Train)
          <li>
             Compagna:
            {{ $Train->Company }}<br>
            Parte Da:
            {{ $Train->Depature_station}}<br>
            Arriva A
            {{ $Train->Arrival_station}}<br>
            Parte Alle Ore
            {{ $Train->Depature_Time}}<br>
            arriva Alle Ore
            {{ $Train->Arrival_Time}}<br>
            Codice
            {{ $Train->Train_Code}}<br>
            Numero-Carrozze
            {{$Train->Number_Carriages}}<br>
            {{ $Train->In_time}}
            {{ $Train->Cancelled}}
            
          </li>
            
        @endforeach
     </ul>
  

    </body>
</html>