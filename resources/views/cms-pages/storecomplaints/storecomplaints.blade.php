@extends('layouts.user')

@section('title', 'Complaint Submitted')

@section('content')
<div class="container py-4">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0"><i class="fas fa-check-circle"></i> Complaint Submitted Successfully</h4>
        </div>
        <div class="card-body">
            <div class="alert alert-success">
                <h5 class="alert-heading">Thank You!</h5>
                <p>Your complaint has been successfully submitted and is now being processed.</p>
                <hr>
                <p class="mb-0">Complaint ID: <strong>#{{ $complaint->id }}</strong></p>
            </div>

            <div class="complaint-details">
                <h5 class="mb-3">Complaint Details</h5>
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Subject:</strong> {{ $complaint->subject }}</p>
                        <p><strong>Category:</strong> {{ $complaint->category }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Date Submitted:</strong> {{ $complaint->created_at->format('F j, Y \a\t g:i a') }}</p>
                        <p><strong>Status:</strong> <span class="badge bg-warning">{{ $complaint->status }}</span></p>
                    </div>
                </div>
                <div class="mt-3">
                    <h6>Description:</h6>
                    <p class="text-muted">{{ $complaint->description }}</p>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('mycomplaints') }}" class="btn btn-primary">
                    <i class="fas fa-list"></i> View All Complaints
                </a>
                <a href="{{ route('newcomplaints') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-plus"></i> Submit Another Complaint
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
