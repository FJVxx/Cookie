<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CookieRep</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireStyles


    
</head>
<style type="text/css">
   body { 
    
    background: url("{{Storage::disk('public')->url('images/others/wallpaper.jpg')}}") no-repeat center;
    background-size: cover;

    background-color: #B69754 !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */

</style>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto" style="background-color: #4A3C1F !important;" >
  <a class="navbar-brand" href="#">
    <img src="{{Storage::disk('public')->url('images/others/default-icon.png')}}" width="30" height="30" >
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">

      <li class="nav-item active">
        <a class="nav-link" href="{{route('coo-user.index')}}">CookieRep<span class="sr-only">(current)</span></a>
      </li>
      
      @if(Auth::check())
      <li class="nav-item active">
        <a class="nav-link" href="{{route('cookie.view')}}">Cookie List<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('cookie.create')}}">Make your own recipe<span class="sr-only">(current)</span></a>
      </li>
      
        <div class="navbar-brand" style="margin-left: 800px;">
          <img style="border-radius: 170px; width:30px; height: 30px;" src="{{Storage::disk('public')->url(Auth::user()->photo ? Auth::user()->photo: 'images/users/default-user.png')}}" alt="">
        </div>
          <li>
            <a class="nav-link" href="{{route('coo-user.view')}}">{{Auth::user()->username}}<span class="sr-only">(current)</span></a>
          </li>

        @livewire('login.logout')
      @else

        <div style="margin-left: 1300px;">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('login')}}">Login<span class="sr-only">(current)</span></a>
          </li>
        </div>

      @endif
    </ul>
  </div>
</nav>
<div class="container mt-5">
        {{$slot}}
</div>

   @livewireScripts
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>livewire.on('alert', message => {
        Swal.fire({
          icon: 'error',
          title: 'Ups! Something is wrong',
          text: message,
          footer: '<a href="">Why do I have this issue?</a>'
        }) 
    }); 
    </script>
</body>
</html>