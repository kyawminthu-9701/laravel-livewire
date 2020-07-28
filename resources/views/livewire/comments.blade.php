<div class="row justify-content-md-center mt-5">
   <div class="col-md-8">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Enter Comments" aria-label="Enter Comments" aria-describedby="button-addon2" wire:model.debounce.1000ms="newComment">
            <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2" wire:click="addComment">Send</button>
        </div>
        @foreach ($comments as $comment)
            <div class="card w-100 mt-1">
                <div class="card-body">
                    <h5 class="card-title">{{$comment['creator']}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$comment['created_at']}}</h6>
                    <p class="card-text">{{$comment['body']}}</p>
                </div>
            </div>
        @endforeach
    </div>
   </div>
</div>

