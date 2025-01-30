@extends('layout.main')

@section('main')
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
                    <span class="fw-bold">Créé le :</span>
                    <span class="text-muted">{{ $category->created_at->format('d M Y, H:i') }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span class="fw-bold">Mis à jour le :</span>
                    <span class="text-muted">{{ $category->updated_at->format('d M Y, H:i') }}</span>
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
