<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class EditArticle extends Component
{
    #[Validate('required', message: 'Il titolo è obbligatorio.')]  
    // Queste validate funzionano così: finché non superano lo step numero 1 (ossia title), le validate non vanno alla numero 2 (ossia subtitle)
    #[Validate('min:5', message: 'Titolo troppo corto')]  
    // Validate accetta questi parametri dove il primo parametro è la regola di validazione e il secondo è il messaggio con il valore del messaggio tramite la stringa

    // #[Validate('required|min:3')]  // Annotation è un modo di attribuire ai attributi pubblici delle regole di validazione, prese da Livewire, che sostituiscono le validate() che andavano a essere inserite nella request
    public $title;  // Definiamo i 3 campi del form in modo che istruiamo Livewire quale operazione logica deve compiere dentro al form, in questo caso è quella di salvare i dati 

    #[Validate('required', message: 'Il titolo è obbligatorio2.')] 
    #[Validate('min:5', message: 'Titolo troppo corto2')]
    // #[Validate('required|min:3')]  // Attribuisco delle regole di validazione
    public $subtitle;

    #[Validate('required', message: 'Il titolo è obbligatorio3.')] 
    #[Validate('min:5', message: 'Titolo troppo corto3')] 
    public $body;

    public $img;

    public $article;  // Qui dentro ho l'articolo che mi sono portato appresso

    public function mount()
    {
        // $this->title = $this->article->title; NON SI FA !!
        // I componenti Livewire hanno una loro action che funge da costruttore del componente, che si chiama mount. Il costruttore nelle classi valorizzava gli attributi dei nostri oggetti e la mount fa la stessa identica cosa! Quello che in PHP classico è il costruttore, in Livewire viene sostituito dal metodo mount
        // Quindi prende i nomi di pubblici title, subtitle e body, e li valorizza all'interno della funzione mount.
        $this->title =  $this->article->title;
        $this->subtitle =  $this->article->subtitle;
        $this->body =  $this->article->body;

        // La mount si usa quando devo valorizzare degli attributi nella visualizzazione del componente
        // Quindi il valore di base è sostituito dal valore di questi attributi
    }

    public function updateArticle()   // Sovrascritta da save, presa da Livewire
    {
        $this->validate();
        // $post = Post::create([
        //     'title' => $this->title
        // ]);

        // Article::create([    // Ci richiamiamo il modello Article che andrà a scrivere nel DB
        //     'title' => $this->title, // Qui ci metterò il valore che l'utente ha inserito in $this->title
        //     'subtitle' => $this->subtitle,
        //     'body' => $this->body,
        // ]);  // Quindi l'utente inserisce i dati nel form, Livewire li valorizza nei suoi attributi pubblici attraverso il Livewire model tramite l'action

        $this->article->update([
            'title' => $this->title, // Qui ci metterò il valore che l'utente ha inserito in $this->title
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            'img' => $this->img,
        ]);    // Questo è l'articolo che ci ha passato inizialmente 

        session()->flash('message', 'Post modificato');
    }

    // Questi tre valori sono immediatamente disponibili nel create-article.blade
    // Li posso passare alla create-article.blade tramite il wire:model

    public function render()
    {
        return view('livewire.edit-article');
    }
}
