@extends ('layouts.app')

@section ('content')
<div class="container py-4">

    <div class="header-page d-flex justify-content-between align-items-center mb-3">
        <h1>Crea un nuovo progetto</h1>

    </div>

    @include('shared.errors')



    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="project-title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="project-title" name="title">
        </div>
        <div class="mb-3">
            <label for="project-content" class="form-label">Contenuto del progetto</label>
            <textarea class="form-control" id="project-content" rows="5" name="content"></textarea>
        </div>
        <div class="mb-3">
            <label for="project-content" class="form-label">Tipologia del progetto</label>
            <select class="form-select" aria-label="Default select example" name="type_id">
                @foreach($types as $type)
                <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary">Crea Project</button>
    </form>
    <hr>
    <a href="{{route('admin.projects.index')}}" class="btn btn-info">Torna alla lista dei project</a>
</div>
@endsection