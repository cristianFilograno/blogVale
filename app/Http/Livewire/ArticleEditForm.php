<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;


class ArticleEditForm extends Component
{

    use WithFileUploads;

    public $title, $body, $cover, $old_cover;
    public $article; //PER IL MATCH CON edit-blade

    //AGGIORNIAMO LIBRERIA
    public function update(){
        $this->article->update([
            'title' => $this->title,
            'body' => $this->body,
            // 'cover' => $this->cover->store('public/covers'),
            // 'cover' => $this->cover ? $this->cover->store('public/covers') : null,

        ]);
        // SE L'UTENTE HA CAMBIATO IMMAGINE
        if($this->cover){
            $this->article->update([
                'cover' => $this->cover->store('public/covers')
            ]);
            // METODO DELLA FACADE STORAGE
            Storage::delete('public/covers/' . basename($this->old_cover));

            // SOLO SE NON FACCIO IL REDIRECT, CAMBIO L'IMMAGINE ATTUALE
            $this->old_cover = $this->cover->temporaryUrl();
            $this->resetImage();
            
        }
        // CON QUESTA VISUALIZZAZIONE VEDREMO AGGIORNARSI LA COVER ATTUALE
        session()->flash('articleUpdated', 'Hai aggiornatto correttamente l\'Articolo!');
        // return redirect(route('article.index'))->with('articleUpdated', 'Hai aggiornatto correttamente l\'Articolo!');
    }

    public function resetImage(){
        $this->reset('cover');
    }

    // QUESTI SONO I VALUE NELL'INPUT ('old')
    public function mount(){
        $this->title = $this->article->title;
        $this->body = $this->article->body;
        $this->old_cover = Storage::url($this->article->cover);
    }


    public function render()
    {
        return view('livewire.article-edit-form', ['article' => $this->article]);
    }
}
