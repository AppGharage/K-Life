<div class="main">
    <div class="top-bar">
         
    <nav>  
       <strong>Dashboard </strong><small> Admin</small>
        <!-- Right Side Of Navbar --> 
        
        <ul class="navbar-nav test-user ml-auto">
            <!-- Authentication Links -->
            @guest
            <nav class="navbar">
                {{-- <li><a class=" btn btn-sm btn-primary " href="{{ route('login') }}">{{ __('Login') }}</a></li> --}}
                {{-- <li><a class=" btn btn-success" href="{{ route('register') }}">{{ __('Register') }}</a></li> --}}
            </nav>
            @else
                
                    <li class="nav-item test-user dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle arsh " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fas fa-user-circle" style="font-size:18px"></i> {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                         <i class="fas fa-sign-out-alt"></i>
                            {{ __('Logout') }}
                        </a>
                        <a class="dropdown-item" >
                                <i class="fas fa-wrench"></i>
                            Settings                                    
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                
            @endguest
        </ul>
        @guest   
        
        @else
        <a href="/create" class="register-student gold" >
            <i class="fas fa-user-plus"></i> Register Student
            </a>
        @endguest
        <hr style="color:#AAA;">
        
      </nav>
    </div>
    