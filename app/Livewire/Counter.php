<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $myNum = 10;  // definisco un attributo pubblico al interno del mio counter e questo parametro potrebbe essere usato come valore d'ingresso a incrementByNum
    public $count = 1;

  
      public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }

    public function incrementByNum($num){
        //essendo dei metodi possono accettare dei parametri in ingresso
        $this->count+=$num;  // è come se stessimo a scrivere $this->count + $num
    }

    public function decrementByNum($num){
    // essendo dei metodi possono accettare dei parametri in ingresso
    $this->count -= $num;  // è come se stessimo a scrivere $this->count - $num
    }

      public function render()
    {
        return view('livewire.counter');  // quello che noi facciamo nei controller ossia ritornare una vista, il componente livewire lato back-end ossia la classe (Counter.php) lo fa per conto proprio
        // quindi è compito di Livewire di mostrarsi all'utente
    }

}
