@extends('layouts.user')

@section('title')
    My Complaints
@endsection

@section('content')
<div>
    {{-- <div class="shadow mt-3 vh-100">
        <div class="d-flex justify-content-between pt-4 px-3">
            <h4>My Complaints</h4>
            <button class="filter px-2"><i class="fas fa-filter px-1"></i> Filter</button>
        </div>
        <div style="border-bottom: 1px solid rgb(211, 211, 211)" class="pt-3"></div>
    </div> --}}
    <div class="container py-4">
        <h1 class="mb-4">My Complaints</h1>

        <a href="{{ route('newcomplaints') }}" class="btn btn-primary mb-4">Submit New Complaint</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Subject</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($complaints as $complaint)
                        <tr>
                            <td>{{ $complaint->id }}</td>
                            <td>{{ $complaint->subject }}</td>
                            <td>{{ $complaint->category }}</td>
                            <td>
                                <span class="badge
                                    @if($complaint->status === 'Pending') bg-warning
                                    @elseif($complaint->status === 'In Progress') bg-info
                                    @elseif($complaint->status === 'Resolved') bg-success
                                    @elseif($complaint->status === 'Rejected') bg-danger
                                    @endif">
                                    {{ $complaint->status }}
                                </span>
                            </td>
                            <td>{{ $complaint->created_at->format('M d, Y') }}</td>
                            <td>
                                <a href="{{ route('showcomplaints', $complaint) }}" class="btn btn-sm btn-info">View</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No complaints found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
