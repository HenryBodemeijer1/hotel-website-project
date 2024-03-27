@extends('layouts.app')

@section('content')

    <ul>


    <table class="table">
        <a href="{{ route('boeking.create')}}" class="btn btn-primary">boeking aanmaken</a>
<thead>
<tr>
    <td>id</td>
    <td>naam</td>
    <td>nummer</td>
    <td>adres</td>
    <td>creditcard</td>
    <td>datum</td>
    <td>aankomst</td>
    <td>vertrek</td>
    <td></td>
    <td></td>
    <td>edit</td>
    <td>delete</td>
</tr>
</thead>
<tbody>
@foreach ($boekings as $boeking)
    <tr>
        <td>{{ $boeking->kamer_id }}</td>
        <td>{{ $boeking->naam_booking }}</td>
        <td>{{ $boeking->nummer_booking }}</td>
        <td>{{ $boeking->adres_booking }}</td>
        <td>{{ $boeking->creditcard_booking }}</td>
        <td>{{ $boeking->datum_booking }}</td>
        <td>{{ $boeking->aankomst_booking }}</td>
        <td>{{ $boeking->vertrek_booking }}</td>
        <td></td>
        <td></td>
        <td>
            <a href="{{ route('boeking.edit',$boeking->id)}}" class="btn btn-primary">Wijzig</a>
        </td>
        <td>
            <form action="{{ route('boeking.destroy', $boeking->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Verwijder</button>
            </form>
        </td>
    </tr>

@endforeach
</tbody>
    </table>
        <br><br>
        <br><br>



@endsection

