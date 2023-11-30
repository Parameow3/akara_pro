@extends('layouts.app')
@section('content')
<body class="container-fluid mx-0 px-xl-0 px-0 bg-gray-100">
<div class="row px-0 mt-3 mx-2 px-xl-5 mt-xl-5 mx-xl-5 justify-content-center">
    <div class="col-md-3">
        <div class="card p-3">
            <div class="user-heading round">
                <img src="{{asset('founder.JPG')}}" style="height: 252px;object-fit: cover;" class="w-100 rounded-3" alt="">
                <h3 class="mt-2">{{Auth::user()->name}}</h3>
                <p>{{Auth::user()->email}}</p>
            </div>
            <a href="#" class="btn btn-outline-primary"> <i class="bi bi-pencil-square"></i> Edit profile</a>
        </div>
    </div>
    <div class="col-md-5 mt-3 mt-xl-0 mb-5">
        <div class="row">
            <div class="card p-3">
                <div class="panel-body bio-graph-info">
                    <p style="color: #6f42c1">Your Plan</p>
                    <div class="row">
                        <h1>{{$plan_name}}</h1>
                    </div>
                    <div class="row px-3 px-xl-5 mt-5">
                        <a href="{{route('subscription')}}" class="btn rounded-5 fw-bold" style="--bs-btn-border-color: #6f42c1; --bs-btn-hover-bg: #6f42c1; --bs-btn-hover-color: #ffffff; --bs-btn-color: #6f42c1"><i class="bi bi-gem"></i>
                            @if($plan_name == "Akara Free")
                                Join
                            @else
                                Manage
                            @endif
                                <span class="fw-bolder">
                                Premium
                            </span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="card p-3">
                <p style="color: #6f42c1">Account</p>
                <a class="d-flex justify-content-between btn align-items-center" href="{{route('subscription')}}" style="--bs-btn-hover-border-color: #000000">
                    <div>
                        <i class="bi bi-gem" style="color: #6f42c1"></i> Manage your plan
                    </div>

                    <div><i class="bi bi-caret-right fs-4" style="color: #6f42c1"></i></div>
                </a>
                <div class="d-flex justify-content-between btn align-items-center" style="--bs-btn-hover-border-color: #000000">
                    <div>
                        <i class="bi bi-credit-card" style="color: #6f42c1"></i> Manage your card
                    </div>

                    <div><i class="bi bi-caret-right fs-4" style="color: #6f42c1"></i></div>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
@endsection
