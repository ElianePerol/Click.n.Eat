@extends('layout.main')

@section('main')
    <div class="container py-5 d-flex justify-content-center">
        <div class="col-8">
            <h1 class="mb-4">Restaurants</h1>

            <a href="{{ route('restaurants.create') }}" class="btn btn-primary mb-4">Créer un restaurant</a>

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
                        @foreach ($restaurants as $restaurant)
                            <tr>
                                <td class="align-middle text-center">{{ $restaurant->id }}</td>
                                <td class="align-middle">{{ $restaurant->name }}</td>
                                <td class="align-middle">
                                    <div class="d-flex align-items-center justify-content-center gap-3">
                                        <a href="{{ route('restaurants.show', $restaurant->id) }}" class="btn btn-outline-info btn-sm">Voir</a>
                                        <a href="{{ route('restaurants.edit', $restaurant->id) }}" class="btn btn-outline-warning btn-sm">Modifier</a>
                                        <form action="{{ route('restaurants.destroy', $restaurant->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce restaurant ?');" class="mb-0">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="id" value="{{ $restaurant->id }}">
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
