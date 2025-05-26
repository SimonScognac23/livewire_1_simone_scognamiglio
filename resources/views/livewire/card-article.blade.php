<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-lg border-0">
        
  <img 
  src="{{ 
   
      Str::startsWith($article->img, 'image/') 
        ? Storage::url($article->img)        
        : asset($article->img)              
  }}" 
  class="img-fluid rounded-start h-100 object-fit-cover" 
  alt="{{ $article->title }}"
>
        <div class="card-body">
          <h5 class="card-title text-center text-primary">{{ $article->title }}</h5>
          <h6 class="card-subtitle mb-3 text-muted text-center">{{ $article->subtitle }}</h6>
          <p class="card-text">{{ $article->body }}</p>
          <div class="text-center">
            <a href="{{ route('articles.index') }}" class="btn btn-outline-primary">Torna indietro</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Se l'utente ha caricato un'immagine e questa è memorizzata in public/storage/img/nomefile.jpg, la sintassi corretta per ottenere il link dell'immagine sarà: -->
