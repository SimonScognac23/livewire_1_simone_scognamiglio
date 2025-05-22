<div>
<div class="container mt-5">
  <div class="card shadow-lg" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title text-center text-primary">{{$article->title}}</h5>
      <h6 class="card-subtitle mb-3 text-muted text-center">{{$article->subtitle}}</h6>
      <p class="card-text">{{$article->body}}</p>
      <a href="{{ route('articles.index') }}" class="card-link btn btn-outline-primary">Torna indietro</a>
    </div>
  </div>
</div>
