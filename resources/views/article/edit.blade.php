<x-layout>

    <x-header>
        AGGIORNA ARTICOLO
    </x-header>


        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">

                    {{-- COMPONENTE LIVEWIRE A CUI DOBBIAMO PASSARE PARAMETRI --}}
                    @livewire('article-edit-form', ['article' => $article])
                </div>
            </div>
        </div>


</x-layout>

