<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="/inspinia/img/profile_small.jpg" />
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{Auth::user()->name}}</strong>
                        </span> <span class="text-muted text-xs block"> </span> </span> </a>

                </div>
            </li>
            <li>
                <a href="#"><i class="fa fa-laptop"></i> <span class="nav-label">Manage User</span></a>
            </li>




        </ul>

    </div>
</nav>
