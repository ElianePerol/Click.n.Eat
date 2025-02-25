@extends('layout.main-template')

@section('main')
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        @extends('layout.navbar')

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
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
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