<div>
    <div class="row">
        <div class="mx-auto col-md-4">   
            <img class="mx-auto d-block" style="width: 170px;height: 170px;" 
            src="{{Storage::disk('public')->url('images\users\default-user.png')}}" 
            alt="">
            <form wire:submit.prevent="login">
                <div class="mb-3">
                    <label class="form-label">Email Adress</label>
                    <input wire:model="email" type="email" class="form-control" placeholder="1234@example.com">
                    @error('email')<b class="text-danger">{{$message}}</b> @enderror
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input wire:model="password" placeholder="**********" type="password" class="form-control">
                    @error('password')<b class="text-danger">{{$message}}</b> @enderror
                </div>


                <div class="row">
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-4">
                        <a href="{{route('coo-user.create')}}" class="btn btn-success d-block"><i class="fa fa-save"></i>Create</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
