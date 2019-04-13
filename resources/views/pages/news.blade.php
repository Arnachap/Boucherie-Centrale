@extends('layouts.app')

@section('title')
    - Actualités
@endsection

@section('content')
    <div class="container section">
        <h2 class="section-title">Actualités</h2>

        <div class="row">
            <div class="col-8 m-auto">
                <a href="/actualités/1">
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
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-8 m-auto">
                <a href="/actualités/1">
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
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-8 m-auto">
                <a href="/actualités/1">
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
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-8 m-auto">
                <a href="/actualités/1">
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
                </a>
            </div>
        </div>

        <div class="row">
            <nav aria-label="news-pagination" class="m-auto">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Précédent</a>
                    </li>
    
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                    </li>
    
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
    
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
    
                    <li class="page-item">
                        <a class="page-link" href="#">Suivant</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection