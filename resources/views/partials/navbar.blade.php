  <div class="header header-one">
      <a href="javascript:void(0);" id="toggle_btn">
          <i class="fas fa-bars"></i>
      </a>
      <a class="mobile_btn" id="mobile_btn">
          <i class="fas fa-bars"></i>
      </a>
      <ul class="nav nav-tabs user-menu">
          <li class="nav-item dropdown has-arrow main-drop">
              <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                  <span class="user-img">
                      <img src="{{ asset('assets/img/profiles/avatar-01.jpg') }}" alt="">
                      <span class="status online"></span>
                  </span>
                  <span>{{ Auth::user()->username }}</span>
              </a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="profile.html"><i data-feather="user" class="me-1"></i>
                      Profile</a>
                  <form action="{{ route('logout') }}" method="POST" id="logout-form">
                      @csrf
                      <button type="submit" class="dropdown-item"
                          style="border: none; background: none; width: 100%; cursor: pointer;">
                          <i data-feather="log-out" class="me-1"></i> Logout
                      </button>
                  </form>
              </div>
          </li>
      </ul>
  </div>
