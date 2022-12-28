<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<h1 class="text-center">Registration</h1>
    <div class="container">
    <form action ="{{url('/')}}/customer"   method="post">
     @csrf
     <div class="form-group">
    <label for="">Name</label>    
    <input  class="form-control" type="text" name='name' value="{{old('name')}}">
       <div class="form-group">
    <label for="">Email</label>    
    <input  class="form-control" type="email" name='email' value="{{old('email')}}">
    <span class="text-danger">
    @error('email')
        {{$message}}
        @enderror
    </span>
</div>
<div class="form-group">
    <label for="">Password</label>    
    <input class="form-control" type="password" name='password'>
    <span class="text-danger">
    @error('password')
        {{$message}}
        @enderror
    </span>
    <div class="form-group">
    <label for="">Confirm-Password</label>    
    <input class="form-control" type="password" name='confirm'>
    <span class="text-danger">
    @error('confirm')
        {{$message}}
        @enderror
    </span>
    <button class="btn btn-primary">Submit</button>
</div>
    </form>
    </div>
  
</body>
</html>