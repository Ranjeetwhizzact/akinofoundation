@extends('admin.layouts.app')
@section('title','Submission Details | Akino foundation')
@section('style')
<style>
    .sidebar>.nav {
        height: 80vh!important;
        overflow: scroll!important;
    }
</style>
@stop
@section('content')

<div class="container-scroller">
    @include('admin.navigation.navigation')
    <div class="container-fluid page-body-wrapper">
        @include('admin.navigation.sidebar')
        
        <div class="main-panel" style="margin-left:auto;">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-8 mx-auto grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    Submission Details 
                                    <span class="badge {{ $submission->type == 'partner' ? 'bg-info' : 'bg-primary' }} text-white text-capitalize">
                                        {{ $submission->type }}
                                    </span>
                                </h4>
                                <p class="card-description">
                                    Submitted at {{ $submission->created_at->format('d-M-Y H:i:s') }}
                                </p>

                                @if(Session::has('msg'))
                                    <div class="alert alert-success">
                                        {{ Session::get('msg') }}
                                    </div>
                                @endif

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th style="width: 30%">Full Name</th>
                                                <td>{{ $submission->full_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email Address</th>
                                                <td><a href="mailto:{{ $submission->email }}">{{ $submission->email }}</a></td>
                                            </tr>
                                            <tr>
                                                <th>Phone Number</th>
                                                <td><a href="tel:{{ $submission->phone }}">{{ $submission->phone }}</a></td>
                                            </tr>
                                            <tr>
                                                <th>Location</th>
                                                <td>{{ $submission->location }}</td>
                                            </tr>

                                            @if($submission->type == 'partner')
                                                <tr>
                                                    <th>Organization Name</th>
                                                    <td>{{ $submission->organization_name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Website</th>
                                                    <td>
                                                        @if($submission->website)
                                                            <a href="{{ $submission->website }}" target="_blank">{{ $submission->website }}</a>
                                                        @else
                                                            N/A
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Partnership Type</th>
                                                    <td class="text-capitalize">{{ $submission->partnership_type }}</td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <th>Skills / Interests</th>
                                                    <td>{{ $submission->skills_or_interests }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Availability</th>
                                                    <td class="text-capitalize">{{ $submission->availability }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Previous Experience</th>
                                                    <td>{{ $submission->previous_experience ?? 'N/A' }}</td>
                                                </tr>
                                            @endif

                                            <tr>
                                                <th>Message</th>
                                                <td style="white-space: pre-line;">{{ $submission->message }}</td>
                                            </tr>
                                            <tr>
                                                <th>Current Status</th>
                                                <td>
                                                    <span class="badge 
                                                        @if($submission->status == 'new') bg-warning text-dark
                                                        @elseif($submission->status == 'contacted') bg-info text-white
                                                        @elseif($submission->status == 'in_progress') bg-primary text-white
                                                        @elseif($submission->status == 'completed') bg-success text-white
                                                        @else bg-danger text-white @endif text-capitalize">
                                                        {{ $submission->status }}
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Status Update Form -->
                                <div class="mt-4 border-top pt-4">
                                    <h5>Update Status</h5>
                                    <form method="POST" action="{{ url('/admin/submissions/'.$submission->id.'/status') }}" class="row g-3 align-items-center">
                                        @csrf
                                        <div class="col-md-6 col-sm-8">
                                            <select name="status" class="form-select">
                                                <option value="new" {{ $submission->status == 'new' ? 'selected' : '' }}>New</option>
                                                <option value="contacted" {{ $submission->status == 'contacted' ? 'selected' : '' }}>Contacted</option>
                                                <option value="in_progress" {{ $submission->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                                <option value="completed" {{ $submission->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                                <option value="rejected" {{ $submission->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-sm-4">
                                            <button type="submit" class="btn btn-primary text-white">Save Status</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="mt-4">
                                    <a href="{{ url('/admin/submissions') }}" class="btn btn-secondary text-white text-decoration-none">Back to List</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@stop
