<div class="row ">

            <div wire:loading wire:target="photo" class="align-items-center">
                <strong>Loading...</strong>
                <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
            </div>

            <div class="col-4">
                @if($photo != null)
                    <img style="border-radius: 120px; width: 240px;height: 240px;" 
                    src="{{ $photo->temporaryUrl() }}" 
                    alt=""><br>
                @else
                    <img style="width: 240px;height: 240px;" 
                    src="{{ Storage::disk('public')->url($us->photo != null ? $us->photo : 'images\users\default-user.png  ') }}"
                    alt="">
                @endif


                <form>
                    <div class="form-group">

                        <input wire:model="photo" type="file" class="form-control-file" id="exampleFormControlFile1">
                        @error('photo') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="col-6 mx-auto margin-left: 100px;">  
                    <div class="form-group">
                        <label>Username</label>
                        <input wire:model="us.username" type="text" class="form-control">
                        @error('us.username') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                                    
                    <div class="form-group">
                        <label>Email</label>
                        <input wire:model="us.email" type="email" class="form-control">
                        @error('us.email') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                                    
                    <div class="form-group">
                        <label>Password</label>
                        <input autocomplete="new-password" wire:model="password" type="password" class="form-control">
                        @error('password') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Comfirm password</label>
                        <input wire:model="confirm" type="password" class="form-control">
                        @error('$confirm') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                                    
            </div>
</div>