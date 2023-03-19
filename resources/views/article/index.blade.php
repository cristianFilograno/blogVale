<x-layout>

    <x-header>
        Dashboard degli Articoli
    </x-header>

        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    
                    <a class="text-center m-5 nav-link" href="{{route('article.create')}}"><button class="btn btn-primary">INSERISCI NUOVO ARTICOLO</button></a>


                        @if(session('articleUpdated'))
                            <div class="alert alert-success">
                                {{session('articleUpdated')}}
                            </div>
                        @endif


                        @livewire('article-list')
                
                </div>
            </div>
        </div>
</x-layout>