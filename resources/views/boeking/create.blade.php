@extends('layouts.app')

@section('content')

    <form method="post" enctype="multipart/form-data" action="{{ route('boeking.store') }}">
        @csrf

        <label class="custom-file-label" for="upload-foto">selecteer kamer</label><br>
        <select class="custom-file-label" name="kamer_id">
            @foreach($kamers as $kamer)
                <option value="{{$kamer->id}}">{{$kamer->nummer}}</option>
            @endforeach
        </select><br>

        <label class="custom-file-label" for="upload-foto">naam boeking</label><br>
        <input type="text" name="naam_booking"  class="custom-file-input"><br>

        <label class="custom-file-label" for="upload-foto">nummer boeking</label><br>
        <input type="number" step=".01" name="nummer_booking"  class="custom-file-input"><br>

        <label class="custom-file-label" for="upload-foto">adres boeking</label><br>
        <input type="text" name="adres_booking"  class="custom-file-input"><br>

        <label class="custom-file-label" for="upload-foto">creditcard</label><br>
        <input class="custom-file-input" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" name="creditcard_booking"><br>

        <label class="custom-file-label" for="upload-foto">datum boeking</label><br>
        <input type="date" name="datum_booking"  class="custom-file-input"><br>

        <label class="custom-file-label" for="upload-foto">aankomst</label><br>
        <input type="date" name="aankomst_booking"  class="custom-file-input"><br>

        <label class="custom-file-label" for="upload-foto">vertrek</label><br>
        <input type="date" step=".01" name="vertrek_booking"  class="custom-file-input"><br><br>

        <button type="submit" class="btn btn-primary">Toevoegen</button>
    </form>



@endsection


