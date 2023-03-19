<div>

    @if (session('articleCreated'))
        <div class="alert alert-success">
            {{ session('articleCreated') }}
        </div>
    @endif

    <form class="shadow p-5 rounded" enctype="multipart/form-data" wire:submit.prevent='store'>
        {{-- wire:submit.prevent dice al button di 'prevenire' la sua funzione di submit e invece di far scattare la funzione store --}}
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo dell'Articolo:</label>
            <input type="text" class="form-control" id="title" wire:model.lazy="title">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Corpo dell'Articolo:</label>
            <textarea  class="form-control" id="body" cols="30" rows="10" wire:model.lazy="body">></textarea>

        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Copertina dell'Articolo:</label>
            <input type="file" class="form-control" id="cover" wire:model="cover">
            
        </div>

        <button type="submit" class="btn btn-primary">Inserisci l'Articolo</button>
    </form>


</div>