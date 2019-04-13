<div class="navbar fixed-top navbar-expand-lg {{ Request::is('/') ? '' : 'scrolled'}}">
    <div class="container">
        
        <a class="navbar-brand" href="/">Boucherie Centrale</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="/actualités" class="nav-link {{ Request::is('actualités*') ? 'active' : ''}}">Actualités</a>
                </li>
                
                <li class="nav-item">
                    <a href="/service-traiteur" class="nav-link {{ Request::is('service-traiteur') ? 'active' : ''}}">Service Traiteur</a>
                </li>
                    
                <li class="nav-item">
                    <a href="/à-propos" class="nav-link {{ Request::is('à-propos') ? 'active' : ''}}">à propos</a>
                </li>

                <li class="nav-item">
                    <a href="/contact" class="nav-link {{ Request::is('contact') ? 'active' : ''}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>