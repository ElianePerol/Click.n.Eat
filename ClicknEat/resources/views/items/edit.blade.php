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
            <div class="container-fluid col-8">
                <div class="row">
                    <div class="col-lg-7">
                        <a href="{{ route('items.index') }}" class="btn mb-3 btn-rounded btn-secondary">Retour à la liste</a>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Modifier l'article : {{ $item->name }}</h4>
                                
                                <div class="basic-form">
                                    <form action="{{ route('items.update', $item->id) }}" method="POST" >
                                        @csrf
                                        @method('put')
                                        <label for="name" class="form-label">Nom :</label>
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" class="form-control input-rounded" placeholder="Nouveau nom de l'article'">
                                        </div>
                                        <label for="cost" class="form-label">Coût d'achat en centimes :</label>
                                        <div class="form-group">
                                            <input type="text" id="cost" name="cost" class="form-control input-rounded" placeholder="Coût d'achat" value="{{ $item->cost }}">
                                        </div>
                                        <label for="price" class="form-label">Prix de vente en centimes :</label>
                                        <div class="form-group">
                                            <input type="text" id="price" name="price" class="form-control input-rounded" placeholder="Prix de vente" value="{{ $item->price }}">
                                        </div> 
                                        <div class="mb-3">
                                            <label for="is_active" class="mr-sm-2">Actif :</label>
                                            <select id="is_active" name="is_active" class="custom-select mr-sm-2 input-rounded" required>
                                                <option value="true" {{ $item->is_active ? 'selected' : '' }}>Oui</option>
                                                <option value="false" {{ !$item->is_active ? 'selected' : '' }}>Non</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="category_id" class="mr-sm-2">Catégorie :</label>
                                            <select id="category_id" name="category_id" class="custom-select mr-sm-2 input-rounded" required>
                                                @foreach($categories as $category)
                                                    @if($category->id == $item->category->id)
                                                        <option value="{{ $category->id }}" selected="selected">{{ $category->name }}</option>
                                                    @else
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn mb-1 btn-rounded btn-primary">Envoyer</button>
                                    </form>
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