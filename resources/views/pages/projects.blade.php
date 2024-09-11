@extends('layouts.public')
@section('title', 'Portfolio')
@section('content')


    <section class="p-0">
        <div class="tiny-slider arrow-dark arrow-large arrow-transparent arrow-hover">
            <div class="tiny-slider-inner h-400 h-lg-700" data-autoplay="true" data-autoplaytime="7000" data-gutter="0"
                data-arrow="true" data-dots="false" data-items="1">
                @if (isset($slider_projects) && count($slider_projects) > 0)
                    @foreach ($slider_projects as $item)
                        <div class="h-100 bg-overlay-dark-2"
                            style="background-image:url('{{ Storage::url($item->image) }}'); background-position: center center; background-size: cover;">
                            <div class="container h-100">
                                <div class="row d-flex h-100">
                                    <div
                                        class="col-lg-12 me-auto slider-content justify-content-center align-self-center align-items-start text-start">
                                        <h3
                                            class="animate__animated animate__fadeInUp animate__delay-1s display-2 fw-bold text-white">
                                            {{ Str::words($item->title, 15) }}
                                        </h3>
                                        <h3
                                            class="animate__animated animate__fadeInUp animate__delay-2s text-white display-7 alt-font fst-italic mb-2 my-md-4">
                                            {!! Str::words($item->description, 10) !!}
                                        </h3>
                                        <div class="animate__animated animate__fadeInUp animate__delay-3s mt-3 dealy-1500">
                                            <a href="{{ route('project.view', $item->slug) }}" class="btn btn-grad">Learn
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <section class="portfolio pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-start">
                    <h1 class="fw-bold">Our Portfolio</h1>
                    <h6 class="mb-5">
                        Transforming Industries, Empowering Communities
                    </h6>
                </div>
                <div class="col-12">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <p>
                                At Lattice, our portfolio represents a diverse collection of high-impact projects that
                                address some of the most pressing challenges across Africa. With a focus on aquaculture,
                                consulting, advisory, and training, we work closely with governments, international
                                organizations, and private sector partners to design and implement solutions that foster
                                sustainable development, economic growth, and social empowerment.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                Our projects span multiple sectors, including agriculture, food security, MSME acceleration,
                                climate resilience, and gender equality, and each one is driven by our commitment to
                                creating meaningful and lasting change. Through innovation, collaboration, and a focus on
                                sustainability, we have helped transform industries, strengthen communities, and pave the
                                way for a more prosperous and inclusive future.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                Explore our portfolio to discover the initiatives that showcase our expertise, from boosting
                                smallholder farming productivity to building resilient aquaculture value chains. Each
                                project highlights our dedication to solving complex problems with bold, forward-thinking
                                solutions that deliver measurable results.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6"></div>
                </div>
            </div>
            <div class="col-12 col-lg-7 mx-auto">
                <!-- title -->
                <div class="title text-center">
                    <span class="pre-title">Check out some of our latest work.</span>
                    <h2 class="d-none">Our Portfolio: Quality Results</h2>
                    <p class="mb-0">Our portfolio shows our hard work and devotion to helping our clients succeed.
                        Don't just take our word for it</p>
                </div>
            </div>
            <div class="col-md-12 p-0">
                <div class="row items-padding justify-content-center g-3 bg-transparent">
                    @if (isset($projects) && count($projects) > 0)
                        @foreach ($projects as $project)
                            <div class="col-sm-6 col-md-4 col-lg-3 rounded bg-transparent">
                                <div class="bg-overlay-dark-4 rounded" id="project-container"
                                    style="background:url('{{ asset('storage/' . $project->image) }}') no-repeat; background-size:cover; background-position: center center; min-height:200px; border-radius:5px !important; cursor:pointer;">
                                    <div class="position-absolute bottom-0 start-0 mb-1 py-0 px-2">
                                        <h6 class="">
                                            <a href="{{ route('project.view', $project->slug) }}"
                                                title="{{ $project->title }}" class="text-white">{{ $project->title }}</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center py-3">No projects added</div>
                    @endif
                </div>
                <!-- portfolio wrap -->
            </div>
        </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // on hover element with id project-container toggle bg-overlay-dark-4 and bg-overlay-dark-1
            document.querySelectorAll('#project-container').forEach((element) => {
                element.addEventListener('mouseover', () => {
                    element.classList.toggle('bg-overlay-dark-4');
                    element.classList.toggle('bg-overlay-dark-2');
                });
                element.addEventListener('mouseout', () => {
                    element.classList.toggle('bg-overlay-dark-4');
                    element.classList.toggle('bg-overlay-dark-2');
                });
            });
        });
    </script>
@endsection
