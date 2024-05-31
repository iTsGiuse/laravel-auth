@extends('layouts.admin')

@section('content')
    <section id="admin-project-show">
        <div class="container-fluid">
            <div class="row my-3">
                <div class="col">
                    <h1 class="text-center text-danger">Dettagli del progetto: {{$project->name}}</h1>
                </div>
            </div>
            <div class="row my-5">
                <div class="col">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title my-2">{{$project->name}}</h5>
                            <p class="card-text my-2">{{$project->client_name}}</p>
                            <p class="card-text my-2">{{$project->summary}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col text-center">
                    <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Torna alla lista dei progetti</a>
                </div>
            </div>
        </div>
    </section>
@endsection