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
                <div class="header-right">
                    <ul class="clearfix">                        
                        <li class="icons dropdown">
                            <div class="c-pointer position-relative"   data-toggle="dropdown">
                                <span class="text-dark">Mon compte</span>
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <span>{{ Auth::user()->name }}</span>
                                        </li>
                                        <li>
                                            <a href="{{ asset('app-profile.html"') }}" ><i class="icon-user"></i><span>Profile</span></a>
                                        </li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                                @csrf
                                                <button type="submit" class="bg-transparent border-0 p-0">
                                                    <i class="icon-key"></i> <span class="like-a bg-transparent">Logout</span>
                                                </button>
                                            </form>
                                        </li>
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
            <div class="container-fluid col-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-7">
                            <a href="{{ route('restaurants.create') }}" class="btn mb-3 mr-3 btn-rounded btn-primary">Créer un restaurant</a>
                            <a href="{{ route('restaurants.index') }}" class="btn mb-3 btn-rounded btn-secondary">Retour à la liste</a>
                            
                            <div class="card text-left">
                                <div class="card-body">
                                    <h5 class="card-title mb-2">Restaurant : {{ $restaurant->name }}</h5>
                                    <ul>
                                        <li class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="fw-bold">ID :</span>
                                            <span>{{ $restaurant->id }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="fw-bold">Créé le :</span>
                                            <span class="text-muted">{{ $restaurant->created_at->format('d M Y, H:i') }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span class="fw-bold">Mis à jour le :</span>
                                            <span class="text-muted">{{ $restaurant->updated_at->format('d M Y, H:i') }}</span>
                                        </li>
                                    </ul>
                                    <a class="btn btn-rounded btn-outline-warning" href="{{ route('restaurants.edit', $restaurant->id) }}">Modifier</a>
                                </div>
                            </div>

                            <div class="card text-left">
                                <div class="card-body pb-0">
                                    <h5 class="card-title mb-3">Catégories :</h5>
                                    <ul>
                                        @foreach ($restaurant->categories as $category)
                                            <li class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('categories.show', $category->id) }}" class="btn mb-1 btn-rounded btn-outline-info" title="Voir la catégorie">
                                                    {{ $category->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    </li>
                                </div>
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
    <script>console.log("Script !");</script>
    <script src="{{ asset('plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/gleek.js') }}"></script>
    <script src="{{ asset('js/styleSwitcher.js') }}"></script>
    <script src="{{ asset('./js/dashboard/dashboard-1.js') }}"></script>
@endsection
