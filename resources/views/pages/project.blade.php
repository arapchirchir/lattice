@extends('layouts.public')
@section('title', 'Projects')
@section('content')
    <div class="text-center bg-overlay-dark-7 py-7"
        style="background:url('{{ asset('storage/' . $project->image) }}') no-repeat; background-size:cover; background-position: center center;">
        <div class="container">
            <div class="row all-text-white">
                <div class="col-md-12 align-self-center">
                    <h1 class="fw-bold">{{ $project->title }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item active">
                                <a href="{{ url('/') }}"><i class="ti-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item me-2">
                                <a href="{{ route('projects') }}">Projects - </a>
                            </li>
                            <li class="breadcrump-item">{{ $project->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-8">
                <img src="{{ asset('storage/' . $project->image) }}" class="img-fluid rounded" alt="">
                <div class="mt-3">
                    <h4 class="fw-bold">{{ $project->title }}</h4>
                    {!! $project->description !!}
                </div>
                @if ($project->video)
                    <div class="mt-3">
                        <div class="ratio ratio-16x9">
                            <iframe class="rounded-2" width="100%" height="315" src="{{ $project->video }}"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-md-4">
                <div class="card card-body mb-2 rounded-1">
                    <h5 class="fw-bold">Related Projects</h5>
                </div>
                @if (isset($related_projects) && count($related_projects) > 0)
                    @foreach ($related_projects as $item)
                        <div class="card card-body mb-2 rounded-1">
                            <a href="{{ route('project.view', $item->slug) }}" class="text-dark">{{ $item->title }} <span
                                    class="text-info">Read more</span></a>
                        </div>
                    @endforeach
                @else
                @endif
            </div>
        </div>
    </div>
@endsection
