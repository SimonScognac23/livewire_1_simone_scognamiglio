<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;



class CreateArticle extends Component
{

    use WithFileUploads;


#[Validate('required', message: 'Il titolo è obbligatorio.')]  // queste validate funzionano che: finche non superano lo step numero 1 ossia title, le Validate non vanno alla numero 2 ossia subtitle
#[Validate('min:5', message: 'Titolo troppo corto')]  // validate accetta questi parametri dove il primo parametro è la regoladi validazione e il secondo è il messaggio con il valore del messaggio tramite la stringa


     // #[Validate('required|min:3')]  // annotation e sono un modo di attribuire ai attributi pubblici delle regole di validazione, prese da livewire sostituiscono le validate() che andavano a essere inserite nella request
    public $title;  //definiamo i 3 campi del form in modo che istruiamo livewire quale operazione logica deve compiere dentro al form, in questo caso è quella di salvare i dati 


#[Validate('required', message: 'Il titolo è obbligatorio2.')] 
#[Validate('min:5', message: 'Titolo troppo corto2')]
  //   #[Validate('required|min:3')]  // attribuisco delle regole di validazione
     public $subtitle;


#[Validate('required', message: 'Il titolo è obbligatorio3.')] 
#[Validate('min:5', message: 'Titolo troppo corto3')] 
    public $body;
    // questi tre valori sono immediatamente disponibili nel create-article.blade
    // Li posso passare alla create-article.blade tramite il wire:model


     public $img;


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


public function store()
{
    // Validazione dei dati
    $this->validate();

    // Controllo se l'utente ha caricato un'immagine
    if ($this->img) {
        // Salva l'immagine in storage/app/public/img e ottieni il percorso relativo
        $imagePath = $this->img->store('image','public'); // es: img/nomefile.jpg
    } else {
        // Usa il percorso dell'immagine di default salvata in public/imgArticles/default.jpg
        $imagePath = 'imgArticles/default.jpg';
    }

    // Creazione dell'articolo (con o senza immagine personalizzata)
    Article::create([
        'title' => $this->title,
        'subtitle' => $this->subtitle,
        'body' => $this->body,
        'img' => $imagePath, // es: img/nomefile.jpg oppure imgArticles/default.jpg
    ]);

    // Reset del form
    $this->clearForm();

    // Messaggio di successo
    session()->flash('message', 'Post inserito con successo!');
}



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    protected function clearForm(){  //incapsulo la mia logica dentro un altro metodo 
        //ora la funzione clearform non è accessibile all esterno IMPORTANTE!!!

           $this->title = ""; // per far ritornare la stringa vuota
       $this->subtitle = "";
        $this->body = "";

    }
    
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function render()
    {
        return view('livewire.create-article');
    }
}



/*
<!--
  CUSTOMIZING MESSAGE
  #[Validate([  Questo è un attributo PHP (annotation) usato in Livewire per dichiarare regole di validazione direttamente sopra una proprietà pubblica
    'titles' => 'required',  'titles' è la proprietà pubblica da validare, deve essere presente (non nulla)
    'titles.*' => 'required|min:5',  Qui validiamo ogni singolo elemento dell'array 'titles': ogni elemento è obbligatorio e deve avere almeno 5 caratteri
], message: [  Qui definiamo messaggi di errore personalizzati per le regole
    'required' => 'The :attribute is missing.',  Messaggio generico per regola required
    'titles.required' => 'The :attribute are missing.',  Messaggio specifico per quando manca 'titles'
    'min' => 'The :attribute is too short.',  Messaggio per quando la lunghezza minima non è rispettata
], attribute: [  Qui associamo un nome più "friendly" all'attributo per i messaggi di errore
    'titles.*' => 'title',  Ogni elemento dell'array 'titles' sarà chiamato 'title' nei messaggi di errore
])
public $titles = [];   Dichiariamo la proprietà pubblica come un array vuoto, utile per gestire input multipli dinamici
-->


<!-- - Questa sintassi con l'attributo `#[Validate]` è introdotta in Livewire per dichiarare in modo pulito e dichiarativo le regole di validazione **direttamente sopra le proprietà** pubbliche del componente. - È particolarmente **utile quando si lavora con proprietà array** (come input dinamici multipli) perché consente di applicare regole sia all'intero array (`titles`) sia ai singoli elementi (`titles.*`). - Usare questa sintassi rende il codice più leggibile, spostando la definizione delle regole vicino ai dati che devono essere validati, rispetto a scriverle in un metodo `rules()`. - Inoltre permette di definire messaggi personalizzati e nomi di attributi friendly sempre nello stesso posto. - È preferibile usarla quando hai una struttura dati complessa, come array o dati annidati, e vuoi mantenere ordine e chiarezza nel codice del componente Livewire. -->  */