<div>
    <form wire:submit.prevent="updateRecipe">
        <div class="text-center card">
            <div class="card-header">
                Update Recipe
            </div>
            <div class="card-body">
                 @include('livewire.cookie.vistaRecipe')
            </div>
            <div class="card-footer text-muted">
                <button wire:click="updateRecipe" class="btn btn-sucess"><i class="fa fa-iedit"></i> Update</button>
                <a href="{{route('cookie.view')}}" class="btn btn-primary btn-sm">Cancel</a>  
            </div>
        </div>
    </form>  
</div>
