<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
<link href="{{asset('assets')}}/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('assets')}}/dashboard.css" rel="stylesheet">
  </head>
  <body>
  <div class="container">
  <div class="row">
  
  <div><h1 class="text_center">Donor List: {{$category->name}}</h1>
</div>



  
  
  </div>
  <div class="row">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">SL/NO</th>
            <th scope="col">Donor Name</th>
            <th scope="col">Contact</th>
        
        </tr>
        </thead>
        <tbody>

        @foreach ($donors as $key=>$donor)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$donor->username}}</td>
            <td>{{$donor->contact}}</td>
           
        </tr>
        @endforeach
        </tbody>



    </table>

    <button type="submit" onclick="window.print()" class="btn btn-success btn-lg btn-block">
                Report Generate   <span class="glyphicon glyphicon-chevron-right"></span>
            </button>
</div>
  
  
  </div>
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
      
      
      <script src="{{asset('assets')}}/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="{{asset('assets')}}/dashboard.js"></script>  
        </body>
</html>
