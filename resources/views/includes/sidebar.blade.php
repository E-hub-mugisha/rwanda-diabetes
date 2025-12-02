<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="{{ route('admin.dashboard')}}" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="{{ asset('admin/assets/images/faces/face8.jpg') }}"
                        alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">{{ Auth::user()->name}}</p>
                    <p class="designation">Premium user</p>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">Main Menu</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.posts.index')}}">
                <i class="menu-icon mdi mdi-page-layout-body"></i>
                <span class="menu-title">Posts</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.categories.index')}}">
                <i class="menu-icon typcn typcn-archive"></i>
                <span class="menu-title">Categories</span>
            </a>
            
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.programs.index')}}">
                <i class="menu-icon typcn typcn-arrow-maximise"></i>
                <span class="menu-title">Programs</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.testimonials.index')}}">
                <i class="menu-icon typcn typcn-mail"></i>
                <span class="menu-title">Testimonials</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.articles.index')}}">
                <i class="menu-icon typcn typcn-mail"></i>
                <span class="menu-title">articles</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.stories.index')}}">
                <i class="menu-icon typcn typcn-mail"></i>
                <span class="menu-title">stories</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.donations.index')}}">
                <i class="menu-icon typcn typcn-mail"></i>
                <span class="menu-title">donations</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.resources.index')}}">
                <i class="menu-icon typcn typcn-mail"></i>
                <span class="menu-title">Resources</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.team-members.index')}}">
                <i class="menu-icon typcn typcn-mail"></i>
                <span class="menu-title">Team Members</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.partners.index')}}">
                <i class="menu-icon typcn typcn-mail"></i>
                <span class="menu-title">Partners</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.faqs.index')}}">
                <i class="menu-icon typcn typcn-mail"></i>
                <span class="menu-title">FAQs</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.learning-materials.index')}}">
                <i class="menu-icon typcn typcn-mail"></i>
                <span class="menu-title">Learning Materials</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.galleries.index')}}">
                <i class="menu-icon typcn typcn-mail"></i>
                <span class="menu-title">Galleries</span>
            </a>
        </li>
    </ul>
</nav>
<!-- partial -->