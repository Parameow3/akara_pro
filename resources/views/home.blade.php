@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="d-flex justify-content-center align-items-center">
                            <div><i class="bi bi-check-circle text-success fw-bolder" style="font-size: 96px"></i></div>
                            <h1 class="ms-3 my-5 fw-bolder">You are logged in!</h1>
                        </div>
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-header text-center">{{ __('Account Overview') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row justify-content-center">
                            <div class="col-md">
                                <div class="card p-3">
                                    <div class="user-heading round">
                                        <img src="{{asset('founder.JPG')}}" style="height: 168px;object-fit: cover;"
                                             class="w-100 rounded-3" alt="">
                                        <h3 class="mt-2">{{Auth::user()->name}}</h3>
                                        <p>{{Auth::user()->email}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="row mt-xl-0 mt-4">
                                    <div class="card p-3">
                                        <div class="panel-body bio-graph-info">
                                            <p style="color: #6f42c1">Your Plan</p>
                                            <div class="row">
                                                <h1>Akara Free</h1>
                                            </div>
                                            <div class="row px-3 px-xl-5 mt-5">
                                                <a href="{{route('subscription')}}" class="btn rounded-5 fw-bold"
                                                   style="--bs-btn-border-color: #6f42c1; --bs-btn-hover-bg: #6f42c1; --bs-btn-hover-color: #ffffff; --bs-btn-color: #6f42c1"><i
                                                        class="bi bi-gem"></i> Join <span
                                                        class="fw-bolder">Premium</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <a href="{{route('profile')}}" class="btn btn-outline-primary fw-bolder fs-3">
                                        View profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
