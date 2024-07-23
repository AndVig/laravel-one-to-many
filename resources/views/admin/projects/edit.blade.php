@extends ('layouts.app')

@section ('content')
<div class="container py-4">

    <div class="header-page d-flex justify-content-between align-items-center mb-3">
        <h1>Modifica Progetto "{{$project->title}}"</h1>

    </div>

    @include('shared.errors')



    <form action="{{route('admin.projects.update',$project)}}" method="POST">
        @method ('PUT')
        @csrf
        <div class="mb-3">
            <label for="project-title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="project-title" name="title" value="{{old('title', $project->title)}}">
        </div>
        <div class="mb-3">
            <label for="project-content" class="form-label">Contenuto del project</label>
            <textarea class="form-control" id="project-content" rows="5" name="content"> {{old('content', $project->content)}}</textarea>
        </div>
        <button class="btn btn-primary">Aggiorna Project</button>
    </form>
    <hr>
    <a href="{{route('admin.projects.index')}}" class="btn btn-info">Torna alla lista dei project</a>
</div>
@endsection