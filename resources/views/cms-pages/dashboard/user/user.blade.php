@extends('layouts.user')

@section('title')
    User Dashboard
@endsection

@section('content')
<div>
    <div class="px-3 pt-3">
        <h3>Hi, {{ Auth::user()->name }}!</h3>
    </div>
    <div class="row pt-4 tre px-3">
        <div class="col-lg-4 shadow">
            <div style="width: 85px; margin: 0 auto;">
                <img src="dashboard-assets\img\bell.png" alt="" width="60px" class="mt-5">
                <span class="d-block fs-1 fw-bold pt-2 px-3">4</span>
            </div>
            <div style="width: 158px; margin: 0 auto;">
                <p class="fs-5 text-secondary mt-2">Total Complaints</p>
            </div>
        </div>
        <div class="col-lg-4 shadow">
            <div style="width: 85px; margin: 0 auto;">
                <img src="dashboard-assets\img\ringing.png" alt="" width="60px" class="mt-5">
                <span class="d-block fs-1 fw-bold pt-2 px-3">2</span>
            </div>
            <div style="width: 170px; margin: 0 auto;">
                <p class="fs-5 text-secondary mt-2">Active Complaints</p>
            </div>
        </div>
        <div class="col-lg-4 shadow">
            <div style="width: 85px; margin: 0 auto;">
                <img src="dashboard-assets\img\notification.png" alt="" width="60px" class="mt-5">
                <span class="d-block fs-1 fw-bold pt-2 px-3">1</span>
            </div>
            <div style="width: 190px; margin: 0 auto;">
                <p class="fs-5 text-secondary mt-2">Resolved Complaints</p>
            </div>
        </div>
    </div>
    <div class="shadow mt-5 pt-3 vh-100">
        <div class="d-flex justify-content-between px-4">
            <div>
                <h5 class="pt-2">Recent Complaints</h5>
            </div>
            <div>
                <button class="viewy">View All</button>
            </div>
        </div>
        <div style="border-bottom: 1px solid rgb(211, 211, 211)" class="pt-3"></div>
    </div>
</div>
@endsection
