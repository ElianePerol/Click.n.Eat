@extends('layout.main')

@section('main')
    <div class="container py-5 d-flex justify-content-center">
        <div class="col-6">
            <h1 class="mb-4">Modification catégorie</h1>

            <a href="{{ route('categories.index') }}" class="btn btn-secondary mb-4">Retour à la liste</a>

            <form action="{{ route('categories.update', $category->id) }}" method="POST" class="border p-4 rounded-2 shadow-sm">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="name" class="form-label">Nom :</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Nom" value="{{ $category->name }}">
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
