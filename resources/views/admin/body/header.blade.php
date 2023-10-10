@php
    $id = Auth::user()->id;
    $user = App\Models\User::find($id);
@endphp

<nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center" data-nav="brand-center">
    <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav">
            <li class="nav-item"><a class="navbar-brand" href="{{ route('dashboard') }}"><span class="brand-logo"></span>
                    <h2 class="brand-text mb-0">DEVIOTECH</h2>
                </a>
            </li>
        </ul>
    </div>
    <div class="navbar-container d-flex content">
        
        <ul class="nav navbar-nav align-items-center ms-auto">
            
            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
            
            
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{ Auth::user()->name }}</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="{{ (!empty($user->profile_photo_path))?url('uploads/user_images/'.$user->profile_photo_path):url('uploads/no_image.jpg') }}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="{{ route('admin.user.profile') }}">
                        <i class="me-50" data-feather="user"></i>
                        Profile
                    </a>
                        
                    <a class="dropdown-item" href="{{ route('admin.logout') }}">
                        <i class="me-50" data-feather="power"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
