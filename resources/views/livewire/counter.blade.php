<div>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-auto">
      <div class="bg-white border rounded-3 shadow px-5 py-3 text-center">
        <h2 class="display-3 text-dark fw-semibold mb-0">33</h2>
      </div>
    </div>
  </div>
</div>


    <div class="text-center my-3">
        <div class="display-4">{{ $count }}</div>  
        <!-- il collegamento che si crea tra compon. front-end e comp. back-end è stretto. cioè tutto quello che noi andiamo a definire come attributo pubblico è possibile richiamarlo nel componente front-end in questo caso $count -->
        <!-- noi abbiamo dichiarato un attributo pubblico all'interno del componente livewire e questo sarà disponibile qui nel frontend che è $count -->
    </div>

    <div class="text-center my-4">
        <div class="btn-group" role="group" aria-label="Basic example">
            <button wire:click="increment" class="btn btn-france-blue btn-lg">+</button>
            <button wire:click="decrement" class="btn btn-france-red btn-lg">-</button>
        </div>
    </div>

    <!-- al click del bottone fai scattare la funzione incrementa/decrementa il mostrarsi di questo cambiamento avviene se e solo lanciamo la funzione render() che mostra il nuovo stato del componente. quindi le funzioni non solo permettono di modificare lo stato di un componente , ma ne fanno scattare anche il render, 
    sono delle richieste di tipo post ma sono sempre chiamate asincrone attraverso js, quindi quello che sta facendo livewire è convertire il codice php in codice js asincrono, quindi ecco perche quando facciamo la richiesta non scatta subito il 2, se noi lo facessimo in js puro il processo è piu rapido, perche 
    sarebbe tutto a carico del browser, invece il carico è comunque sul server -->
    
    <!--- ACTION PARAMETRICA -->
    <div class="text-center mt-4">
        <button wire:click="incrementByNum({{ $myNum }})" class="btn btn-france-white btn-lg mx-2">+10</button>
        <!-- il wireclick permette di passare attraverso le () e quindi possiamo passare dei parametri al suo interno
        quindi cliccando lui aumentera di 5 perche il parametro in ingresso sarà valorizzato con il numero che gli abbiamo passato al suo interno e quindi aumentera di volta in volta di 5, quindi abbiamo reso un action parametrica -->
    </div>

      <!--- ACTION PARAMETRICA -->
    <div class="text-center mt-4">
        <button wire:click="decrementByNum({{ $myNum }})" class="btn btn-france-white btn-lg mx-2">-10</button>
     
    </div>
</div>
