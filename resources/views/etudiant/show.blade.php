@extends('layouts.app')

@section('title', 'Information étudiant')

@section('content')

    <div class="card mt-2">
        <div class="card-header">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="float-start">
                    <h2>Information de l'étudiant </h2>
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
                    <div class="form-group">
                        <label for="idLbl">ID:</label>
                        <input type="text" name="id" class="form-control" value="{{$student->id}}" />
                    </div>
                    <div class="form-group">
                        <label for="nomLbl">Nom:</label>
                        <input type="text" name="nom" class="form-control" value="{{$student->nom}}" />
                    </div>
                    <div class="form-group">
                        <label for="prenomLbl">Prénom:</label>
                        <input type="text" name="prenom" class="form-control" value="{{$student->prenom}}" />
                    </div>
                    <div class="form-group">
                        <label for="naissanceLbl">Date de naissance :</label>
                        <input type="text" name="dateNaissance" class="form-control" value="{{$student->dateNaissance}}" />
                    </div>
                    <div class="form-group">
                        <label for="emailLbl">Email :</label>
                        <input type="text" name="email" class="form-control" value="{{$student->email}}" />
                    </div>
                    <div class="form-group">
                        <label for="phoneLbl">Phone :</label>
                        <input type="text" name="tel" class="form-control" value="{{$student->tel}}" />
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>

@endsection