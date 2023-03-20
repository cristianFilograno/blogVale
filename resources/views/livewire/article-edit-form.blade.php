<div>
    <div>

        @if (session('articleUpdated'))
            <div class="alert alert-success">
                {{ session('articleUpdated') }}
            </div>
        @endif
    
    
        <form class="shadow p-5 rounded" enctype="multipart/form-data" wire:submit.prevent='update'>
            {{-- wire:submit.prevent dice al button di 'prevenire' la sua funzione di submit e invece di far scattare la funzione store --}}
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo dell'Articolo:</label> 
                <input type="text" class="form-control" id="title" wire:model.lazy='title'>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Corpo dell'Articolo:</label>
                <textarea  class="form-control" id="body" cols="30" rows="10" wire:model.lazy='body'></textarea>
    
            </div>
            <div class="mb-3">
                <label for="old_cover" class="form-label">Immagine attuale:</label>
                <img width="300px" src="{{ $old_cover }}">
            </div>
            @if ($cover)
            <div class="mb-3 text-center">
                Anteprima Immagine
                <img width="200px" src="{{ $cover->temporaryUrl() }}">
            </div>
             @endif
            <div class="mb-3">
                <label for="cover" class="form-label">Copertina dell'Articolo:</label>
                <input type="file" class="form-control" id="cover" wire:model='cover'>
                {{-- TIPO SUBMIT ERA GIà STATO USATO IN QUESTO FORM --}}
                <button type="button" class="btn small text-danger p-0">Annulla</button>
            </div>
    
            <button type="submit" class="btn btn-primary" wire:click='resetImage'>Aggiorna l'Articolo</button>
        </form>
    
    
    </div>
</div>
