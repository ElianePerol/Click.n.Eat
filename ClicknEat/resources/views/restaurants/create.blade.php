@extends('layout.main')

@section('main')
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
@endsection

@section('scripts')
    <script>
        console.log("Script !");
    </script>
@endsection
