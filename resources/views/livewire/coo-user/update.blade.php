<div>
    <form wire:submit.prevent="update">
        <div class="text-center card">
            <div class="card-header">
                Update User
            </div>
            <div class="card-body">
                 @include('livewire.coo-user.vista')
            </div>
            <div class="card-footer text-muted">
                <button wire:click="update" class="btn btn-sucess"><i class="fa fa-iedit"></i> Update</button>
                <a href="{{route('coo-user.view')}}" class="btn btn-primary btn-sm">Cancel</a>  
            </div>
        </div>

    </form>      
</div>
