@extends('layout/app')

@section('title', 'Home')

@extends('layout/navigations')

@section('content')

<div class="container mt-5" id="home">
  <div class="row content" data-aos="zoom-in-down" data-aos-duration="800">
    <div class="col-md-6 col-sm-12 custom-desc">
      <div class="desc">
        <h1>Muhammad Reza</h1>
        <h4>Frontend Developer</h4>
        <p>Hi, My name Muhammad Reza Aditya, call me Reza. I'm Frontend Developer from Indonesia.
          I have studied as a Web designer for over 1 year and still love to do it every day.</p>
        <a href="" class="btn shadow">Contact us</a>
      </div>
    </div>
    <div class="col-md-6 col-sm-12 custom-image">
      <div class="image">
        <img src="{{ ('img/img-reza.png') }}" class="responsive-image" alt="">
      </div>
    </div>
  </div>
</div>

<!-- skill -->
<div class="container mt-5" id="skills">
  <h2 class="text-center text-uppercase" data-aos="fade-down">my skill</h2>
  <hr>
  <div class="row custom-skill">
    <div class="col-md-4 col-sm-12">
      <div class="card shadow mt-2" data-aos="fade-up" data-aos-duration="500">
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
      <div class="card shadow mt-2" data-aos="fade-up" data-aos-duration="1000">
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
      <div class="card shadow mt-2" data-aos="fade-up" data-aos-duration="1500">
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

  <div class="row">
    <div class="col-md-4 col-sm-12">
      <div class="card shadow mt-2" data-aos="fade-up" data-aos-duration="1800">
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
      <div class="card shadow mt-2" data-aos="fade-up" data-aos-duration="2100">
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
      <div class="card shadow mt-2" data-aos="fade-up" data-aos-duration="2300">
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
</div>



<!-- hire -->
<section class="hire py-5">
  <div class="container mb-3">
    <div class="row justify-content-center text-center">
      <div class="col-12">
        <h2 data-aos="fade-up">I am Frontend Developer</h2>
      </div>
      <div class="col-12 mt-3">
        <a href="" class="btn shadow btn-hire text-capitalize" data-aos="fade-up" data-aos-duration="500">hire me</a>
        <a href="" class="btn shadow btn-project text-capitalize" data-aos="fade-up" data-aos-duration="1000">see all project</a>
      </div>
    </div>
  </div>
</section>

<div class="animasi-box" data-aos="fade-right">
  <img src="{{ ('img/box.png') }}" alt="">
</div>

<section id="card">
  <div class="container" id="contact">
    <div class="card card-desc shadow text-center py-2" data-aos="fade-zoom-in" data-aos-duration="1000">
      <h5 class="text-capitalize">tools my work</h5>
    </div>
    <div class="row justify-content-center tools">
      <div class="layout-tools" data-aos="fade-zoom-in" data-aos-duration="500">
        <img src="{{ ('img/figma.png') }}" class="img-figma" alt="">
        <img src="{{ ('img/vscode.png') }}" class="img-vscode" alt="">
      </div>
    </div>
  </div>
</section>

@endsection