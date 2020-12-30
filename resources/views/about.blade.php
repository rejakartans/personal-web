@extends('layout/app')

@extends('layout/navigations')

@section('title', 'about')

@section('content')

<!-- skill
<div class="container mt-5" id="skills">
  <h2 class="text-center text-uppercase" data-aos="fade-down">my skill</h2>
  <hr>
  <div class="row custom-skill">
    <div class="col-md-4 col-sm-12">
      <div class="card shadow" data-aos="fade-up" data-aos-duration="500">
        <div class="card-body">
          <div class="row">
            <div class="col-3 custom-img">
              <img src="{{ ('img/sass.png') }}" width=" 70px" alt="">
            </div>
            <div class="col-9 custom-desc">
              <h3>Sass</h3>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-12">
      <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
        <div class="card-body">
          <div class="row">
            <div class="col-3">
              <img src="{{ ('img/php.png') }}" class="mt-3" width=" 70px" alt="">
            </div>
            <div class="col-9">
              <h3>PHP</h3>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-12">
      <div class="card shadow" data-aos="fade-up" data-aos-duration="1500">
        <div class="card-body">
          <div class="row">
            <div class="col-3">
              <img src="{{ ('img/javascript.svg') }}" width=" 50px" alt="">
            </div>
            <div class="col-9">
              <h3>JavaScript</h3>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 38%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-md-4 col-sm-12">
      <div class="card shadow" data-aos="fade-up" data-aos-duration="500">
        <div class="card-body">
          <div class="row">
            <div class="col-3">
              <img src="{{ ('img/bootstrap.png') }}" width=" 70px" alt="">
            </div>
            <div class="col-9">
              <h3>Bootstrap</h3>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-12">
      <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
        <div class="card-body">
          <div class="row">
            <div class="col-3">
              <img src="{{ ('img/laravel.png') }}" width=" 55px" alt="">
            </div>
            <div class="col-9">
              <h3>Laravel</h3>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 43%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-12">
      <div class="card shadow" data-aos="fade-up" data-aos-duration="1500">
        <div class="card-body">
          <div class="row">
            <div class="col-3">
              <img src="{{ ('img/react.png') }}" width=" 55px" alt="">
            </div>
            <div class="col-9">
              <h3>React</h3>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 35%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<div id="coming-soon">
  <div class="container text-center mb-5 content">
    <img src="{{ ('img/planet.png') }}" alt="" data-aos="zoom-in">
    <h1 class="text-uppercase" data-aos="fade-up">about</h1>
    <hr>
    <h3 data-aos="fade-up">Coming Soon</h3>
  </div>
</div>

@endsection