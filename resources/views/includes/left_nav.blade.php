<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="/inspinia/img/profile_small.jpg" />
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{$user->name}}</strong>
                        </span> <span class="text-muted text-xs block">{{$user->role->name}}</span> </span> </a>

                </div>
            </li>
            
            @if(Auth::user()->role->name=='admin')
            <li>
                <a href="#"><i class="fa fa-laptop"></i> <span class="nav-label">Manage User</span></a>
            </li>
            @endif

            @if(Auth::user()->role->name== 'user')
            <li>
                <a href="#"><i class="fa fa-laptop"></i> <span class="nav-label">test</span></a>
            </li>
            @endif



        </ul>

    </div>
</nav>
