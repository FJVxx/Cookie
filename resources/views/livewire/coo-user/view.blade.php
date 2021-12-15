<div wire:init="charge">

    
    <div class="row">
        <!-- <div class="col-md-4">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..." aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-8">
            <div class="float-right mb-2"> 
                <a href="{{route('coo-user.create')}}" type="button" class="float-right mb-3 btn btn-success" class="fa fa-plus-circle">Crear usuario</a>
            </div>
        </div> -->
    @if (count($user) > 0)

        <table class="table text-center table-striped">
            <thead style="background-color: #B28A33;">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th>Photo</th>
                    <th scope="col">Email</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $us)
                    <tr>
                        <th scope="row">{{ $us->id }}</th>
                        <td>{{$us->username}}</td>
                        <th>
                            <img style="border-radius: 25px; width:70px; height:70px;" 
                            src="{{ Storage::disk('public')->url($us->photo != null ? $us->photo : 'images\users\default-user.png') }}" 
                            alt="">
                        </th>
                        <td>{{$us->email}}</td>

                        <td>
                            <a href="{{route('coo-user.show', $us)}}" title="Mostrar mas" class="btn-sm btn btn-info"><i class="fa fa-eye"></i></a>
                            <a href="{{route('coo-user.update', $us)}}" title="Editar Curso"
                            class="btn-sm btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="{{route('coo-user.delete', $us)}}" title="Eliminar user"
                            class="btn-sm btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        


    @else
        <img class="mx-auto d-block" style="width: 300px;weight: 300px;" src="{{Storage::disk('public')->url('images\others\charge.gif')}}" alt="">
    @endif

        {{ $charge == true ? $user->links() : null }}
</div>