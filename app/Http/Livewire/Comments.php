<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use Carbon\Carbon;
use App\Comment;

class Comments extends Component
{
    use WithPagination;
    // public $comments ;
    public $newComment;
    public function mount()
    {
        // $initialComments = Comment::latest()->get();
        // $this->comments = $initialComments;
    }

    public function updated($field)
    {
        $this->validateOnly($field, ['newComment'=>'required|max:255']);
    }

    public function addComment()
    {
        $this->validate(['newComment'=>'required|max:255']);
        $createdComment = Comment::create(['body'=>$this->newComment,'user_id'=>1]);
        $this->newComment = "";
        session()->flash('message', 'Comment successfully added.');
    }
    
    public function remove($commentId)
    {
        $comment = Comment::find($commentId);
        $comment->delete();
        session()->flash('message', 'Comment successfully deleted.');
    }

    public function paginationView()
    {
        return 'pagination-links';
    }
    public function render()
    {
        return view('livewire.comments',['comments'=>Comment::latest()->paginate(3)]);
    }
}
