<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand d-none d-sm-block" href="#">undangan<span>cintaku</span></a>
    <a class="navbar-brand d-block d-sm-none" href="#">
      <img src="/assets/images/logo-sm.png" alt="">
    </a>
    <button id="hamburgerButton" class="d-sm-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="inner-line"></div>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link{{ (request()->is('/') ? " active": "") }}" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/#feature') }}">Fitur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Design</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/#pricing') }}">Harga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/#faq') }}">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ (request()->is('login') ? " active": "") }}" href="{{ route('login') }}">Masuk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ (request()->is('register') ? " active": "") }}" href="{{ route('register') }}">Daftar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>