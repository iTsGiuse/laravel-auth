@extends('layouts.admin')

@section('content')
    <section id="admin-index">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <h1 class="text-center">I tuoi progetti ({{count($projects)}})</h1>
                </div>
            </div>
            <div class="row text-danger">
                <div class="col-5">
                    <h5>Nome progetto:</h5>
                </div>
                <div class="col-5 text-center">
                    <h5>Nome cliente:</h5>
                </div>
                <div class="col-2 text-center">
                    <h5>Più informazioni:</h5>
                </div>
            </div>
            @foreach ($projects as $project)
                <div class="row my-3">
                    <div class="col-5">
                        <h5>{{$project->name}}</h5>
                    </div>
                    <div class="col-5 text-center">
                        <h5>{{$project->client_name}}</h5>
                    </div>
                    <div class="col-2 text-center">
                        <a class="btn btn-primary" href="{{route('admin.projects.show', ['project' => $project->id])}}">+</a>
                    </div>
                </div>

            @endforeach
        </div>
    </section>
@endsection

<style>
    .row{
        height: 50px;
    }
</style>