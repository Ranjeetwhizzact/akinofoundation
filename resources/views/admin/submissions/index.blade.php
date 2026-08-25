@extends('admin.layouts.app')
@section('title','Submissions | Akino foundation')
@section('style')
<style>
    td{
        max-width: 300px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
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
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Partner & Volunteer Submissions</h4>
                                
                                <!-- Filters -->
                                <form method="GET" action="{{ url('/admin/submissions') }}" class="row g-3 mb-4">
                                    <div class="col-md-3">
                                        <select name="type" class="form-select" onchange="this.form.submit()">
                                            <option value="">All Types</option>
                                            <option value="partner" {{ request('type') == 'partner' ? 'selected' : '' }}>Partner</option>
                                            <option value="volunteer" {{ request('type') == 'volunteer' ? 'selected' : '' }}>Volunteer</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="status" class="form-select" onchange="this.form.submit()">
                                            <option value="">All Statuses</option>
                                            <option value="new" {{ request('status') == 'new' ? 'selected' : '' }}>New</option>
                                            <option value="contacted" {{ request('status') == 'contacted' ? 'selected' : '' }}>Contacted</option>
                                            <option value="in_progress" {{ request('status') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                            <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                            <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{ url('/admin/submissions') }}" class="btn btn-secondary btn-sm">Reset</a>
                                    </div>
                                </form>

                                @if(Session::has('msg'))
                                    <div class="alert alert-success">
                                        {{ Session::get('msg') }}
                                    </div>
                                @endif

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Type</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Organization</th>
                                                <th>Status</th>
                                                <th>Submitted At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($submissions as $index => $item)
                                                <tr>
                                                    <td>{{ $submissions->firstItem() + $index }}</td>
                                                    <td>
                                                        <span class="badge {{ $item->type == 'partner' ? 'bg-info' : 'bg-primary' }} text-white text-capitalize">
                                                            {{ $item->type }}
                                                        </span>
                                                    </td>
                                                    <td>{{ $item->full_name }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>{{ $item->organization_name ?? 'N/A' }}</td>
                                                    <td>
                                                        <span class="badge 
                                                            @if($item->status == 'new') bg-warning text-dark
                                                            @elseif($item->status == 'contacted') bg-info text-white
                                                            @elseif($item->status == 'in_progress') bg-primary text-white
                                                            @elseif($item->status == 'completed') bg-success text-white
                                                            @else bg-danger text-white @endif">
                                                            {{ $item->status }}
                                                        </span>
                                                    </td>
                                                    <td>{{ $item->created_at->format('d-M-Y H:i') }}</td>
                                                    <td>
                                                        <a href="{{ url('/admin/submissions/'.$item->id) }}" class="btn btn-success btn-sm text-decoration-none">
                                                            <i class="fa fa-eye"></i> View
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="9" class="text-center">No submissions found.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    
                                    <div class="mt-4">
                                        {{ $submissions->appends(request()->all())->links('vendor.pagination.bootstrap-4') }}
                                    </div>
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
