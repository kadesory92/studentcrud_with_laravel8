@extends('layouts.app')

@section('title', 'Liste des étudiants')

@section('content')
    <div class="card mt-2">
        <div class="card-header">
            <h3 class="card-title text-center">Liste des étudiants</h3>
            <div class="d-flex justify-content-end">
                <a class="btn btn-info" href="{{ route('student.create') }}">Créer un étudiant</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th colspan="3" class="text-center">Acitons</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td><strong>{{ $student->nom }}</strong></td>
                            <td><strong>{{ $student->prenom }}</strong></td>
                            <td><a class="btn btn-primary" href="{{ route('student.show', $student->id) }}">Voir</a></td>
                            <td><a cclass="btn btn-info" href="{{ route('student.edit', $student->id) }}">Modifier</a></td>
                            <td>
                                <form action="{{ route('student.destroy', $student->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-warning" type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center">
                {!! $students->links() !!}
            </div>
        </div>
    </div>
@endsection

<!-- @section('title', 'Liste étudiants'); -->