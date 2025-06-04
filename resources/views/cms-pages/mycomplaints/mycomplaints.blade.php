@extends('layouts.user')

@section('title')
    My Complaints
@endsection

@section('content')
<div>
    <div class="shadow mt-3 vh-100">
        <div class="d-flex justify-content-between pt-4 px-3">
            <h4>My Complaints</h4>
            <button class="filter px-2"><i class="fas fa-filter px-1"></i> Filter</button>
        </div>
        <div style="border-bottom: 1px solid rgb(211, 211, 211)" class="pt-3"></div>
    </div>
</div>
@endsection
