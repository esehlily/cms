<?php

namespace App\Http\Controllers;
use App\Models\Complaint;
use Illuminate\Http\Request;
use App\Models\ComplaintStatusUpdate;
use App\Services\ComplaintStatsService;

class AdminController extends Controller
{
    //
    public function admin()
    {
        //
        return view('layouts.admin');
    }

    //
    // public function admindashboard()
    // {
    //     //
    //     return view('cms-pages.dashboard.admin.admin');
    // }

    public function admindashboard()
    {
        $stats = app(ComplaintStatsService::class)->getAdminStats();

        return view('cms-pages.dashboard.admin.admin', [
            'stats' => $stats,
            'isAdmin' => true
        ]);
    }

    // public function complaints()
    // {
    //     //
    //     return view('cms-pages.complaints.complaints');
    // }


    public function complaints()
    {
        $complaints = Complaint::with('user')->latest()->get();
        return view('cms-pages.complaints.complaints', compact('complaints'));
    }

    //
    // public function managecomplaints()
    // {
    //     //
    //     return view('cms-pages.managecomplaints.managecomplaints');
    // }

    // public function show(Complaint $complaint)
    // {
    //     return view('cms-pages.managecomplaints.managecomplaints', compact('complaint'));
    // }

    public function show(Complaint $complaint)
    {
        return view('cms-pages.managecomplaints.managecomplaints', [
            'complaint' => $complaint->load(['user', 'documents', 'statusUpdates'])
        ]);
    }

    // public function showUpdateStatusForm(Complaint $complaint)
    // {
    //     return view('cms-pages.complaints.update-status', compact('complaint'));
    // }

    public function updateStatus(Request $request, Complaint $complaint)
    {
        $validated = $request->validate([
            'status' => 'required|in:' . implode(',', Complaint::statuses()),
            'remarks' => 'nullable|string',
        ]);

        $complaint->update([
            'status' => $validated['status'],
            'admin_remarks' => $validated['remarks'],
        ]);

        ComplaintStatusUpdate::create([
            'complaint_id' => $complaint->id,
            'admin_id' => auth()->id(),
            'status' => $validated['status'],
            'remarks' => $validated['remarks'],
        ]);

        return back()->with('success', 'Status updated successfully!');
    }
}
