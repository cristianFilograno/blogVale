<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class ArticleList extends Component
{

    public function destroy(Article $article){

        
        // CONTROLLA SE ELIMINA VERAMENTE

        // Elimina la cover del articolo dal disco  SOLO SE C'è(ternario)
        if($article->cover){
            Storage::delete($article->cover);
        } 
        // $article->cover ? Storage::delete($article->cover) : null;

        $article->delete();

        session()->flash('articleDeleted', 'Hai eliminato il tuo articolo');
    }

    public function render()
    {
        // QUERY AL DB?
        $articles = Article::all();

        return view('livewire.article-list', compact('articles'));
    }
}
