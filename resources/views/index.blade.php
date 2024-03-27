@extends('layouts.app')

@section('content')
    <section class="hero-banner bg-light py-5">
        <div class="container">
            <div class="row row align-items-center">
                <div class="col-lg-5 offset-lg-1 order-lg-1">
                    <img src="{{asset('/storage/hotel.jpg')}}" alt="Web Development" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h1 class="mt-3">Burj al arab</h1>
                    <p class="lead text-secondary my-5">Dit luxe hotel ligt op een eiland en is gevestigd in een opvallend, zeilvormig gebouw, op 5 minuten lopen van het waterpark Wild Wadi en op 4 km van het winkelcentrum Mall of the Emirates.</p><br>
                    <h1 class="mt-3">Informatie</h1>
                    <p class="lead text-secondary my-5">De weelderige suites hebben kamerhoge ramen met uitzicht op de golf of de stad. Alle kamers hebben een 24-karaats gouden iPad, gratis wifi, een flatscreen-tv en een iPod. De kamers zijn voorzien van Egyptisch beddengoed, designertoiletartikelen, een bubbelbad en een butlerservice. De luxere suites hebben een biljarttafel, een bibliotheek, een bioscoop en een privélift.</p>
                    <a href="klant" class="btn btn-outline-secondary btn-lg border">Order Now</a>
                </div>
            </div>
        </div>
    </section>
@endsection
