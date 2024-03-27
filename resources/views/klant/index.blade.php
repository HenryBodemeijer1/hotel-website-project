@extends('layouts.app')

@section('content')
    @foreach ($kamers as $kamer)

<div class="booking">
                            <h1 class="mt-3">{{ $kamer->naam }}</h1>

                        <img class="foto-klant" src="{{asset('storage/' . $kamer->foto)}}" alt="Web Development"  width="350px" height="230px">

                    <p>{{ $kamer->nummer }}</p><br>
                    <p>{{ $kamer->prijs }}</p><br>

                    <p>{{ $kamer->opervalkte }}</p><br>
                    <p>{{ $kamer->aantal_personen }}</p><br>
                    <p>{{ $kamer->bad }}</p><br>
                    <p>{{ $kamer->minibar }}</p><br>
    <a href="{{ route('create', $kamer->id)}}" class="btn btn-primary">
        Maak booking
    </a>
</div>
    @endforeach
@endsection
