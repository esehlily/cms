@extends('layouts.user')

@section('title')
    User Dashboard
@endsection

@section('content')
<div>
    <div class="px-3 pt-3">
        <h3>Hi, {{ Auth::user()->name }}!</h3>
    </div>
    {{-- <div class="row pt-4 tre px-3">
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
    </div> --}}
    <x-complaint-stats
    :total="$stats['total']"
    :active="$stats['active']"
    :resolved="$stats['resolved']"
    :isAdmin="false"
    />
    <div class="shadow mt-5 pt-3">
        <div class="d-flex justify-content-between px-4">
            <div>
                <h5 class="pt-2">Recent Complaints</h5>
            </div>
            <div>
                <button class="viewy">View All</button>
            </div>
        </div>
        <div style="border-bottom: 1px solid rgb(211, 211, 211)" class="pt-3"></div>
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
