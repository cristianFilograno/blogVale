<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\UploadedFile;

class ArticleCreateForm extends Component
{
    // NECESSARIO PER L'UPLOAD DI FILE
    use WithFileUploads;

    // Handling Multiple Files  DALLA DOC SE SERVE



    // SEGNAMO LE PROPRIETA'
    public $title;
    public $body;
    public $cover;

    // REGOLE DI VALIDAZIONE:(01:35:00 laravel-10)
    // protected $rules = [
    //     'title' => 'required|min:3'
    //     ecc..        
    // ];
    // public function Update

    // ACTIONS
    public function store(){


        $article = Article::create([
            // INSERISCE NELLE VARIABILI A SX I VALORI IN TEMPO REALE DEL FORM
            'title' => $this->title,
            'body' => $this->body,

            // Salvataggio dell'immagine sul disco
            'cover' => $this->cover ? $this->cover->store('public/covers') : null,
            
            // $this->validate([ REGOLE DI VALIDAZIONE A PIACERE
            //     'photo' => 'image|max:1024', // 1MB Max
            // ]);

// SEZIONE LOGO ATTUALE
        // // Creazione di un'istanza di UploadedFile per rappresentare l'immagine
        // $uploadedFile = new UploadedFile(storage_path('app/' . $path), $this->image->getClientOriginalName()),
        // // Salvataggio del percorso dell'immagine nel database o in una variabile di sessione
        //     session(['image_path' => $uploadedFile]),

        ]);



        session()->flash('articleCreated', 'Hai pubblicato l\'Articolo');
        $this->cleanForm();

    }
// DOPO L'INSERIMENTO DEI CAMPI 
    protected function cleanForm(){
        $this->title = "";
        $this->body = "";
        $this->cover = "";
    }

    public function render()
    {
        return view('livewire.article-create-form');
    }
}
