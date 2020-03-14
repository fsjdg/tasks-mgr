@extends('layouts.app')

@section('styles')
    <style>

    </style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">Projects</div>
                    </div>
                </div>

                <div class="card-body">
                    @if( $projects->count() > 0 )
                        <ul class="list-group tasks" id="sortable">
                            @foreach( $projects as $project )
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col">{{ $project->name }}</div>
                                        <div class="col-auto">
                                            <a class="btn btn-info text-white" href="{{ route('projects.edit', ['id' => $project->id]) }}">Edit</a>
                                        </div>
                                        <div class="col-auto">
                                            <form action="{{ route('projects.destroy', ['id' => $project->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>There is no projects yet, <a href="{{ route('projects.create') }}">Create the first one.</a></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
