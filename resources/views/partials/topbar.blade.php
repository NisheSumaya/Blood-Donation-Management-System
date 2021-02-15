<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
<div class="container text-right">
        <i class="icofont-phone"></i> +880 1717708093
        <i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 12:00 PM
        <i class="book-a-table text-center">@guest<a href="{{route('login.user.form')}}"><b>Login</b></a>@endguest</i>
        </div>

        @auth
        
      <div class="drop-down">
  <a class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="color: red;
    width: 30px;
    height: 30px;
    margin-right: 40px;">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
</svg>
</a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
     <a class="dropdown-item" href="{{route('profile.view',auth()->user()->id)}}">Profile</a>
     <a class="dropdown-item" href="{{route('my.post')}}">My Post</a> 
     <a class="dropdown-item" href="{{route('user.logout')}}">Logout</a> 
    
  </div>
</div>
@endauth
  
  </section>

     