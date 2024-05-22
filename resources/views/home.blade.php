@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-start">
        <div class="div">
            <h1>treni</h1>
            @foreach ($trains as $singleTrain)
                <div>
                    <div class="card mb-2" >
                        <img src="https://thumbs.dreamstime.com/b/treno-27907878.jpg" alt="">
                        <div class="card-body">
                            <div>Azienda:<strong>{{ $singleTrain->name }}</strong></div>
                            <div>Stazione di partenza:<strong>{{ $singleTrain->departure_station}}</strong></div>
                            <div>Stazione di arrivo :<strong>{{ $singleTrain->arrival_station }}</strong></div>
                            <div>Orario di Partenza:<strong>{{ $singleTrain->time_departure }}</strong></div>
                            <div>Orario di arrivo:<strong>{{ $singleTrain->time_arrival }}</strong></div>
                            <div>Codice:<strong>{{ $singleTrain->code}}</strong></div>
                            <div>Numero Carrozze:<strong>{{ $singleTrain->carriages }}</strong></div>
                            <div><strong>{{ $singleTrain->in_time }}</strong></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
