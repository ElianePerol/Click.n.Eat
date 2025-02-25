@extends('layout.main-template')

@section('main')

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        @extends('layout.navbar')

        <!--**********************************
            Content body start
        ***********************************-->

        <div class="container py-5 d-flex justify-content-center">
            <div class="col-6">
                <h1 class="mb-4">Création restaurant</h1>

                <a href="{{ route('restaurants.index') }}" class="btn btn-secondary mb-4">Retour à la liste</a>

                <form action="{{ route('restaurants.store') }}" method="POST" class="border p-4 rounded-2 shadow-sm">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom :</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Nom">
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>

        <!--**********************************
            Content body end
        ***********************************-->
    </div>
@endsection

@section('scripts')
    <script>console.log("Script !");</script>
    <script src="../../public/plugins/common/common.min.js"></script>
    <script src="../../public/js/custom.min.js"></script>
    <script src="../../public/js/settings.js"></script>
    <script src="../../public/js/gleek.js"></script>
    <script src="../../public/js/styleSwitcher.js"></script>
    <script src="../../public/js/dashboard/dashboard-1.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
