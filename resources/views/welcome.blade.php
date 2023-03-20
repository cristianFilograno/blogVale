<x-layout>

    <x-header>
        BLOG DI VALENTINA
    </x-header>

    <ul>
        <li><h3>REGOLE DI VALIDAZIONE PER LE FOTO(FORMATI E DIMENSIONI) nel create</h3></li>
        <hr>
        <li><h3>GESTISCI AUTH CON PERMESSI(vedi middleware)</h3></li>
        <hr>
        <li><h3>aggiusta lo store nell'edit</h3></li>
        <hr>
        <li><h3>index con componente livewire?</h3></li>
        <hr>
    </ul>
        <div class="row container">
{{-- @foreach($articles as $article) --}}
@forelse($articles as $article)

    <div class="col-12 col-md-4 ">
        <div class="card p-0">
            @if(!$article->cover)
                <img src="https://picsum.photos/300" class="card-img-top" alt="...">
            @else 
                <img src="{{Storage::url($article->cover)}}" class="card-img-top" alt="{{$article->title}}">
            @endif
            
            <div class="card-body">
                <h5 class="card-title">{{$article->title}}</h5>
                <p class="card-text">{{$article->body}}</p>    
                
                <a href="{{--route('pagina_dettaglio', ['name' => $name])--}}" class="btn btn-primary">Guarda Meglio</a>
            </div>
        </div>
    </div>

@empty
    <div class="row">
        <div class="col-12 text-center">
            <h2>NON CI SONOO ARTICOLI</h2>    

        </div>
    </div>

@endforelse
</div>
        

        
    
</x-layout>