@extends('layouts.app')

@section('content')

    <form method="post" enctype="multipart/form-data" action="{{ route('kamer.store') }}">
        @csrf
        <label class="custom-file-label" for="upload-foto">Upload Foto</label>
        <input type="file" name="foto" class="custom-file-input" id="upload-foto"><br>

        <label class="custom-file-label" for="upload-foto">Naam kamer</label><br>
        <input type="text" name="naam"  class="custom-file-input"><br>

        <label class="custom-file-label" for="upload-foto">Nummer kamer</label><br>
        <input type="number" name="nummer"  class="custom-file-input"><br>

        <label class="custom-file-label" for="upload-foto">Oppervlakte kamer</label><br>
        <input type="number" name="opervalkte"  class="custom-file-input"><br>

        <label class="custom-file-label" for="upload-foto">minibar kamer</label><br>
        <input type="text" name="minibar"  class="custom-file-input"><br>

        <label class="custom-file-label" for="upload-foto">bad kamer</label><br>
        <input type="text" name="bad"  class="custom-file-input"><br>

        <label class="custom-file-label" for="upload-foto">prijs kamer</label><br>
        <input type="number" step=".01" name="prijs"  class="custom-file-input"><br>

        <label class="custom-file-label" for="upload-foto">persoonen</label><br>
        <input type="number" step=".01" name="aantal_personen"  class="custom-file-input"><br><br>

        <button type="submit" class="btn btn-primary">Toevoegen</button>
    </form>



@endsection
