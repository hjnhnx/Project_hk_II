<header class="header">
    <div class="logo-container">
        <a href="../" class="logo">
            <img src="/libs/client/images/logo.png" height="50" alt="JSOFT Admin"/>
        </a>
        <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
             data-fire-event="sidebar-left-opened">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <!-- start: search & user box -->
    <div class="header-right">
        <span class="separator"></span>

        <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown">
                <figure class="profile-picture">
                    <img src="{{\Illuminate\Support\Facades\Auth::user()->avatar}}" style="height: 40px;width: 40px;object-fit: cover;border-radius: 50%" >
                </figure>
                <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                    <span class="name">{{\Illuminate\Support\Facades\Auth::user()->firstname . ' ' .\Illuminate\Support\Facades\Auth::user()->lastname}}</span>
                    <span class="role">admin</span>
                </div>

                <i class="fa custom-caret"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled">
                    <li class="divider"></li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="{{route('show_profile',\Illuminate\Support\Facades\Auth::user()->id)}}"><i class="fa fa-user"></i>
                            My Profile</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="{{route('user_logout')}}"><i class="fa fa-power-off"></i>
                            Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end: search & user box -->
</header>
