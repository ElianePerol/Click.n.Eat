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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Catégories</h4>
                                <a href="{{ route('categories.create') }}" class="btn btn-primary mb-4">Créer une catégorie</a>

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nom</th>
                                                <th>Restaurant</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td>{{ $category->id }}</td>
                                                    <td>{{ $category->name }}</td>
                                                    <td>
                                                        <a class="btn mb-1 btn-rounded btn-outline-info" href="{{ route('restaurants.show', $category->restaurant->id)}}" title="Voir le restaurant">
                                                        {{ $category->restaurant->name }}</a>
                                                    </td>
                                                    <td >
                                                        <div class="d-flex gap-2">
                                                            <a class="btn mb-1 btn-rounded btn-primary mr-2" href="{{ route('categories.show', $category->id) }}">Voir</a>
                                                            <a class="btn mb-1 btn-rounded btn-warning mr-2" href="{{ route('categories.edit', $category->id) }}">Modifier</a>
                                                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce restaurant ?');" class="mb-0">
                                                                @csrf
                                                                @method('delete')
                                                                <input type="hidden" name="id" value="{{ $category->id }}">
                                                                <button class="btn mb-1 btn-rounded btn-danger" type="submit">Supprimer</button>
                                                            </form>                                                
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nom</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
    </div>
@endsection

@section('scripts')
    <script>console.log("Script !");</script>
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script src="./js/dashboard/dashboard-1.js"></script>

    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    {{-- <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script> --}}
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
@endsection


