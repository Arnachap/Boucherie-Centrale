@extends('layouts.app')

@section('title')
    - Contact
@endsection

@section('content')
    <div class="container section">
        <h1 class="section-title">Contact</h1>

        <h3 class="section-subtitle">Une question? Une demande de devis?<br>
            N'hésithez pas à nous contacter, nous serons ravis de vous répondre.</h3>

        <div class="row">
            <nav aria-label="news-pagination" class="mx-auto mt-5">
                <ul class="pagination">
                    <li class="page-item active" id="msgBtn">
                        <a class="page-link" href="#">Envoyer un message</a>
                    </li>

                    <li class="page-item" id="estimateBtn">
                        <a class="page-link" href="#">Demander un devis</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="col-6 mx-auto">
                <form action="#" class="contact-form" id="msgForm">
                    <input type="text" name="name" id="name" placeholder="Nom">
                    <input type="email" name="email" id="email" placeholder="Adresse E-mail">
                    <input type="text" name="subject" id="subject" placeholder="Sujet du message">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message"></textarea>
                    <button type="submit" class="btn btn-lg mx-auto link">Envoyer</button>
                </form>

                <form action="#" class="contact-form" id="estimateForm" style="display: none;">
                    <input type="text" name="name" id="name" placeholder="Nom">
                    <input type="email" name="email" id="email" placeholder="Adresse E-mail">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date">
                    <input type="number" name="number" id="number" placeholder="Nombre de personnes">
                    <label for="occasion">Quelle occasion ?</label>
                    <textarea name="occasion" id="occasion" cols="30" rows="2" placeholder="Mariage, repas de famille, repas d'affaire, séminaire, apéritif..."></textarea>
                    <label for="occasion">Quel type de réception ?</label>
                    <textarea name="type" id="type" cols="30" rows="2" placeholder="Buffet froid, buffet chaud et froid, plateau repas, repas à table..."></textarea>
                    <textarea name="occasion" id="occasion" cols="30" rows="5" placeholder="Détails"></textarea>
                    <button type="submit" class="btn btn-lg mx-auto link">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
@endsection