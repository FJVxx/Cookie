<div>
    <div class="card mx-auto" style="width: 18rem;">    
        <img style="width:150px; height:150px;" class="mx-auto card-img-top mt-3"
        src="{{ Storage::disk('public')->url($co->photo != null ? $co->photo : 'images\cookie\default-cookie.png') }}" 
        alt="">
        <div class="card-body text-center">
            <h5 class="card-title">{{$co->cookie_name}}</h5>
            <span class="card-text">{{$co->description}}</span>

            
            <a href="{{route('cookie.view')}}" class="btn btn-primary d-block"><i class="fa fa-home"></i>Regresar</a>
        </div>
    </div>
</div>
