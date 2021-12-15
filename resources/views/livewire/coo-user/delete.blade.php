<div>
    <div class="card" style="width: 18rem;">
        <img style="width:150px; height:150px;" class="mx-auto card-img-top mt-3"
        src="{{ Storage::disk('public')->url($us->photo != null ? $us->photo : 'images\cookie\default-cookie.png') }}" 
        alt="">
        <div class="card-body">
            <h5 class="card-title">{{$us->username}}</h5>
            <p class="card-text">{{$us->email}}</p>
            <button wire:click="delete" class="btn btn-primary">Confirm</button>
            
            <a href="{{route('coo-user.view')}}" class="btn btn-secondary btn-sm">Cancel</a>
        </div>
    </div>
</div>
