@extends('layout.main')

@section('main')
    <div class="container py-5 d-flex justify-content-center">
        <div class="col-8">
            <h1 class="mb-4">Catégories</h1>

            <a href="{{ route('categories.create') }}" class="btn btn-primary mb-4">Créer une catégorie d'article</a>

            <div class="table-responsive">
                <table class="table table-hover table-bordered rounded-2 table-sm">
                    <thead class="table-light">
                        <tr>
                            <th class="col-1 text-center">ID</th>
                            <th class="col-4 text-center">Nom</th>
                            <th class="col-3 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td class="align-middle text-center">{{ $category->id }}</td>
                                <td class="align-middle">{{ $category->name }}</td>
                                <td class="align-middle">
                                    <div class="d-flex align-items-center justify-content-center gap-3">
                                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-outline-info btn-sm">Voir</a>
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-outline-warning btn-sm">Modifier</a>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cette catégorie ?');" class="mb-0">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="id" value="{{ $category->id }}">
                                            <button type="submit" class="btn btn-outline-danger btn-sm">Supprimer</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        console.log("Script !");
    </script>
@endsection
