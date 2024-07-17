@extends('layouts.app')

@section('content')
    <div class="container">
        @role('admin')
            <div class="row g-3 h-100">
                <div class="col-md-3 h-100">
                    <div class="card rounded-1 h-100">
                        <div class="card-header bg-light border-0 p-2">
                            Roles
                        </div>
                        <div class="card-body p-2 h-100">
                            {{ $roles->count() }}
                            <div class="d-flex align-items-center">
                                @foreach ($roles as $role)
                                    <div class="d-flex justify-content-between gap-2">
                                        <span>{{ $role->name }}</span>
                                        <span>{{ $role->users->count() }}</span> <span> </span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 h-100">
                    <div class="card rounded-1 h-100">
                        <div class="card-header bg-light border-0 p-2">
                            Users
                        </div>
                        <div class="card-body p-2 h-100">
                            {{ $users->count() }}
                        </div>
                    </div>
                </div>
                <div class="col-md-3 h-100">
                    <div class="card rounded-1 h-100">
                        <div class="card-header bg-light border-0 p-2">
                            Posts
                        </div>
                        <div class="card-body p-2 h-100">
                            {{ $posts->count() }}
                        </div>
                    </div>
                </div>
                <div class="col-md-3 h-100">
                    <div class="card rounded-1 h-100">
                        <div class="card-header bg-light border-0 p-2">
                            <div class="d-flex align-items-center justify-content-between">
                                <span>Projects</span>
                                <a href="{{ route('admin.programs') }}" class="btn btn-sm btn-primary rounded-1 ">View All</a>
                            </div>
                        </div>
                        <div class="card-body p-2 h-100">
                            {{ $projects->count() }}
                        </div>
                    </div>
                </div>
            </div>
        @endrole
    </div>
@endsection
