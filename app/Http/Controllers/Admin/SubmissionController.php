<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PartnerVolunteerSubmission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index(Request $request)
    {
        $query = PartnerVolunteerSubmission::query();

        if ($request->has('type') && in_array($request->type, ['partner', 'volunteer'])) {
            $query->where('type', $request->type);
        }

        if ($request->has('status') && in_array($request->status, ['new', 'contacted', 'in_progress', 'completed', 'rejected'])) {
            $query->where('status', $request->status);
        }

        $submissions = $query->orderBy('created_at', 'desc')->paginate(15);

        return view('admin.submissions.index', compact('submissions'));
    }

    public function show($id)
    {
        $submission = PartnerVolunteerSubmission::findOrFail($id);

        return view('admin.submissions.show', compact('submission'));
    }

    public function updateStatus(Request $request, $id)
    {
        $submission = PartnerVolunteerSubmission::findOrFail($id);

        $request->validate([
            'status' => 'required|in:new,contacted,in_progress,completed,rejected',
        ]);

        $submission->update([
            'status' => $request->status,
        ]);

        return back()->with('msg', 'Submission status updated successfully.');
    }
}
