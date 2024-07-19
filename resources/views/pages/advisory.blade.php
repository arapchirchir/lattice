@extends('layouts.public')
@section('title', 'Advisory')
@section('content')
    <div class="text-start bg-overlay-dark-7 py-7"
        style="background:url('{{ asset('assets/images/banner/02.jpg') }}') no-repeat; background-size:cover; background-position: center center;">
        <div class="container">
            <div class="row all-text-white">
                <div class="col-md-6 align-self-start">
                    <h1 class="fw-bold">Welcome to lattice Advisory</h1>
                    <h6 class="mb-2">
                        Join over 75+ companies who love what we do
                    </h6>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-start">
                            <li class="breadcrumb-item active">
                                <a href="#about" class="btn rounded-1 btn-success">
                                    About us
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 mb-4" id="about">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
                <h2 class="display-6 fw-bold">Who we are</h2>
                <p>
                    Lattice Consulting Ltd offers specialized corporate finance, strategy, training, and research services
                    to clients across Africa. Lattice has a strong presence in Kenya and has accumulated rich local
                    knowledge in multiple industries.
                </p>
                <p>
                    Our principals and associates combine over sixty years of private and public-sector experience
                    across a broad range of sectors and functional areas, with multi-discipline expertise, international
                    exposure, a strong relationship with local authorities and corporations, and the ability to
                    incorporate local context in their services
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/images/banner/advisory-about.jpg') }}" class="img-fluid rounded-2"
                    alt="">
            </div>
        </div>

        <div class="d-flex align-items-end justify-content-end py-4">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div>
                    <hr class="border border-success">
                </div>
                <h4 class="fw-bold display-6 text-nowrap">What advisory does</h4>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4">
                <div class="h-100 card card-body">
                    <h5 class="fw-bolder">Program Design and Management: </h5>
                    <p>Designing and managing programs with quantifiable goals is key to
                        achieving
                        desired outcomes. Our advisory services ensure that programs are well-structured, effectively
                        managed, and
                        aligned with organizational objectives. Programs we have managed have consistently met or exceeded
                        their
                        targets, with an average success rate of 90%.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 card card-body">
                    <h5 class="fw-bold">Market Studies and Technical Research: </h5>
                    <p>Providing invaluable insights for strategic planning, our
                        market
                        studies
                        and technical research are thorough and data-driven. These studies have helped clients understand
                        market
                        trends,
                        customer needs, and competitive landscapes, leading to more effective business strategies. Our
                        research has
                        been
                        cited in industry journals and used by policymakers for strategic planning.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 card card-body">
                    <h5 class="fw-bold">Feasibility Studies: </h5>
                    <p>
                        Assessing the viability of projects and initiatives is crucial for informed
                        decision-making. Our feasibility studies provide a detailed analysis of potential projects,
                        including
                        financial,
                        technical, and market considerations. Projects vetted through our feasibility studies have achieved
                        a 95%
                        success rate in execution.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
