
@extends('layouts.admin')


@section('content')


    @if(session('success'))

        <div class="alert alert-success" role="alert">

            {{ session('success')}}

        </div>
    @endif

    <div class="main-csm">
        <h1 class="text-white mb-5">Projects & Types List</h1>

        <table class="table table-dark text-white text-center">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Types</th>
                <th scope="col">Project in relation</th>


              </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)

                <tr>
                    <td>{{ $type->id}}</td>
                    <td>{{ $type->title}}</td>
                    <td>

                        <ul class="list-group">
                            @foreach ($type->projects as $project)

                            @endforeach
                            <li class="list-group-item">
                                <a href="{{ route('admin.projects.show', $project)}}">{{ $project->title }}</a>
                            </li>

                        </ul>


                    </td>


                </tr>



                @endforeach


            </tbody>
          </table>

    </div>


@endsection
