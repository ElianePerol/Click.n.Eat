@extends('layout.main')

@section('main')
    <div class="container py-5 d-flex justify-content-center">
        <div class="col-6">
            <h1 class="mb-4">Modification article</h1>

            <a href="{{ route('items.index') }}" class="btn btn-secondary mb-4">Retour à la liste</a>

            <form action="{{ route('items.update', $item->id) }}" method="POST" class="border p-4 rounded-2 shadow-sm">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="name" class="form-label">Nom :</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Nom" value="{{ $item->name }}">
                </div>
                <div class="mb-3">
                    <label for="cost" class="form-label">Coût d'achat en centimes :</label>
                    <input type="text" id="cost" name="cost" class="form-control" placeholder="Coût" value="{{ $item->cost }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prix de vente en centimes :</label>
                    <input type="text" id="price" name="price" class="form-control" placeholder="Coût" value="{{ $item->price }}">
                </div>
                <div class="mb-3">
                    <label for="is_active" class="form-label">Actif :</label>
                    <select id="is_active" name="is_active" class="form-select" required>
                        <option value="true" {{ $item->is_active ? 'selected' : '' }}>Oui</option>
                        <option value="false" {{ !$item->is_active ? 'selected' : '' }}>Non</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Catégorie :</label>
                    <select id="category_id" name="category_id" class="form-select" required>
                        @foreach($categories as $category)
                            @if($category->id == $item->category->id)
                                <option value="{{ $category->id }}" selected="selected">{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        console.log("scripts !");
    </script>
@endsection
