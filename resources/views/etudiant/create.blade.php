@extends('layouts.app')

@section('title', 'Ajouter un étudiant')
  
@section('content')

<div class="card mt-2">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="float-start">
                    <h2>Ajouter un nouveau étudiant</h2>
                </div>
                <div class="float-end">
                    <a class="btn btn-outline-primary" href="{{ route('student.index') }}"> Retour</a>
                </div>
            </div>
        </div>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oups! </strong> Il y a eu des problèmes avec votre entrée.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form action="{{ route('student.store') }}" method="POST">
                    @csrf
                
                    <div class="form-group">
                        <strong>Nom :</strong>
                        <input type="text" name="nom" class="form-control" placeholder="Saisir le nom">
                        @error('nom')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                        
                    <div class="form-group">
                        <strong>Prénom:</strong>
                        <input type="text" name="prenom" class="form-control" placeholder="Saisir le prénom">
                        @error('prenom')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                        
                    <div class="form-group">
                        <strong>Date de naissance :</strong>
                        <input type="date" name="dateNaissance" class="form-control" >
                        @error('dateNaissance')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                        
                    <div class="form-group">
                        <strong>E-mail :</strong>
                        <input type="email" name="email" class="form-control" placeholder="Saisir ton email">
                        @error('email')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                        
                    <div class="form-group">
                        <strong>Téléphone:</strong>
                        <input type="text" name="tel" class="form-control" placeholder="Saisir ton  numéro de téléphone">
                        @error('tel')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
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