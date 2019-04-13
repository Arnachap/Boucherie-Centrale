@extends('layouts.app')

@section('title')
    - A Propos
@endsection

@section('content')
    <div class="container-fluid section">
        <h1 class="section-title">Boucherie Centrale</h1>

        <div class="row">
            <div class="col-6">
                <img src="/img/about.jpg" class="img-fluid d-block mx-auto" alt="L'équipe de la Boucherie Centrale Malzéville">
            </div>

            <div class="col-6 my-auto">
                <p class="about-intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                <p class="about-intro"> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Phasellus porttitor mi pellentesque sapien ullamcorper, vitae euismod nisl rutrum. Nulla interdum facilisis neque quis tristique. Phasellus scelerisque eros tincidunt est convallis, vitae tristique nulla auctor.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5042.4305934591775!2d6.181784831505207!3d48.70855750492738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794981b50049705%3A0x86a68ddccc5a7810!2sBoucherie+Centrale!5e0!3m2!1sen!2sfr!4v1555069895123!5m2!1sen!2sfr" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
@endsection