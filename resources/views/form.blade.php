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
    <form action ="{{url('/')}}/register"   method="post">
     @csrf
       <x-Input type ="text"  name="name"  label="Enter your Name"/>
       <x-Input type ="email"   name="email" label="Enter Your E-mail"/>
       <x-Input type ="password"  name="password"  label="Enter Password"/>
       <x-Input type ="password"  name="confirm"label="Enter Confirm-Password"/>
       <button class="btn btn-primary">Submit</button>
       <!-- <div class="form-group">
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
</div> -->
    </form>
    </div>
</body>
</html>

    