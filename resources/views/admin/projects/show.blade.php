
@extends('layouts.admin')

@section('content')


    <div class="main-csm text-white">

        <h1 class="mb-5">{{ $project->title }} <a class="btn btn-warning ms-2" href="{{ route('admin.projects.edit', $project)}}"><i class="fa-solid fa-pen-to-square"></i></a></h1>

        @if($project->type)
            <p class="mb-4">Type: <strong>{{ $project->type->title}}</strong></p>
        @endif


        <div class="w-50 mb-4">
            <img class="img-fluid mb-4" src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
            <p>{{ $project->image_original_name }}</p>
        </div>

        <p class="mb-4">{{ $project->text }}</p>
        <p class="mb-4">Data: {{ $project->release_date }}</p>
        <p class="mb-4">{{ $project->description }}</p>


    </div>







@endsection
