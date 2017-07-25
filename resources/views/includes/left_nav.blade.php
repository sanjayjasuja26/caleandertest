<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="/inspinia/img/profile_small.jpg" />
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{Auth::user()->name}}</strong>
                        </span> <span class="text-muted text-xs block">{{Auth::user()->role->name}}</span> </span> </a>

                </div>
            </li>
           
            @if(Auth::user()->role->name=='admin')
            <li>
                <a href="/manageuser"><i class="fa fa-laptop"></i> <span class="nav-label">Manage User</span></a>
            </li>
            @endif

            @if(Auth::user()->role->name== 'user')
            <li>
                <a href="#"><i class="fa fa-laptop"></i> <span class="nav-label">test</span></a>
            </li>
            <li>
                <a href="/caleander"><i class="fa fa-calendar" aria-hidden="true"></i> <span class="nav-label">Caleander</span></a>
            </li>
            <li>
                <a href="/map"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="nav-label">Manage Work Location</span></a>
            </li>
            @if(Session::has('adminId'))
            <li>
                <a href="/manageuser/access/{{Session::get('adminId')}}"><i class="fa fa-laptop"></i> <span class="nav-label">Return Back</span></a>
            </li>
            @endif
            @endif



        </ul>

    </div>
</nav>
