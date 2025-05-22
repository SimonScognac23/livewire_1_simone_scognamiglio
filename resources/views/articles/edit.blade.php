<x-layout>
 
    <!-- Mostro il componente e, quando arriverò su questa vista, mi aspetto di vedere il form creato.
         Gli passo l'articolo che ho recuperato e lo associo nel file editarticle.php, associando il suo valore
         a un attributo che è il public $article -->
    <livewire:edit-article 
        :article="$article" 
    />
    
</x-layout>
