@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Travel</p>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Voyages</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($travel as $travel)
                            <tr>
                                <td>{{ $travel->travel_id }}</td>
                                <td><strong>{{ $travel->travel_name }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('travel.show', $travel->travel_id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('travel.edit', $film->travel_id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('travel.destroy', $film->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
