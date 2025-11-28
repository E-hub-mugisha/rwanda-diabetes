<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
            <img src="https://demo.bootstrapdash.com/star-admin-free/dist/themes/assets/images/logo.svg"
                alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="https://demo.bootstrapdash.com/star-admin-free/dist/themes/assets/images/logo-mini.svg"
                alt="logo" />
        </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav">
            <li class="nav-item fw-semibold d-none d-lg-block"> Help : +050 2992 709 </li>
            <li class="nav-item dropdown language-dropdown">
                <a class="nav-link px-2 d-flex align-items-center" id="LanguageDropdown" href="#"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="d-inline-flex me-0">
                        <div class="flag-icon-holder m-2">
                            <i class="flag-icon flag-icon-us"></i>
                        </div>
                    </div>
                    <span class="profile-text fw-medium d-none d-md-block">English</span>
                </a>
                <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2"
                    aria-labelledby="LanguageDropdown">
                    <a class="dropdown-item">
                        <div class="flag-icon-holder">
                            <i class="flag-icon flag-icon-us"></i>
                        </div> English
                    </a>
                    <a class="dropdown-item">
                        <div class="flag-icon-holder">
                            <i class="flag-icon flag-icon-fr"></i>
                        </div> French
                    </a>
                    <a class="dropdown-item">
                        <div class="flag-icon-holder">
                            <i class="flag-icon flag-icon-ae"></i>
                        </div> Arabic
                    </a>
                    <a class="dropdown-item">
                        <div class="flag-icon-holder">
                            <i class="flag-icon flag-icon-ru"></i>
                        </div> Russian
                    </a>
                </div>
            </li>
        </ul>
        <form class="ms-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
                <input type="search" class="form-control" placeholder="Search Here" />
            </div>
        </form>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator" id="messageDropdown" href="#" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="count">7</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                    aria-labelledby="notificationDropdown">
                    <a class="dropdown-item py-3 border-bottom">
                        <p class="mb-0 fw-medium float-start"> You have 4 new notifications </p>
                        <span class="badge badge-pill bg-primary float-end">View all</span>
                    </a>
                    <a class="dropdown-item preview-item py-3">
                        <div class="preview-thumbnail">
                            <i class="mdi mdi-alert m-auto text-primary"></i>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject fw-normal text-dark mb-1"> Application Error </h6>
                            <p class="fw-light small-text mb-0">Just now</p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item py-3">
                        <div class="preview-thumbnail">
                            <i class="mdi mdi-cog m-auto text-primary"></i>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject fw-normal text-dark mb-1"> Settings </h6>
                            <p class="fw-light small-text mb-0">Private message</p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item py-3">
                        <div class="preview-thumbnail">
                            <i class="mdi mdi-airballoon m-auto text-primary"></i>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject fw-normal text-dark mb-1"> New user registration </h6>
                            <p class="fw-light small-text mb-0">2 days ago</p>
                        </div>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator" id="notificationDropdown" href="#"
                    data-bs-toggle="dropdown">
                    <i class="mdi mdi-email-outline"></i>
                    <span class="count bg-success">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                    aria-labelledby="messageDropdown">
                    <a class="dropdown-item py-3">
                        <p class="mb-0 fw-medium float-start"> You have 7 unread mails </p>
                        <span class="badge badge-pill bg-primary float-end">View all</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face10.jpg" alt="image"
                                class="img-sm profile-pic" />
                        </div>
                        <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis fw-medium text-dark"> Marian Garner </p>
                            <p class="fw-light small-text"> The meeting is cancelled </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face12.jpg" alt="image"
                                class="img-sm profile-pic" />
                        </div>
                        <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis fw-medium text-dark"> David Grey </p>
                            <p class="fw-light small-text"> The meeting is cancelled </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face1.jpg" alt="image"
                                class="img-sm profile-pic" />
                        </div>
                        <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis fw-medium text-dark"> Travis Jenkins </p>
                            <p class="fw-light small-text"> The meeting is cancelled </p>
                        </div>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img class="img-xs rounded-circle" src="../assets/images/faces/face8.jpg"
                        alt="Profile image" />
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <img class="img-md rounded-circle" src="../assets/images/faces/face8.jpg"
                            alt="Profile image" />
                        <p class="mb-1 mt-3 fw-semibold">Allen Moreno</p>
                        <p class="fw-light text-muted mb-0"> allenmoreno@gmail.com </p>
                    </div>
                    <a class="dropdown-item"><i
                            class="dropdown-item-icon mdi mdi-account-outline text-primary"></i> My Profile
                        <span class="badge badge-pill bg-danger">1</span></a>
                    <a class="dropdown-item"><i
                            class="dropdown-item-icon mdi mdi-message-text-outline text-primary"></i>
                        Messages</a>
                    <a class="dropdown-item"><i
                            class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary"></i>
                        Activity</a>
                    <a class="dropdown-item"><i
                            class="dropdown-item-icon mdi mdi-help-circle-outline text-primary"></i> FAQ</a>
                    <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary"></i>Sign
                        Out</a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
<!-- partial -->