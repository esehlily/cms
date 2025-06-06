@extends('layouts.user')

@section('title')
    New Complaints
@endsection

@section('content')
<div>
    <div class="pt-4 px-3">
        <h4 class="fw-bold">Submit New Complaint</h4>
    </div>
    <div class="guide mt-4 mx-3">
        <h5 class="pt-4 px-4 pb-3">Guidelines for submitting complaints</h5>
        <div class="border"></div>
        <p class="px-4 pt-4 mb-2 text-secondary fw-bold">Before submitting a complaint, please:</p>
        <ul class="mx-4">
            <li>Ensure your complaint is clear and specific.</li>
            <li>Provide all relevant details and supporting documents.</li>
            <li>Check if your issue can be resolved through other channels first.</li>
            <li>Select the appropriate category.</li>
        </ul>
    </div>
    <div class="guide mt-4 mx-3 mb-5">
        <h5 class="pt-4 px-4 pb-3">Complaint Details</h5>
        <div class="border"></div>
        <form action="">
            <div class="mb-2 px-4 pt-4">
                <label for="subject" class="form-label fw-bold">Subject</label>
                <input type="subject" class="form-control subject" id="subject" placeholder="Brief description of your complaint">
            </div>
            <div class="px-4 pt-3">
                <label for="category" class="form-label fw-bold">Category</label>
                <select class="form-select subject" aria-label="Default select example">
                    <option selected>Select Category</option>
                    <option value="1">Academic</option>
                    <option value="2">Administrative</option>
                    <option value="3">Facility</option>
                    <option value="4">Harassment</option>
                    <option value="5">Financial</option>
                    <option value="6">Other</option>
                </select>
            </div>
            <div class="mb-3 px-4 pt-4">
                <label for="exampleFormControlTextarea1" class="form-label fw-bold">Description</label>
                <textarea class="form-control subject" id="exampleFormControlTextarea1" rows="3" placeholder="Please provide detailed information about your complaint"></textarea>
            </div>
            <div class="mb-3 px-4 pt-2">
                <label for="formFile" class="form-label fw-bold">Supporting Documents {{ '(Optional)' }}</label>
                <input class="form-control" type="file" id="formFile">
                <div id="emailHelp" class="form-text pt-2">Upload any relevant documents or images</div>
            </div>
            <div class="px-4 pt-2 pb-3">
                <button class="submitcomplaint pt-2 pb-2">Submit Complaint</button>
            </div>
        </form>
    </div>
</div>
@endsection
