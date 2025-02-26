@extends('layout.main-template')

@section('main')
    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <span class="brand-title">
                <img src="{{ asset('images/clickneatlogo-nobg.png') }}" alt="" style="display: block; margin: auto; max-width: 100%; max-height: 100%;">
            </span>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">                        
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="{{ asset('images/user/1.png') }}" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="{{ asset('app-profile.html"><i class="icon-user') }}"></i> <span>Profile</span></a>
                                        </li>
                                        <hr class="my-2">
                                        <li>
                                            <a href="{{ asset('page-lock.html"><i class="icon-lock') }}"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="{{ asset('page-login.html"><i class="icon-key') }}"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="{{ route('dashboard.index') }}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a class="has-arrow" href="{{ asset('javascript:void()') }}" aria-expanded="false">
                            <i class="fas fa-utensils"></i><span class="nav-text">Restaurants</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('restaurants.index') }}" aria-expanded="false">Liste</a></li>
                            <li><a href="{{ route('restaurants.create') }}" aria-expanded="false">Créer</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="{{ asset('javascript:void()') }}" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Catégories</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('categories.index') }}" aria-expanded="false">Liste</a></li>
                            <li><a href="{{ route('categories.create') }}" aria-expanded="false">Créer</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="{{ asset('javascript:void()') }}" aria-expanded="false">
                            <i class="fa-solid fa-carrot"></i><span class="nav-text">Articles</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('items.index') }}" aria-expanded="false">Liste</a></li>
                            <li><a href="{{ route('items.create') }}" aria-expanded="false">Créer</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Restaurants</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">4565</h2>
                                    <a href="{{ route('restaurants.index') }}"><p class="text-white mb-0">Voir</p></a>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fas fa-utensils"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Catégories</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">$ 8541</h2>
                                    <a href="{{ route('categories.index') }}"><p class="text-white mb-0">Voir</p></a>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="icon-notebook menu-icon"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Articles</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">4565</h2>
                                    <a href="{{ route('items.index') }}"><p class="text-white mb-0">Voir</p></a>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa-solid fa-carrot"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Clients</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">123</h2>
                                    <a href="#"><p class="text-white mb-0">Voir</p></a>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>      
        <!--**********************************
            Content body end
        ***********************************-->
        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

@endsection

@section('scripts')
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script src="./js/dashboard/dashboard-1.js"></script>

@endsection