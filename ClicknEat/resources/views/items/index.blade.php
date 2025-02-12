@extends('layout.main')

@section('main')
    <div class="container py-5 d-flex justify-content-center">
        <div class="col-12">
            <h1 class="mb-4">Articles</h1>

            <a href="{{ route('items.create') }}" class="btn btn-primary mb-4">Créer un article</a>

            <div class="table-responsive rounded-3">
                <table class="table table-hover table-bordered table-sm">
                    <thead class="table-light">
                        <tr>
                            <th class="col-1 text-center">ID</th>
                            <th class="col-2 text-center">Nom</th>
                            <th class="col-1 text-center">Coût (¢)</th>
                            <th class="col-1 text-center">Prix (¢)</th>
                            <th class="col-1 text-center">Actif</th>
                            <th class="col-2 text-center">Catégorie</th>
                            <th class="col-2 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td class="align-middle text-center">{{ $item->id }}</td>
                                <td class="align-middle">{{ $item->name }}</td>
                                <td class="align-middle text-center">{{ $item->cost}}</td>
                                <td class="align-middle text-center">{{ $item->price }}</td>
                                <td class="align-middle text-center">{{ $item->is_active ? 'Oui' : 'Non' }}</td>
                                <td class="align-middle">
                                    <a href="{{ route('categories.show', $item->category->id)}}" title="Voir la catégorie">
                                    {{ $item->category->name }}</a>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex align-items-center justify-content-center gap-3">
                                        <a href="{{ route('items.show', $item->id) }}" class="btn btn-outline-info btn-sm">Voir</a>
                                        <a href="{{ route('items.edit', $item->id) }}" class="btn btn-outline-warning btn-sm">Modifier</a>
                                        <form action="{{ route('items.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cette catégorie ?');" class="mb-0">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="id" value="{{ $item->id }}">
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
