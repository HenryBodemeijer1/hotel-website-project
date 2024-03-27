@extends('layouts.app')

@section('content')
    <form method="post" action="{{ route('boeking.update', $boeking->id) }}">
        @csrf
        @method('PATCH')
        <div class="form-group">

            <label class="custom-file-label" for="upload-foto">selecteer kamer</label><br>
            <select class="custom-file-label" name="kamer_id">
                <option value=""></option>
                @foreach($kamers as $kamer){
                <option
                    value="{{$kamer->id}}"
                    {{$kamer->id == $boeking->kamer_id ? "selected" : ""}}>
                    {{$kamer->nummer}}
                </option>
                }
                @endforeach
            </select><br>
            <label class="custom-file-label" for="upload-foto">naam boeking</label><br>
            <input type="text" name="naam_booking"  class="custom-file-input" value="{{$boeking->naam_booking}}"><br>

            <label class="custom-file-label" for="upload-foto">nummer boeking</label><br>
            <input type="number" step=".01" name="nummer_booking"  class="custom-file-input" value="{{$boeking->nummer_booking}}"><br>

            <label class="custom-file-label" for="upload-foto">adres boeking</label><br>
            <input type="text" name="adres_booking"  class="custom-file-input" value="{{$boeking->adres_booking}}"><br>

            <label class="custom-file-label" for="upload-foto">creditcard</label><br>
            <input class="custom-file-input" type="number" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" name="creditcard_booking" value="{{$boeking->creditcard_booking}}"><br>

            <label class="custom-file-label" for="upload-foto">datum boeking</label><br>
            <input type="date" name="datum_booking"  class="custom-file-input" value="{{$boeking->datum_booking}}"><br>

            <label class="custom-file-label" for="upload-foto">aankomst</label><br>
            <input type="date" name="aankomst_booking"  class="custom-file-input" value="{{$boeking->aankomst_booking}}"><br>

            <label class="custom-file-label" for="upload-foto">vertrek</label><br>
            <input type="date" name="vertrek_booking"  class="custom-file-input" value="{{$boeking->vertrek_booking}}"><br><br>

        </div>
        <button type="submit" class="btn btn-primary">Wijzigen</button>
    </form>
@endsection


