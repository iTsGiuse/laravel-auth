@extends('layouts.admin')

@section('content')
    <section id="admin-project-index">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col">
                    <h1 class="text-center">I tuoi progetti ({{count($projects)}})</h1>
                </div>
            </div>
            <div class="row text-danger">
                <div class="col-1 text-center">
                    <h5>Dettagli:</h5>
                </div>
                <div class="col-4">
                    <h5>Nome progetto:</h5>
                </div>
                <div class="col-4">
                    <h5>Nome cliente:</h5>
                </div>
                <div class="col-2 text-center">
                    <h5>Azioni:</h5>
                </div>
            </div>
            @foreach ($projects as $project)
                <div class="row my-3">
                    <div class="col-1 text-center">
                        <a class="btn btn-primary" href="{{route('admin.projects.show', ['project' => $project->id])}}"><i class="fa-regular fa-eye"></i></a>
                    </div>
                    <div class="col-4">
                        <h5>{{$project->name}}</h5>
                    </div>
                    <div class="col-4">
                        <h5>{{$project->client_name}}</h5>
                    </div>
                    <div class="col-2 text-center">
                        <a class="btn btn-secondary me-2" href="#"><i class="fa-solid fa-pencil"></i></a>
                        <a class="btn btn-light" href="#"><i class="fa-solid fa-trash" style="color: red;"></i></a>
                    </div>
                </div>

            @endforeach
        </div>
    </section>
@endsection
