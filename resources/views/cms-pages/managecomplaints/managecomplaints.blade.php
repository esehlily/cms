@extends('layouts.admin')

@section('title')
    Manage Complaints
@endsection

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Manage Complaint #{{ $complaint->id }}</h1>

    <div class="card mb-4">
        <div class="card-header">
            <h5>Complaint Details</h5>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <p><strong>Student:</strong> {{ $complaint->user->name }}</p>
                    <p><strong>Email:</strong> {{ $complaint->user->email }}</p>
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
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <h5>Update Status</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('complaints.update-status', $complaint) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select" required>
                        @foreach(App\Models\Complaint::statuses() as $status)
                        <option value="{{ $status }}" {{ $complaint->status === $status ? 'selected' : '' }}>
                            {{ $status }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="remarks" class="form-label">Remarks</label>
                    <textarea name="remarks" id="remarks" rows="3" class="form-control">{{ old('remarks', $complaint->admin_remarks) }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update Status</button>
                {{-- <a href="{{ route('complaints.update-status', $complaint) }}" class="btn btn-warning">
                    Update Status
                </a> --}}
            </form>
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
