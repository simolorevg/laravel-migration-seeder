@extends('layouts.app')
<h1 class="text-center">
    Treni
</h1>
<div class="container d-flex justify-content-center align-items-center">
    <table class="table">
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
            <tr>
                @foreach ($trains as $train)
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
                            <p>SI</p>
                        @else
                            <p>NO</p>
                        @endif
                    </td>
                    <td>
                        @if ($train->late == 1)
                            <p>SI</p>
                        @else
                            <p>NO</p>
                        @endif
                    </td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
