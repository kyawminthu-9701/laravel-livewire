<div class="row justify-content-md-center mt-5">
   <div class="col-md-8">
        <form wire:submit.prevent="addComment">
            @error('newComment') <span class="error text-danger">{{ $message }}</span> @enderror
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter Comments" aria-label="Enter Comments" aria-describedby="button-addon2" wire:model.debounce.500ms="newComment">
                <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Send</button>
            </div>
        </form>
        @foreach ($comments as $comment)
            <div class="card w-100 mt-1">
                <div class="card-body">
                    <h5 class="card-title">{{$comment->creator->name}} <span class="float-right text-danger btn" wire:click="remove({{$comment->id}})"><i class="fa fa-times-circle"></i></span></h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$comment->created_at->diffForHumans()}}</h6>
                    <p class="card-text">{{$comment->body}}</p>
                </div>
            </div>
        @endforeach
        <div class="mt-1">
            {{$comments->links('pagination-links')}}
        </div>
    </div>
   </div>
</div>

