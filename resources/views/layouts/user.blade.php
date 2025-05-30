<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - User Dashboard</title>
    <link rel="stylesheet" href="{{asset('dashboard-assets/css/dashboard.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 blue-border d-none d-lg-block d-md-none bluey">
                <div>
                    <div>
                        <div class="px-4 pt-2">
                            <h2 class="text-white">User Panel</h2>
                        </div>
                        <div class="pt-4 d-none d-lg-block">
                            <ul class="list-unstyled">
                                <li class="py-2">
                                    <div class="icon-s">
                                        <a href="" class="icon-a">
                                            <i class="fas fa-cubes px-4 icon-p"></i> Dashboard
                                        </a>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="icon-s">
                                        <a href="" class="icon-a">
                                            <i class="fas fa-file-lines px-4 icon-p"></i>
                                            My Complaints
                                        </a>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="icon-s">
                                        <a href="" class="icon-a">
                                            <i class="fas fa-plus px-4 icon-p"></i>
                                            New Complaint
                                        </a>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="icon-s">
                                        <a href="" class="icon-a">
                                            <i class="fas fa-user-group px-4 icon-p"></i>
                                            Profile
                                        </a>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="icon-s">
                                        <a href="" class="icon-a">
                                            <i class="fas fa-gear px-4 icon-p"></i>
                                            Settings
                                        </a>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="icon-s">
                                        <a href="" class="icon-a">
                                            <i class="fas fa-arrow-right-from-bracket px-4 icon-p"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>
                           </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-lg-none">
                <div class="dashboard-img mt-4">
                    <div class="align-content-center">
                        <h2 style="color: #1f41bb">User Panel</h2>
                    </div>
                    <div class="d-lg-none d-block right-modal">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="r-btn"><img src="dashboard-assets\img\Vector (2).svg" alt="" class="pt-2"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                           <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"> User Dashboard</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                           </div>
                           <div class="offcanvas-body bluey">
                                <ul class="list-unstyled">
                                    <li class="py-2">
                                        <div class="icon-s">
                                            <a href="" class="icon-a">
                                                <i class="fas fa-cubes px-4 icon-p"></i> Dashboard
                                            </a>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="icon-s">
                                            <a href="" class="icon-a">
                                                <i class="fas fa-file-lines px-4 icon-p"></i>
                                                My Complaints
                                            </a>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="icon-s">
                                            <a href="" class="icon-a">
                                                <i class="fas fa-plus px-4 icon-p"></i>
                                                New Complaint
                                            </a>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="icon-s">
                                            <a href="" class="icon-a">
                                                <i class="fas fa-user-group px-4 icon-p"></i>
                                                Profile
                                            </a>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="icon-s">
                                            <a href="" class="icon-a">
                                                <i class="fas fa-gear px-4 icon-p"></i>
                                                Settings
                                            </a>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="icon-s">
                                            <a href="" class="icon-a">
                                                <i class="fas fa-arrow-right-from-bracket px-4 icon-p"></i>
                                                Logout
                                            </a>
                                        </div>
                                    </li>
                               </ul>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="pt-4 px-3 border-bottom d-none d-lg-block">
                    <h2>Dashboard</h2>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
