<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">{{env('APP_NAME')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('homepage')}}">Homepage<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('articoli')}}">Articoli</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('dettagli')}}">Dettagli</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
    <div class="row">
        @foreach($articles as $article)
    <div class="col-3">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$article['title']}}</h5>
    <p class="card-text">{{$article['body']}}</p>
    <a href="{{route('articolo',['id'=>$article['id']])}}" class="btn btn-primary">Leggi qui</a>
  </div>
</div>
</div>
@endforeach
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>