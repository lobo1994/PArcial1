<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}" style="color:#777"><span style="font-size:15pt">&#9816;</span> Quiero a mi mascota</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( true || Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('catalog') && ! Request::is('catalog/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/caninos')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Catálogo para Caninos 
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('catalog') && ! Request::is('catalog/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/felinos')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Catálogo para felinos  
                        </a>
                    </li>
                    
                </ul>

                <ul class="navbar-nav navbar-right">
                <li class="nav-item {{ Request::is('catalog') && ! Request::is('catalog/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/Contactos')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Contactos
                        </a>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>
