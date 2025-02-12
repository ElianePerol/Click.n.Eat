@extends('layout.main')

@section('main')
    <div class="container py-5 d-flex justify-content-center">
        <div class="col-6">
            <h1 class="mb-4">Création article</h1>

            <a href="{{ route('items.index') }}" class="btn btn-secondary mb-4">Retour à la liste</a>

            <form action="{{ route('items.store') }}" method="POST" class="border p-4 rounded-2 shadow-sm">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nom :</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Nom">
                </div>
                <div class="mb-3">
                    <label for="cost" class="form-label">Coût d'achat en centimes :</label>
                    <input type="text" id="cost" name="cost" class="form-control" placeholder="Coût d'achat">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prix de vente en centimes :</label>
                    <input type="text" id="price" name="price" class="form-control" placeholder="Prix de vente">
                </div>
                <div class="mb-3">
                    <label for="is_active" class="form-label">Actif :</label>
                    <select id="is_active" name="is_active" class="form-select" required>
                        <option value="">L'article est-il au menu</option>
                        <option value="true">Oui</option>
                        <option value="false">Non</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Catégorie :</label>
                    <select id="category_id" name="category_id" class="form-select" required>
                        <option value="">Sélectionnez une catégorie</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
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
