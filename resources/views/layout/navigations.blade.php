<!-- Navigations -->

<nav class="navbar navbar-expand-lg navbar-light shadow" data-aos="fade-down">
  <div class="container brand">
    <a class="navbar-brand" href="/">
      Rejakartans</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link{{ request()->is('/') ? ' active' : '' }}" href="/">Home</a>
        <a class="nav-item nav-link{{ request()->is('portfolio') ? ' active' : '' }}" href="/portfolio">Portfolio</a>
        <a class="nav-item nav-link{{ request()->is('about') ? ' active' : '' }}" href="/about">About</a>
        <a class="nav-item nav-link{{ request()->is('contact') ? ' active' : '' }}" href="/#contact">Contact us</a>
      </div>
    </div>
  </div>
</nav>