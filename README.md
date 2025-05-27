CARICAMENTO DELLE IMMAGINI NON FUNZIONA!!!!!!!!!!!!!!!!!!!!!!


Italiano
In questo progetto ho creato un componente Livewire chiamato CreateArticle per gestire la creazione di articoli nel mio sito. Ho definito alcune proprietà pubbliche come $title, $subtitle, $body e $img, che rappresentano i campi del form che l’utente deve compilare per inserire un nuovo articolo.

Per validare i dati del form, ho utilizzato le annotazioni #[Validate] direttamente sopra ogni proprietà, così da specificare in modo chiaro e ordinato le regole di validazione e i relativi messaggi di errore personalizzati.

Nel metodo store(), eseguo la validazione dei dati, poi controllo se l’utente ha caricato un’immagine. Se sì, salvo l’immagine nella cartella storage/app/public/image utilizzando il disco public, altrimenti assegno un’immagine di default già presente nel percorso imgArticles/default.jpg.

Dopo aver creato l’articolo con i dati raccolti, azzero i campi del form chiamando il metodo privato clearForm() per ripulire i valori e preparo un messaggio di conferma da mostrare all’utente.

Infine, ho definito il rendering del componente che restituisce la vista livewire.create-article, dove si trova il form per l’inserimento dei dati.

-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
English
In this project, I created a Livewire component called CreateArticle to handle the creation of articles on my website. I defined some public properties like $title, $subtitle, $body, and $img, which represent the form fields the user must fill out to add a new article.

For validating the form data, I used the #[Validate] annotations directly above each property, which allows me to clearly and neatly specify the validation rules and their related custom error messages.

In the store() method, I validate the data and then check if the user uploaded an image. If so, I save the image in the storage/app/public/image folder using the public disk; otherwise, I assign a default image already stored at imgArticles/default.jpg.

After creating the article with the collected data, I reset the form fields by calling the private clearForm() method to clear the values, and prepare a confirmation message to display to the user.

Finally, I defined the component’s render method to return the livewire.create-article view, where the form for data entry is located.



#   LIVEWIRE

Un framework per creare delle UI (user interface) reattive rimanendo nel linguaggio PHP

# Installazione

utilizziamo il composer require livewire/livewire

# Creazione di  un componente

php artisan make:livewire nome del componente (es counter)

# Tag per richiamare un componente

esempio  -'<livewire:counter/>'

