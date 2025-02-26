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
        <div class="container py-5 d-flex justify-content-center">
            <div class="col-4">
                <h1 class="mb-4">Catégorie</h1>
                
                <div class="mb-4">
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary mb-2 me-2">Retour à la liste</a>
                    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2">Créer une catégorie d'article</a>
                </div>

                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="fw-bold">ID :</span>
                        <span>{{ $category->id }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="fw-bold">Nom :</span>
                        <span>{{ $category->name }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="fw-bold">Restaurant :</span>
                        <a href="{{ route('restaurants.show', $category->restaurant->id) }}" title="Voir le restaurant">
                            <span class="text-muted">{{ $category->restaurant->name }}</span>
                        </a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="fw-bold">Créé le :</span>
                        <span class="text-muted">{{ $category->created_at->format('d M Y, H:i') }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="fw-bold">Mis à jour le :</span>
                        <span class="text-muted">{{ $category->updated_at->format('d M Y, H:i') }}</span>
                    </li>
                </ul>

                <div class="table-responsive rounded-3 mt-4">
                    <table class="table table-hover table-bordered table-sm">
                        <thead class="table-light">
                            <tr>
                                <th class="col-1 text-center">Articles</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category->items as $item)
                                <tr>
                                    <td class="align-middle text-center">
                                        <a href="{{ route('items.show', $item->id) }}" title="Voir l'article'">
                                            {{ $item->name }}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
