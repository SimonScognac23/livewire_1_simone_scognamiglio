<div>
  <div class="container mt-5">
    <div class="card shadow border-primary">
      <div class="card-header bg-primary text-white fw-bold text-center">
        Lista Articoli
      </div>
      <div class="card-body p-0">
        <table class="table table-hover table-striped mb-0">
          <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Titolo Articolo</th>
              <th scope="col">Sottotitolo</th>
              <th scope="col">Gestisci</th>
            </tr>
          </thead>
          <tbody>
            @foreach($articles as $article)
              <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->subtitle}}</td>
                <td>
                  <a class="btn btn-info" href="{{ route('articles.show', $article->id) }}">Mostra</a>
                  <a class="btn btn-warning" href="{{ route('articles.edit', compact('article')) }}">Modifica</a>
                  <button wire:click="destroy({{$article}})" class="btn btn-danger">Elimina</button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
