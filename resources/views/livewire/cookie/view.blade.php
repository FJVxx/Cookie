<div wire:init="load">

    
    <div class="row">
        <div class="col-md-4">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..." aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-8">
            <div class="float-right mb-2"> 
                    <a href="{{route('cookie.create')}}" type="button" class="float-right mb-3 btn btn-success"><i class="fa fa-plus-circle"></i> Create Recipe</a>
                </div>
            </div>
        </div>
    @if (count($cookie) > 0)

        <table class="table text-center table-striped">
            <thead style="background-color: #B28A33;">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Cookie Recipe</th>
                    <th>Photo</th>
                    <th scope="col">Description</th>
                    <th scope="col">Author</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cookie as $co)
                    <tr>
                        <th scope="row">{{ $co->id }}</th>
                        <td>{{$co->cookie_name}}</td>
                        <th>
                            <img style="border-radius: 25px; width:70px; height:70px;" 
                            src="{{ Storage::disk('public')->url($co->photo != null ? $co->photo : 'images\cookie\default-cookie.png') }}" 
                            alt="">
                        </th>
                        <td>{{$co->description}}</td>
                        <td>{{$co->autor_recipe}}</td>

                        <td>
                            <a href="{{route('cookie.show', $co)}}" title="Show more" class="btn-sm btn btn-info"><i class="fa fa-eye"></i></a>
                            <a href="{{route('cookie.update', $co)}}" title="Update a recipe"
                            class="btn-sm btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="{{route('cookie.delete', $co)}}" title="Delete a recipe"
                            class="btn-sm btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        


    @else
        <img class="mx-auto d-block" style="width: 300px;weight: 300px;" src="{{Storage::disk('public')->url('images\others\charge.gif')}}" alt="">
    @endif

        {{ $load == true ? $cookie->links() : null }}
</div>
