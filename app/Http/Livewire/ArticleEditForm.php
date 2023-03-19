<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;


class ArticleEditForm extends Component
{

    use WithFileUploads;


    public $title;
    public $body;
    public $cover;

    public $article; //PER IL MATCH CON edit-blade

    // ACTIONS
    public function update(){
        $this->article->update([
            'title' => $this->title,
            'body' => $this->body,
            'cover' => $this->cover,
        ]);
        
        return redirect(route('article.index'))->with('articleUpdated', 'Hai aggiornatto correttamente l\'Articolo!');

    }




    // QUESTI SONO I VALUE NELL'INPUT ('old')
    public function mount(){
        $this->title = $this->article->title;
        $this->body = $this->article->body;
        $this->cover = Storage::url($this->article->cover);

    }


    public function render()
    {
        return view('livewire.article-edit-form', ['article' => $this->article]);
    }
}
