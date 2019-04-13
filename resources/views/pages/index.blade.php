@extends('layouts.app')

@section('title')
Malzéville - Boucherie - Charcuteire - Traiteur
@endsection

@section('content')
    <div id="headerSlider" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
            <li data-target="#headerSlider" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/slide_1.jpg" class="d-block w-100" alt="...">

                <div class="carousel-caption d-none d-md-block">
                    <h5>Boucherie Centrale à Malzéville</h5>
                    <p>Boucherie - Charcuterie - Traiteur</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="./img/slide_2.jpg" class="d-block w-100" alt="...">

                <div class="carousel-caption d-none d-md-block">
                    <h5>Notre Service Traiteur</h5>
                    <p>Venez découvrir nos offres du moment !</p>
                    <a href="/service-traiteur" class="link">Service Traiteur</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container section">
        <h2 class="section-title">Les dernières Actualités</h2>

        <div class="row">
            <div class="col-8 m-auto">
                <div class="row article">
                    <div class="col-8 d-flex flex-column">
                        <h3>La fête des pains 2019</h3>
                        <div class="text-muted">13 mai 2019</div>
                        <p>Organisée par la ville avec une grande nouveauté pour cette édition : l’implantation d’un village de boulangers sur le parking de la Rivière.</p>
                        <a href="#">Lire la suite</a>
                    </div>
        
                    <div class="col-4">
                        <img src="./img/fdp.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8 m-auto">
                <div class="row article">
                    <div class="col-8 d-flex flex-column">
                        <h3>La fête des pains 2019</h3>
                        <div class="text-muted">13 mai 2019</div>
                        <p>Organisée par la ville avec une grande nouveauté pour cette édition : l’implantation d’un village de boulangers sur le parking de la Rivière.</p>
                        <a href="#">Lire la suite</a>
                    </div>
        
                    <div class="col-4">
                        <img src="./img/fdp.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <a href="/actualités" class="link m-auto">Voir toutes les actualités</a>
        </div>
    </div>

    <div class="container-fluid p-0 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5042.4305934591775!2d6.181784831505207!3d48.70855750492738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794981b50049705%3A0x86a68ddccc5a7810!2sBoucherie+Centrale!5e0!3m2!1sen!2sfr!4v1555069895123!5m2!1sen!2sfr" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
@endsection