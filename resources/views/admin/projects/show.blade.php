@extends ('layouts.app')

@section ('content')
<div class="container py-4">

    <div class="header-page d-flex justify-content-between align-items-center mb-3">
        <h1>{{$project->title}}</h1>
        <button class="btn btn-primary">Edit</button>
    </div>


    <p>{{$project->content}}</p>
    <hr>
    <a href="{{route('admin.projects.index')}}" class="btn btn-info">Torna alla lista dei project</a>
</div>
@endsection