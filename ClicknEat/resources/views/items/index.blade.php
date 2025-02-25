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
                                <h4 class="card-title">Articles</h4>
                                <a href="{{ route('items.create') }}" class="btn btn-primary mb-4">Créer un article</a>
                                
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nom</th>
                                                <th>Coût (¢)</th>
                                                <th>Prix (¢)</th>
                                                <th>Actif</th>
                                                <th>Catégorie</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>                                      
                                        <tbody>
                                            @foreach ($items as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->cost}}</td>
                                                    <td>{{ $item->price }}</td>
                                                    <td>{{ $item->is_active ? 'Oui' : 'Non' }}</td>
                                                    <td>
                                                        <a class="btn mb-1 btn-rounded btn-outline-info" href="{{ route('categories.show', $item->category->id)}}" title="Voir la catégorie">
                                                            {{ $item->category->name }}</a>
                                                    </td>
                                                    <td >
                                                        <div class="d-flex gap-2">
                                                            <a class="btn mb-1 btn-rounded btn-primary mr-2" href="{{ route('items.show', $item->id) }}">Voir</a>
                                                            <a class="btn mb-1 btn-rounded btn-warning mr-2" href="{{ route('items.edit', $item->id) }}">Modifier</a>
                                                            <form action="{{ route('items.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce restaurant ?');" class="mb-0">
                                                                @csrf
                                                                @method('delete')
                                                                <input type="hidden" name="id" value="{{ $item->id }}">
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
