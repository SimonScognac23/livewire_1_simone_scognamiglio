<!-- FORM 
   Assegniamo al form un comportamento di submit tramite wire:submit.
   Al posto della classica action che richiama una rotta, utilizziamo wire:submit,
   che collega il form a una funzione (in questo caso store) nel componente Livewire.

   La direttiva wire:model viene utilizzata per associare un tag input a un attributo pubblico
   del componente Livewire. Quando l’utente inserisce un valore nell’input, Livewire lo sincronizza 
   con l’attributo specificato nel file CreateArticle.php.
-->

<div class="row nba-form-section mt-5">
    <div class="col-12 col-md-8 col-lg-6 mx-auto p-4 shadow rounded bg-light">

        <!-- Messaggio di conferma se presente nella session -->
        @if (session('message'))
            <div class="alert alert-success text-center fw-bold">
                {{ session('message') }}
            </div>
        @endif

        <form class="nba-form" wire:submit="store">
            <!-- wire:submit fa scattare la funzione store al submit del form -->
            <!-- Con wire:model colleghiamo gli input agli attributi Livewire -->
            
            <!-- CAMPO TITOLO
             model.live sconsigliato in quanto è una chiamata gestita da internet ed è pesantissima -->
            <div class="mb-3">
                <label for="title" class="form-label fw-bold text-primary">Titolo Articolo</label>
                <input 
                    wire:model.blur="title"
                    name="name" 
                    value="{{ old('title') }}"
                    type="text" 
                    class="form-control border-primary"
                    id="title"
                    placeholder="Inserisci il titolo dell'articolo"
                >     
                  <div>@error('title') {{ $message }} @enderror</div>
                
            </div>

            <!-- CAMPO SOTTOTITOLO -->
            <div class="mb-3">
                <label for="subtitle" class="form-label fw-bold text-primary">Sottotitolo Articolo</label>
                <input 
                    wire:model.blur="subtitle"
                    name="subtitle" 
                    value="{{ old('subtitle') }}"
                    type="text" 
                    class="form-control border-primary" 
                    id="subtitle"
                    placeholder="Inserisci il sottotitolo"
                >  
                 <div>@error('subtitle') {{ $message }} @enderror</div>          
            </div>

            <!-- CAMPO DESCRIZIONE -->
            <div class="mb-3">
                <label for="body" class="form-label fw-bold text-primary">Descrizione</label>
                <textarea 
                    wire:model.blur="body"
                    name="body" 
                    class="form-control border-primary" 
                    id="body"
                    rows="4"
                    placeholder="Scrivi qui il contenuto dell'articolo"
                >{{ old('body') }}</textarea> 
                 <div>@error('body') {{ $message }} @enderror</div>            
            </div>


               <!-- CAMPO IMMAGINE -->
                <div class="mb-3">
                    <label for="img" class="form-label fw-bold text-primary">Inserisci immagine</label>
                    <input 
                        wire:model="img"
                        name="img" 
                        type="file" 
                        class="form-control" 
                        id="img"
                        placeholder="Scrivi qui la foto"
                    >  
                                           
                </div>
                

            <!-- BOTTONE INVIO -->
            <button type="submit" class="btn btn-dark text-white w-100 fw-bold">
                Invia dati
            </button>
        </form>
    </div>
</div> 


  <!-- div sotto i campi input che controllano se ci sono errori, ovviamente devo valorizzarli con la direttiva error , un po simile alla validation error di laravel -->   
