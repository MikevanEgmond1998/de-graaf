@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Mijn reserveringen</h1>
            <div class="row mx-auto">

                <div class="col-lg-4 card-container scale-animation">

                    <a href="{{ url('/reserveringen/dag')  }}" class="card pointer border-top">

                        <div class="row card-content-admin-container">

                            <div class="col-9 card-content-admin">
                                <h3>Vandaag</h3>
                            </div>

                            <div class="col-3 icon-container">
                            </div>

                        </div>

                    </a>

                </div>

                <div class="col-lg-4 card-container scale-animation">

                    <a href="{{ url('/reserveringen/week') }}" class="card pointer border-top">

                        <div class="row card-content-admin-container">

                            <div class="col-9 card-content-admin">
                                <h3>Komende week</h3>
                            </div>

                            <div class="col-3 icon-container">
                            </div>

                        </div>

                    </a>

                </div>

                <div class="col-lg-4 card-container scale-animation">

                    <a href="{{ url('/reserveringen/maand')  }}" class="card pointer border-top">

                        <div class="row card-content-admin-container">

                            <div class="col-9 card-content-admin">
                                <h3>Komende maand</h3>
                            </div>

                            <div class="col-3 icon-container">
                            </div>

                        </div>

                    </a>

                </div>

            </div>
            <table class="table">
                <tr><th class="d-lg-none" colspan="2">Reserveringen</th><th class="d-none d-lg-table-cell">Datum</th><th class="d-none d-lg-table-cell">Tijd</th><th class="d-none d-lg-table-cell">Aantal personen</th><th class="d-none d-lg-table-cell">Opmerking</th><th class="d-none d-lg-table-cell">Tafel</th>
                @foreach($user->reservations as $reservation)
                    <tr>

                        <td  class="d-none d-lg-table-cell">{{$reservation->date}}</td>
                        <td class="d-none d-lg-table-cell">
                            {{$reservation->time}}
                        </td>
                        <td class="d-lg-none"><b>Datum:<br></b>{{$reservation->date}}<br> <b>Tijd<br></b>{{$reservation->time}}</td>

                        <td class="d-lg-none"> <b>Aantal personen:<br></b>{{$reservation->people}}<b><br>Tafels:<br></b>@foreach($reservation->tables as $table)
                                {{$table->id}}<br>
                            @endforeach
                        </td>


                        <td class="d-none d-lg-table-cell">
                            {{$reservation->people}}
                        </td>
                        <td class="d-none d-lg-table-cell">
                            {{$reservation->comment}}
                        </td>
                        <td class="d-none d-lg-table-cell">
                            @foreach($reservation->tables as $table)
                                {{$table->id}}<br>
                            @endforeach

                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
