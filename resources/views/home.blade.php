@extends('layouts.master')

@section('titolo')
    Tabellone treni
@endsection

@section('contenuto')
    <h1 class="text-center mb-5 fw-semibold">Elenco delle partenze ordiante per data ed orario di partenza</h1>

    <div class="row g-4 ">
        @foreach ($trains as $train)
            <div class="col-4">
                <x-card>
                    <x-slot:company>
                        <div class="main-text"><b>Compagnia: </b> {{ $train->company_name }}
                    </x-slot:company>
            </div>
            <x-slot:departureStation>
                <div class="main-text"><b>Stazione di partenza: </b>{{ $train->train_departure_station }}</div>
            </x-slot:departureStation>
            <x-slot:arrivalStation>
                <div class="main-text"><b>Stazione di arrivo: </b>{{ $train->train_arrival_station }}</div>
            </x-slot:arrivalStation>
            <x-slot:departureTime>
                <div class="main-text"><b>Orario di partenza: </b>{{ $train->train_departure_time }}</div>
            </x-slot:departureTime>
            <x-slot:arrivalTime>
                <div class="main-text"><b>Orario di arrivo: </b>{{ $train->train_arrival_time }}</div>
            </x-slot:arrivalTime>
            <x-slot:trainCode>
                <div class="main-text"><b>Codice treno: </b>{{ $train->train_code }}</div>
            </x-slot:trainCode>
            <x-slot:food>
                <div class="main-text"><b>Bar disponibile: </b>{{ $train->is_food_available ? 'Sì' : 'No' }}</div>
            </x-slot:food>
            <x-slot:wagonNumber>
                <div class="main-text"><b>Numero di vagoni: </b>{{ $train->number_of_wagon }}</div>
            </x-slot:wagonNumber>
            <x-slot:onTime>
                <div class="main-text"><b>E' in orario: </b>{{ $train->is_on_time ? 'Sì' : 'No' }}</div>
            </x-slot:onTime>
            <x-slot:Cancelled>
                <div class="main-text"><b>E' cancellato: </b>{{ $train->is_cancelled ? 'Sì' : 'No' }}</div>
            </x-slot:Cancelled>

            </x-card>
    </div>
    @endforeach
    </div>
@endsection
