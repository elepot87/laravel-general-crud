<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('images/logo-jokes.png')}}" alt="logo" class="d-inline-block align-text-center logo">
        Smiling <span class="highlighted">Jokes</span> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if (Request::route()->getName()==='jokes.index')
                        active
                    @endif" href="{{route('jokes.index')}}"
                    aria-current="page" href="{{route('jokes.index')}}">Jokes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('jokes.create')}}">Create Jokes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
</header>