<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleList extends Component
{

    public function destroy(Article $article){
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
