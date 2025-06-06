@extends('layouts.admin')

@section('title')
    Admin Dashboard
@endsection

@section('content')
<div>
    <div class="px-3 pt-3">
        <h3>Hi, {{ Auth::user()->name }}!</h3>
    </div>
    <div class="row pt-4 tre px-3">
        <div class="col-lg-3 shadow" style="width: 250px;">
            <i class="fas fa-circle"></i>
            <p>Total Complaints</p>
            <span>125</span>
        </div>
        <div class="col-lg-3 shadow" style="width: 250px;">
            <i class="fas fa-circle"></i>
            <p>Total Complaints</p>
            <span>125</span>
        </div>
        <div class="col-lg-3 shadow" style="width: 250px;">
            <i class="fas fa-circle"></i>
            <p>Total Complaints</p>
            <span>125</span>
        </div>
        <div class="col-lg-3 shadow" style="width: 250px;">
            <i class="fas fa-circle"></i>
            <p>Total Complaints</p>
            <span>125</span>
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
