@extends ('layouts.app')

@section ('content')
<div class="container py-4">

    <div class="header-page d-flex justify-content-between align-items-center mb-3">
        <h1>Lista dei Progetti</h1>
        <a as="button" href="{{route('admin.projects.create')}}" class="btn btn-primary">Crea nuovo</a>
    </div>

    @if (session ('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="col">#</th>
                <th scope="col" class="col">Last</th>
                <th scope="col" class="col-7">Descrizione</th>
                <th scope="col" class="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>{{$project->content}}</td>
                <td>
                    <div class="d-flex gap-2">
                        <a href="{{route('admin.projects.show', $project->slug)}}" as="button" class="btn btn-info"><i class="fa-solid fa-magnifying-glass"></i></a>
                        <a href="{{route('admin.projects.edit', $project->id)}}" as="button" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                        <form class="d-inline" action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                    </div>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection