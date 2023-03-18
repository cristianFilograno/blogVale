<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;

class ArticleCreateForm extends Component
{
    // NECESSARIO PER L'UPLOAD DI FILE
    use WithFileUploads;

    // Handling Multiple Files  DALLA DOC SE SERVE



    // SEGNAMO LE PROPRIETA'
    public $title;
    public $body;
    public $cover;

    // ACTION
    public function store(){
        $article = Article::create([
            // INSERISCE NELLE VARIABILI A SX I VALORI IN TEMPO REALE DEL FORM
            'title' => $this->title,
            'body' => $this->body,
            'cover' => $this->cover,
            // $this->validate([
            //     'photo' => 'image|max:1024', // 1MB Max
            // ]);
        ]);

        session()->flash('articleCreated', 'Hai pubblicato l\'Articolo');
        $this->cleanForm();

    }
// DOPO L'INSERIMENTO DEI CAMPI
    public function cleanForm(){
        $this->title = "";
        $this->body = "";
        $this->cover = "";
    }

    public function render()
    {
        return view('livewire.article-create-form');
    }
}
