<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>Hello, world!</title>
  </head>
  <body class="d-flex vw-100 vh-100 align-items-center justify-content-center">
<div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Address</th>
          <th scope="col">State</th>
          <th scope="col">Status</th>

          
        </tr>
      </thead>
      <tbody>
        @foreach($customers as $customer )
        <tr>
         <td>{{$customer->name}}</td>
          <td>{{$customer->email}}</td>
          <td>{{$customer->address}}</td>
          <td>{{$customer->state}}</td>
          <td>
            @if($customer->status=='1')
              Active
              @else 
              Inactive
            @endif
            </td>
        </tr>   
        @endforeach

      </tbody>
    </table>
</div>
  </body>
</html>

