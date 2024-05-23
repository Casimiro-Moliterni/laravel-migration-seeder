@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-start">
        <div class="div w-100">
            <h1>treni in partenza oggi</h1>
            @foreach ($trains as $singleTrain)
                <div class="ms_bg">
                    <div class="ms_overlay_card"></div>
                    <div class="ms_card card mb-2 border border-success border-3">
                        <div class="ms_overlay"></div>
                        <div class="d-flex justify-content-center align-items-center h-100 text-center position-relative fs-5">
                            <div>
                                <div class="ms_bg_color">Azienda:<strong>{{ $singleTrain->name }}</strong></div>
                                <div class="ms_bg_color">Stazione di partenza:<strong>{{ $singleTrain->departure_station }}</strong></div>
                                <div class="ms_bg_color">Stazione di arrivo :<strong>{{ $singleTrain->arrival_station }}</strong></div>
                                <div class="ms_bg_color">Orario di Partenza:<strong>{{ $singleTrain->time_departure }}</strong></div>
                                <div class="ms_bg_color">Orario di arrivo:<strong>{{ $singleTrain->time_arrival }}</strong></div>
                                <div class="ms_bg_color">Codice:<strong>{{ $singleTrain->code }}</strong></div>
                                <div class="ms_bg_color">Numero Carrozze:<strong>{{ $singleTrain->carriages }}</strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
