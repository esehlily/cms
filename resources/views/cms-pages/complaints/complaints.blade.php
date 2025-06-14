@extends('layouts.admin')

@section('title')
    Admin Dashboard
@endsection

@section('content')
<div>
    <div class="shadow mt-5 pt-3 vh-100">
        {{-- <div class="d-flex justify-content-between px-4">
            <div>
                <h5 class="pt-2">Recent Complaints</h5>
            </div>
            <div>
                <button class="viewy">View All</button>
            </div>
        </div>
        <div style="border-bottom: 1px solid rgb(211, 211, 211)" class="pt-3"></div> --}}

        <div class="container py-4">
            <h1 class="mb-4">Manage Complaints</h1>

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
                                <th>Student</th>
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
                                <td>{{ $complaint->user->name }}</td>
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
                                    <a href="{{ route('managecomplaints', $complaint) }}" class="btn btn-sm btn-info">Manage</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">No complaints found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
