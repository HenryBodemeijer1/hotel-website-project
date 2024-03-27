@extends('layouts.app')

@section('content')
    <ul>
        <table class="table">
            <a href="{{ route('kamer.create')}}" class="btn btn-primary">kamer aanmaken</a>
            <thead>
            <tr>
                <td>kamer</td>
                <td>nummer</td>
                <td>foto</td>
                <td>prijs</td>
                <td>opervlakte</td>
                <td>aantal_porsonen</td>
                <td>bad</td>
                <td>minibar</td>
                <td></td>
                <td></td>
                <td>edit</td>
                <td>delete</td>


            </tr>
            </thead>
            <tbody>
        @foreach ($kamers as $kamer)
            <tr>
                <td>{{ $kamer->naam }}</td>
                <td>{{ $kamer->nummer }}</td>
                <td><img src="{{asset('storage/' . $kamer->foto)}}" width="350px" height="230px"></td>
                <td>{{ $kamer->prijs }}</td>
                <td>{{ $kamer->opervalkte }}</td>
                <td>{{ $kamer->aantal_personen }}</td>
                <td>{{ $kamer->bad }}</td>
                <td>{{ $kamer->minibar }}</td>
                <td></td>
                <td></td>
                <td>
                    <a href="{{ route('kamer.edit',$kamer->id)}}" class="btn btn-primary">Wijzig</a>
                </td>
                <td>
                    <form action="{{ route('kamer.destroy', $kamer->id)}}" method="post">
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




