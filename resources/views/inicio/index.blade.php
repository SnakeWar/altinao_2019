<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Custom fonts for this template -->

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->


    <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Campeonato Altinão</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#download">Tabela</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#features">Jogos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Escalação</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#cta">Galeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ URL::to('login') }}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-sm-12 col-lg-7 my-auto">
            <div class="header-content mx-auto">
              <h1 class="mb-5">Campeonato Altinão 2017/2018</h1>
              <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Ir para Tabela</a>
            </div>
          </div>
          <div class="col-lg-5 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="http://localhost/imagens/estadio.png" style="" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="download bg-primary text-center" id="download">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 mx-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="http://localhost/imagens/taca.png" style="" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 my-auto">
            <div class="section-heading text-center">
              <h2 class="azul-titulo">Tabela 2017/2018</h2>
              <hr>
            </div>
            <table class="table table-striped azul">
              <thead>
              <tr>
                <th>Time</th>
                <th>V</th>
                <th>GP</th>
                <th>GC</th>
                <th>S</th>
                <th>P</th>
              </tr>
              </thead>
              <tbody>

              @foreach($table as $times)
                {{--@php--}}
                {{--$date=date('Y-m-d', $team['date']);--}}
                {{--@endphp--}}
                <tr>
                  <td>{{$times->sigla}}</td>
                  <td>{{$times->vitorias}}</td>
                  <td>{{$times->gols_pro}}</td>
                  <td>{{$times->gols_con}}</td>
                  <td>{{$times->saldo}}</td>
                  <td>{{$times->pontos}}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <section class="features" id="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-3 col-12 mx-auto">
            <div class="section-heading text-center">
              <h2 class="branco-titulo">Artilharia</h2>
              <hr>
            </div>
            <table class="table table-striped branco">
              <thead>
              <tr>
                <th></th>
                <th></th>
                <th>Nome</th>
                <th>Gol(s)</th>
                <th></th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              {{--@php--}}
              {{--$date=date('Y-m-d', $team['date']);--}}
              {{--@endphp--}}
              @foreach($gols as $gol)
                <tr>
                  <td></td>
                  <td></td>
                  <td>{{$nome = \App\Player::find($gol->players_id)->nome}}</td>
                  <td>{{$gol->gols}}</td>
                  <td></td>
                  <td></td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <div style="margin-left: 5px" class="col-lg-6 col-12 mx-auto">
            <div class="section-heading text-center">
              <h2 class="branco-titulo">Jogos</h2>
              <hr>
            </div>
            <table class="table table-striped branco">
              <thead>
              <tr>
                <th>Data</th>
                <th class="ali_direita"></th>
                <th class="ali_direita"></th>
                <th class="ali_centro">Placar</th>
                <th class="ali_esquerda"></th>
                <th class="ali_esquerda"></th>
              </tr>
              </thead>
              <tbody>

              @foreach($games as $game)
                {{--@php--}}
                {{--$date=date('Y-m-d', $team['date']);--}}
                {{--@endphp--}}
                <tr>
                  <td>{{$game['data']}}</td>
                  <td class="ali_direita">{{$team = App\Team::find($game['teams_casa'])->sigla}}</td>
                  <td class="ali_direita">{{$game['placar_casa']}}</td>
                  <td class="ali_centro">x</td>
                  <td class="ali_esquerda">{{$game['placar_visitante']}}</td>
                  <td class="ali_esquerda">{{$team = App\Team::find($game['teams_visitante'])->sigla}}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
      </div>
        </div>
      </div>
    </section>

    <section class="cta" id="contact">
      <div class="cta-content">
        <div class="container">
          <div class="section-heading text-center">
            <h2 class="branco-titulo">Escalações</h2>
            <hr>
          </div>
          <div class="row">
            @foreach($teams as $team)
            <div class="col-lg-4 col-4">
              <div class="thumbnail">
                <img class="imagem" src="http://{{$team->logo}}" alt="...">
                <div class="caption">
                  <h3 class="text-center"><b>{{$team->nome}}</b></h3>
                  <hr>
                  @foreach($players as $player)
                    @if($player->teams_id == $team->id)
                  <p>{{$player->nome}}</p>
                    @endif
                  @endforeach
                </div>
              </div>
            </div>
              @endforeach
          </div>
        </div>
      </div>


    </section>

    <section class="contact bg-primary" id="cta">
      <div class="container">
        <div class="section-heading text-center">
          <h2 class="branco-titulo">Galeria</h2>
          <hr>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="http://localhost/imagens/barsemlona.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <div class="imagem2"></div>
              <img class="d-block w-100" src="http://localhost/imagens/pecomchule.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <div class="imagem3"></div>
              <img class="d-block w-100" src="http://localhost/imagens/laranjada.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <p>Developed by SnakeWar</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#"></a>
          </li>
          <li class="list-inline-item">
            <a href="#"></a>
          </li>
          <li class="list-inline-item">
            <a href="#"></a>
          </li>
        </ul>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('js/new-age.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>

  </body>

</html>
