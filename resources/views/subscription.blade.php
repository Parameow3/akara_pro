@extends('layouts.app')
@section('content')
    <body class="container-fluid mx-0 px-xl-0 px-0 bg-gray-100">
    <div class="row px-0 mx-2 mt-3 px-xl-5 mt-xl-5 mx-xl-5 justify-content-center">
        <div class="col-md-7 mt-3 mt-xl-0">



            <div class="card py-3">
                <div class="row mx-3">
                    <p class="fw-bold" style="color: #6f42c1">Current plan</p>
                </div>

                @if($plan_name == "Akara Free")
                <div class="row p-5 bg-dark mx-0 bg-opacity-25">
                    <h2 class="my-5 fw-bolder">Akara Free</h2>
                </div>

                <div class="row mx-3 mt-3 align-items-center">
                    <p><i class="bi bi-check-lg text-success fs-5"></i> 1 Free account</p>
                    <p><i class="bi bi-check-lg text-success fs-5"></i> Podcast listening with ad breaks</p>
                    <p><i class="bi bi-check-lg text-success fs-5"></i> Streaming only</p>
                    <p><i class="bi bi-check-lg text-success fs-5"></i> Podcast play in shuffle</p>
                    <p><i class="bi bi-check-lg text-success fs-5"></i> Basic audio quality</p>
                    <p class="text-decoration-underline">Learn more</p>
                </div>
                @else
                    <div class="row p-5 mx-0" style="background-color: rgba(111,66,193,0.47)">
                        <h2 class="my-5 fw-bolder">{{ $plan_name }}</h2>
                    </div>

                    <div class="row mx-3 mt-3 align-items-center">
                        <p><i class="bi bi-check-lg text-success fs-5"></i> 1 verified Premium account</p>
                        <p><i class="bi bi-check-lg text-success fs-5"></i> Premium audio quality</p>
                        <p><i class="bi bi-check-lg text-success fs-5"></i> Cancel anytime</p>
                        <p class="text-decoration-underline">Learn more</p>
                    </div>
                @endif
                <hr>
                <div class="row p-1 mx-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="">${{ $plan_price }}</h3>
                            <p>per month</p>
                        </div>

                        <div>
                            <a class="btn rounded-5 py-3 px-5 fw-bolder btn-outline-danger" >Cancel plan</a>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="fw-bolder my-3">Available plans</h1>

            @foreach($plans as $plan)
                <div class="card pb-3 mb-5">
                    <div class="row p-5 mx-0" style="background-color: rgba(111,66,193,0.47)">
                        <h2 class="my-5 fw-bolder">{{ $plan->name }}</h2>
                    </div>

                    <div class="row mx-3 mt-3 align-items-center">
                        <p><i class="bi bi-check-lg text-success fs-5"></i> 1 verified Premium account</p>
                        <p><i class="bi bi-check-lg text-success fs-5"></i> Premium audio quality</p>
                        <p><i class="bi bi-check-lg text-success fs-5"></i> Cancel anytime</p>
                        <p class="text-decoration-underline">Learn more</p>
                    </div>
                    <hr>
                    <div class="row p-1 mx-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class="">${{ $plan->price }}</h3>
                                <p>per month</p>
                            </div>
                            <div>
                                <a class="btn rounded-5 py-3 px-5 fw-bolder" href="{{ route('plans.show', $plan->slug) }}" style="--bs-btn-border-color: #6f42c1; --bs-btn-hover-bg: rgba(111,66,193,0.47)">Select</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </body>
@endsection
