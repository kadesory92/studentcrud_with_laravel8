@extends('layouts.app')

@section('title', 'Modifier étudiant')
  
@section('content')

<div class="card mt-2">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="float-start">
                    <h2>Modification de l'étudiant</h2>
                </div>
                <div class="float-end">
                    <a class="btn btn-outline-primary" href="{{ route('student.index') }}"> Retour</a>
                </div>
            </div>
        </div>
        
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form action="{{ route('student.update', $student->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <strong>Nom :</strong>
                        <input type="text" name="nom" class="form-control" value="{{$student->nom}}" />
                    </div>
                        
                    <div class="form-group">
                        <strong>Prénom :</strong>
                        <input type="text" name="prenom" class="form-control" value="{{$student->prenom}}" />
                    </div>
                        
                    <div class="form-group">
                        <strong>Date de naissance :</strong>
                        <input type="date" name="dateNaissance" class="form-control" value="{{$student->dateNaissance}}" />
                    </div>
                        
                    <div class="form-group">
                        <strong>E-mail :</strong>
                        <input type="email" name="email" class="form-control" value="{{$student->email}}" />
                    </div>
                        
                    <div class="form-group">
                        <strong>Téléphone :</strong>
                        <input type="text" name="tel" class="form-control" value="{{$student->tel}}" />
                    </div>
                    <br/>            
                    <div >
                        <button type="submit" class="btn btn-primary">Soumettre</button>
                    </div>

                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>
@endsection