<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="{{route('home.dashboard')}}">
              <span data-feather="home"></span>
              Admin Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('add.category')}}">
              <span data-feather="file-plus"></span>
              Add Blood Group
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('category.list')}}">
              <span data-feather="eye"></span>
              View Blood Group
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('add.from')}}">
              <span data-feather="plus-circle"></span>
              Add Donor
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('donor.list')}}">
              <span data-feather="eye"></span>
              Donor list
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('seekers.list')}}">
              <span data-feather="activity"></span>
             Blood Seeker list
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('add.event.from')}}">
              <span data-feather="plus-square"></span>
            Genarate Event
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('event.list')}}">
              <span data-feather="eye"></span>
           Event List
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('add.notice.form')}}">
              <span data-feather="plus-circle"></span>
            Genarate Notice
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('notice.list')}}">
              <span data-feather="eye"></span>
           Notice List
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('notification.list')}}">
              <span data-feather="plus-circle"></span>
           Post Notification
            </a>
          </li>
        </ul>
      </div>
    </nav>
