<div>
    <div class="card mx-auto" style="width: 18rem;">    
        <img style="width:150px; height:150px;" class="mx-auto card-img-top mt-3"
        src="{{ Storage::disk('public')->url($co->photo != null ? $co->photo : 'images\cookie\default-cookie.png') }}" 
        alt="">
        <div class="card-body">
            <h5 class="card-title">{{$co->cookie_name}}</h5>
            <p class="card-text">{{$co->description}}</p>
            <button wire:click="delete" class="btn btn-primary">Comfirmar</button>
            
            <a href="{{route('cookie.view')}}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>
    </div>
</div>
