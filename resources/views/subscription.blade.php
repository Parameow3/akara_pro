@extends('layouts.main')
@section('content')
    <body class="container-fluid mx-0 px-xl-0 px-0 bg-gray-100">
    <div class="row px-0 mx-2 mt-3 px-xl-5 mt-xl-5 mx-xl-5 justify-content-center">
        <div class="col-md-7 mt-3 mt-xl-0">
            <div class="card py-3">
                <div class="row mx-3">
                    <p class="fw-bold" style="color: #6f42c1">Current plan</p>
                </div>

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
                <hr>
                <div class="row p-1 mx-3">
                    <h3 class="">$0.00</h3>
                    <p>per month</p>
                </div>
            </div>

            <h1 class="fw-bolder my-3">Available plans</h1>

            <div class="card pb-3 mb-5">
                    <div class="row p-5 mx-0" style="background-color: rgba(111,66,193,0.47)">
                        <h2 class="my-5 fw-bolder">Akara Premium</h2>
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
                                <h3 class="">$1.99</h3>
                                <p>per month</p>
                            </div>

                            <div>
                                <form action="/session" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="hidden" name="total" value="1">
                                    <input type="hidden" name="planname" value="Akara Premium">
                                    <button class="btn rounded-5 py-3 px-5 fw-bolder" type="submit" id="checkout" style="--bs-btn-border-color: #6f42c1; --bs-btn-hover-bg: rgba(111,66,193,0.47)">Select</button>
                                </form>

                            </div>

                        </div>

                    </div>

            </div>

            <div class="card pb-3 mb-5">

                <div class="row p-5 mx-0" style="background-color: rgba(0,236,52,0.56)">
                    <h2 class="my-5 fw-bolder">Akara Student Pro</h2>
                </div>

                <div class="row mx-3 mt-3 align-items-center">
                    <p><i class="bi bi-check-lg text-success fs-5"></i> 1 verified Premium account</p>
                    <p><i class="bi bi-check-lg text-success fs-5"></i> Discount for eligible students</p>
                    <p><i class="bi bi-check-lg text-success fs-5"></i> Premium audio quality</p>
                    <p><i class="bi bi-check-lg text-success fs-5"></i> Cancel anytime</p>
                    <p class="text-decoration-underline">Learn more</p>
                </div>
                <hr>
                <div class="row p-1 mx-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="">$0.99</h3>
                            <p>per month</p>
                        </div>

                        <div>

                            <form action="/session" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="total" value="0">
                                <input type="hidden" name="planname" value="Akara Student Pro">
                                <button class="btn rounded-5 py-3 px-5 fw-bolder" type="submit" id="checkout" style="--bs-btn-border-color: #00EC34; --bs-btn-hover-bg: rgba(0,236,52,0.56)">Select</button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
