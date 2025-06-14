<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ComplaintController extends Controller
{
    //
    public function newcomplaints()
    {
        //
        return view('cms-pages.newcomplaints.newcomplaints');
    }

    //
    // public function complaints()
    // {
    //     //
    //     return view('cms-pages.complaints.complaints');
    // }

    //
    // public function showcomplaints()
    // {
    //     //
    //     return view('cms-pages.showcomplaints.showcomplaints');
    // }




    public function showcomplaints(Complaint $complaint)
    {
        $this->authorize('view', $complaint);
        return view('cms-pages.showcomplaints.showcomplaints', compact('complaint'));
    }

    // public function index()
    // {
    //     $complaints = auth()->user()->complaints()->latest()->get();
    //     return view('complaints.index', compact('complaints'));
    // }

    public function mycomplaints()
    {
        $user = auth()->user();
        $complaints = Complaint::where('user_id', $user->id)->latest()->get();
        return view('cms-pages.mycomplaints.mycomplaints', compact('complaints'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required|string|max:255',
            'category' => 'required|string',
            'description' => 'required|string',
            'documents.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048',
        ]);

        $complaint = Complaint::create([
            'user_id' => auth()->id(),
            'subject' => $validated['subject'],
            'category' => $validated['category'],
            'description' => $validated['description'],
            'status' => Complaint::STATUS_PENDING,
        ]);

        if ($request->hasFile('documents')) {
            foreach ($request->file('documents') as $file) {
                $path = $file->store('complaint-documents');

                $complaint->documents()->create([
                    'file_path' => $path,
                    'original_name' => $file->getClientOriginalName(),
                ]);
            }
        }

        return redirect()->route('mycomplaints')->with([
            'success' => 'Complaint submitted successfully!',
            'complaint_id' => $complaint->id
        ]);
    }


}
