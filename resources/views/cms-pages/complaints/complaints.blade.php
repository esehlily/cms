@extends('layouts.admin')

@section('title')
    Admin Dashboard
@endsection

@section('content')
<div>
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
