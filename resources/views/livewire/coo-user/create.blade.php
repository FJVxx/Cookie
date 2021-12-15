<div>
    <form wire:submit.prevent="create">
        <div class="text-center card">
            <div class="card-header">
                Create User
            </div>
            <div class="card-body">
                 @include('livewire.coo-user.vista')
            </div>
            <div class="card-footer text-muted">
                <button wire:loading.attr="disabled" wire:target="photo" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Create</button>
                <a href="{{route('cookie.view')}}" class="btn btn-primary btn-sm">Cancel</a>  
            </div>
        </div>

    </form>
</div>
