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
@endsection

@section('script')
    <script>
        console.log("Script !");
    </script>
@endsection
