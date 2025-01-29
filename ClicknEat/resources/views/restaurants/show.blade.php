@extends('layout.main')

@section('main')
    <div class="container py-5 d-flex justify-content-center">
        <div class="col-4">
            <h1 class="mb-4">Restaurants</h1>
            
            <div class="mb-4">
                <a href="{{ route('restaurants.index') }}" class="btn btn-secondary mb-2 me-2">Retour à la liste</a>
                <a href="{{ route('restaurants.create') }}" class="btn btn-primary mb-2">Créer un restaurant</a>
            </div>

            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span class="fw-bold">ID :</span>
                    <span>{{ $restaurant->id }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span class="fw-bold">Nom :</span>
                    <span>{{ $restaurant->name }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span class="fw-bold">Créé le :</span>
                    <span class="text-muted">{{ $restaurant->created_at->format('d M Y, H:i') }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span class="fw-bold">Mis à jour le :</span>
                    <span class="text-muted">{{ $restaurant->updated_at->format('d M Y, H:i') }}</span>
                </li>
            </ul>
            
        </div>
    </div>
@endsection

@section('script')
    <script>
        console.log("Script !");
    </script>
@endsection
