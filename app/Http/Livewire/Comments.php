<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class Comments extends Component
{
    public $comments = [
        [
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam magni delectus sint dolor officia blanditiis quasi facere odio id, eos alias dolorem facilis libero reprehenderit eligendi provident quibusdam ipsam accusantium.',
            'created_at' => '3 min ago',
            'creator' => 'Kyaw Min Thu'
        ]
    ];
    public $newComment;
    public function addComment()
    {
        array_unshift($this->comments,[
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'creator' => 'Kyaw Min Thu'
        ]);
    }
    public function render()
    {
        return view('livewire.comments',['comments'=>$this->comments]);
    }
}
