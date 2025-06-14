@extends('layouts.user')

@section('title')
    Show Complaints
@endsection

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Complaint Details</h1>

    <div class="card mb-4">
        <div class="card-header">
            <h5>Complaint #{{ $complaint->id }}</h5>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <p><strong>Subject:</strong> {{ $complaint->subject }}</p>
                    <p><strong>Category:</strong> {{ $complaint->category }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Status:</strong>
                        <span class="badge
                            @if($complaint->status === 'Pending') bg-warning
                            @elseif($complaint->status === 'In Progress') bg-info
                            @elseif($complaint->status === 'Resolved') bg-success
                            @elseif($complaint->status === 'Rejected') bg-danger
                            @endif">
                            {{ $complaint->status }}
                        </span>
                    </p>
                    <p><strong>Date Submitted:</strong> {{ $complaint->created_at->format('M d, Y h:i A') }}</p>
                </div>
            </div>

            <div class="mb-3">
                <h5>Description</h5>
                <p>{{ $complaint->description }}</p>
            </div>

            @if($complaint->documents->count() > 0)
            <div class="mb-3">
                <h5>Attachments</h5>
                <div class="list-group">
                    @foreach($complaint->documents as $document)
                    <a href="{{ Storage::url($document->file_path) }}"
                       target="_blank"
                       class="list-group-item list-group-item-action">
                       {{ $document->original_name }}
                    </a>
                    @endforeach
                </div>
            </div>
            @endif

            @if($complaint->admin_remarks)
            <div class="alert alert-info">
                <h5>Admin Remarks</h5>
                <p>{{ $complaint->admin_remarks }}</p>
            </div>
            @endif
        </div>
    </div>

    <h3 class="mb-3">Status History</h3>
    <div class="list-group">
        @forelse($complaint->statusUpdates as $update)
        <div class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{ $update->status }}</h5>
                <small>{{ $update->created_at->format('M d, Y h:i A') }}</small>
            </div>
            @if($update->remarks)
            <p class="mb-1">{{ $update->remarks }}</p>
            @endif
            <small>Updated by: {{ $update->admin->name }}</small>
        </div>
        @empty
        <div class="list-group-item">
            No status updates available
        </div>
        @endforelse
    </div>
</div>
@endsection
