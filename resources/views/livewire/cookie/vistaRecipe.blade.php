<div class="row">

    <div wire:loading wire:target="photo" class="align-items-center">
                <strong>Loading...</strong>
                <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
            </div>

            <div class="col-4">
                @if($photo != null)
                    <img style="width: 140px;height: 140px;" 
                    src="{{ $photo->temporaryUrl() }}" 
                    alt="">
                @else
                    <img style="width: 140px;height: 140px;" 
                    src="{{ Storage::disk('public')->url($co->photo != null ? $co->photo : 'images/cookie/default-cookie.png') }}"
                    alt="">
                @endif
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input wire:model="photo" type="file" class="form-control-file" id="exampleFormControlFile1">
                        @error('photo') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="col-6 mx-auto">  
                    <div class="form-group">
                        <label>Recipe's Name</label>
                        <input wire:model="co.cookie_name" type="text" class="form-control">
                        @error('co.cookie_name') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                                    
                    <div class="form-group">
                        <label>Description</label>
                        <textarea wire:model="co.description" class="form-control" placeholder="Write details about your recipe" rows="3"></textarea>
                        @error('co.description') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                                    
                    <div class="form-group">
                        <label>Ingredients</label>
                        <textarea wire:model="co.ingredients" class="form-control" placeholder="Mention some ingredients from your recipe" rows="6"></textarea>
                        @error('co.ingredients') <span class="text-danger">{{$message}}</span>@enderror
                    </div>    
                    
            </div>
</div>