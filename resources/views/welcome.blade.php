@extends('layouts.app')
<div class="container d-flex justify-content-center align-items-center p-2">
    <img src="{{ Vite::asset('resources\img\logo-no-background.png') }}" alt="Booltrain" width="200" height="100">
</div>
<div class="container d-flex justify-content-center align-items-center">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Azienda</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">Carrozze</th>
                <th scope="col">Partenza</th>
                <th scope="col">Arrivo</th>
                <th scope="col">Orario Partenza</th>
                <th scope="col">Orario Arrivo</th>
                <th scope="col">Orario?</th>
                <th scope="col">Ritardo?</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <th scope="row">{{ $train->id }}</th>
                    <td>{{ $train->agency }}</td>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->carriages }}</td>
                    <td>{{ $train->departure }}</td>
                    <td>{{ $train->arrivals }}</td>
                    <td>{{ $train->time_departure }}</td>
                    <td>{{ $train->time_arrival }}</td>
                    <td>
                        @if ($train->in_time == 1)
                            <p class="badge text-bg-success">SI</p>
                        @else
                            <p class="badge text-bg-danger">NO</p>
                        @endif
                    </td>
                    <td>
                        @if ($train->late == 1)
                            <p class="badge text-bg-danger">SI</p>
                        @else
                            <p class="badge text-bg-success">NO</p>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
