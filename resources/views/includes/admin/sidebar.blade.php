<div class="col-lg-3 blue-border d-none d-lg-block d-md-none bluey">
                <div>
                    <div>
                        <div class="px-4 pt-2">
                            <h2 class="text-white">Admin Panel</h2>
                        </div>
                        <div class="pt-4 d-none d-lg-block">
                            <ul class="list-unstyled">
                                <li class="py-2">
                                    <div class="icon-s">
                                        <a href="{{ route('admindashboard') }}" class="icon-a">
                                            <i class="fas fa-cubes px-4 icon-p"></i> Dashboard
                                        </a>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="icon-s">
                                        <a href="{{ route('complaints') }}" class="icon-a">
                                            <i class="fas fa-file-lines px-4 icon-p"></i>
                                            Complaints
                                        </a>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="icon-s">
                                        <a href="" class="icon-a">
                                            <i class="fas fa-user-group px-4 icon-p"></i>
                                            Students
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
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="icon-a">
                                            <i class="fas fa-arrow-right-from-bracket px-4 icon-p"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                           </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-lg-none">
                <div class="dashboard-img mt-4">
                    <div class="align-content-center">
                        <h2 style="color: #1f41bb">Admin Panel</h2>
                    </div>
                    <div class="d-lg-none d-block right-modal">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="r-btn"><img src="dashboard-assets\img\Vector (2).svg" alt="" class="pt-2"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                           <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"> Admin Dashboard</h5>
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
                                                Complaints
                                            </a>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="icon-s">
                                            <a href="" class="icon-a">
                                                <i class="fas fa-user-group px-4 icon-p"></i>
                                                Students
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
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="icon-a">
                                                <i class="fas fa-arrow-right-from-bracket px-4 icon-p"></i>
                                                Logout
                                            </a>
                                        </div>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                               </ul>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
