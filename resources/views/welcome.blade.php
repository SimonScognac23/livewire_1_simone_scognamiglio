<x-layout>  

    <x-masthead title="Onore agli Ultramarines!"></x-masthead>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 d-flex justify-content-around">
            <!-- Qui dentro andrò a richiamare il componente Livewire, nome del componente che voglio reindirizzare -->
            <livewire:counter />
            <livewire:counter />
            <livewire:counter />
            <!-- Ogni componente di Livewire agisce in maniera unica, perché Livewire
                 quello che fa è dare degli ID univoci ai vari componenti, come se avessi id=1, id=2, ecc... -->
        </div>
    </div>
</div>

</x-layout>
