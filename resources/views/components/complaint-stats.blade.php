@if(isset($stats))
<div class="row pt-4 tre px-3">
    <!-- Total Complaints -->
    <div class="col-lg-4 shadow stat-card">
        <div style="width: 85px; margin: 0 auto;">
            <img src="{{ asset('dashboard-assets/img/bell.png') }}" alt="Total" width="60px" class="mt-5">
            <span class="d-block fs-1 fw-bold pt-2 px-3">{{ $stats['total'] ?? 0 }}</span>
        </div>
        <div style="width: 158px; margin: 0 auto;">
            <p class="fs-5 text-secondary mt-2">Total Complaints</p>
            <small class="text-muted">{{ $isAdmin ? 'System-wide' : 'Your complaints' }}</small>
        </div>
    </div>

    <!-- Active Complaints -->
    <div class="col-lg-4 shadow stat-card">
        <div style="width: 85px; margin: 0 auto;">
            <img src="{{ asset('dashboard-assets/img/ringing.png') }}" alt="Active" width="60px" class="mt-5">
            <span class="d-block fs-1 fw-bold pt-2 px-3">{{ $stats['active'] ?? 0 }}</span>
        </div>
        <div style="width: 170px; margin: 0 auto;">
            <p class="fs-5 text-secondary mt-2">Active Complaints</p>
            <small class="text-muted">Pending/In Progress</small>
        </div>
    </div>

    <!-- Resolved Complaints -->
    <div class="col-lg-4 shadow stat-card">
        <div style="width: 85px; margin: 0 auto;">
            <img src="{{ asset('dashboard-assets/img/notification.png') }}" alt="Resolved" width="60px" class="mt-5">
            <span class="d-block fs-1 fw-bold pt-2 px-3">{{ $stats['resolved'] ?? 0 }}</span>
        </div>
        <div style="width: 190px; margin: 0 auto;">
            <p class="fs-5 text-secondary mt-2">Resolved Complaints</p>
            <small class="text-muted">{{ $isAdmin ? 'All resolved' : 'Your resolved' }}</small>
        </div>
    </div>

    @if($isAdmin && isset($stats['rejected']))
    <!-- Rejected Complaints (Admin only) -->
    <div class="col-lg-4 shadow stat-card mt-4">
        <div style="width: 85px; margin: 0 auto;">
            <img src="{{ asset('dashboard-assets/img/cancel.png') }}" alt="Rejected" width="60px" class="mt-5">
            <span class="d-block fs-1 fw-bold pt-2 px-3">{{ $stats['rejected'] ?? 0 }}</span>
        </div>
        <div style="width: 190px; margin: 0 auto;">
            <p class="fs-5 text-secondary mt-2">Rejected Complaints</p>
            <small class="text-muted">System-wide</small>
        </div>
    </div>
    @endif
</div>
@endif
