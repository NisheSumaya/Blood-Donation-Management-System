 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container-fluid d-flex align-items-center">

      <div class="logo mr-auto">

        <h1 class="text-light">
        <a href="{{route('welcome.home')}}"><img  src="{{asset('logo.png')}}" alt="" class="img-fluid"></a>
        <a style="color:orange;" href="" ><span> Blood Donation Sytem</span></a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->

      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li class="{{ Route::currentRouteName() ==  'home' ? 'active' : '' }}"><a href="{{route('welcome.home')}}">Home</a></li>
          <li class="{{ Route::currentRouteName() ==  'about.us' ? 'active' : '' }}"><a href="{{route('about.us')}}">About</a></li>
          
          <li><a href="{{route('gallery')}}">Gallery</a></li>
          
          <li><a href="{{route('all.event')}}">Events</a></li>
          
          <li class="drop-down"><a href="">Doners</a>
            <ul>
            @foreach($cate as $data)
            
            <li><a href="{{route('category.donors',$data->id)}}">{{$data->name}}</a></li>

            @endforeach
            </ul>
          </li>
        
          <li><a href="{{route('all.notice')}}">Notice</a></li>
          
          <li><a href="{{route('contact.info')}}">Contact</a></li>

          <li class="book-a-table text-center">@auth<a href="{{route('create.post.from')}}">Create Post</a>@endauth</li>
          <li class="book-a-table text-center">@auth<a href="{{route('all.post')}}">View Post</a>@endauth</li>
          </ul>
         
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
