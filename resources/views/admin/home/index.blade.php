@extends('admin.layouts.app')
@section('title','Language | Easy Pandit Online')
@section('style')
<style>
    td{
        max-width: 300px;
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 2; 
    -webkit-box-orient: vertical;
    }
    .sidebar .nav{
        overflow:scroll;
    }
 
    td{
max-width: 300px;
overflow: hidden;
}
.sidebar>.nav {
height: 80vh!important;
overflow: scroll!important;
}
.sidebar .nav::-webkit-scrollbar {
width: 12px;
}

.sidebar .nav::-webkit-scrollbar-track {
background: transparent; 
}

.sidebar .nav::-webkit-scrollbar-thumb {
background: transparent;
}
</style>
@stop
@section('content')


<div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    @include('admin.navigation.navigation')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

        @include('admin.navigation.sidebar')
        <!-- partial -->


        <!-- partial -->
        <div class="main-panel" style="margin-left:auto;">
            <div class="content-wrapper">
                <div class="row">
                    
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Home Banner
                                    <a href="{{url('/admin/home/create')}}"><button class="btn btn-info btn-sm">Create New</button></a>
                                </h4>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> S.R.No. </th>
                                                <th>Name </th>
                                                <th> Banner </th>
                                                <th> Phone</th>
                                                <th>link</th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($home)
                                            @php
                                            if(isset($_GET['page'])){
                                            $x = ($_GET['page']-1)*15;
                                            }else{
                                            $x = 0;
                                            }
                                            @endphp
                                            @foreach ($home as $item)
                                            @php
                                            $x = $x+1;
                                            @endphp
                                            <tr>
                                                <td class="py-1">
                                                    {{$x}}
                                                </td>
                                                <td class="py-1">
                                                    {{$item->name}}
                                                </td>
                                                <td>
                                                    <img src="{{$item->main_img}}" alt="{{$item->main_img}}" srcset="">
                                                </td>
                                                <td>
                                                    <img src="{{$item->phone_img}}" alt="{{$item->phone_img}}" srcset="">
                                                </td>
                                                <td>
                                                    {{$item->link}}
                                                </td>
                                               
                                                <td class="d-flex">
                                                    <a href="{{url('/admin/home/edit/'.encrypt($item->id))}}">
                                                        <button type="button" class="btn btn-info btn-sm">Edit</button>
                                                    </a>
                                                    <form action="{{ url('admin/homedestroy', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif

                                        </tbody>
                                        {{$home->links('vendor.pagination.bootstrap-4')}}
                                    </table>
                           
                                </div>
                                
                            </div>
                        </div>
                    </div>

                  
                    <div class="col-lg-5 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Modal Form</h4>
                                @if ( Session::get('status') == "failed")
                                    <span id="password" class="text-danger f_size-1 font-600 lh-1 error">{{ Session::get('msg') }}</span>
                                @endif
                                @if ( Session::get('status') == "success")
                                    <span id="password" class="text-success f_size-1 font-600 lh-1 error">{{ Session::get('msg') }}</span>
                                @endif
                                <div class="table-responsive">
                                    <form class="forms-sample" action="{{url('/admin/home/offerstore')}}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
                                        @csrf
                                        <input type="hidden" name="id" value="{{isset($offer->id)?$offer->id:''}}">
                                        
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Modal Banner</label>
                                            <input type="file" class="form-control" name="banner" id="exampleInputUsername1"
                                                placeholder="Images">
                                        </div>
                                     
                              
                                       
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Modal table
                                  
                                </h4>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> S.R.No. </th>
                                                <th>Banner</th>
                                               
                                                <th> is Active</th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($offer)
                                            @php
                                            if(isset($_GET['page'])){
                                            $x = ($_GET['page']-1)*15;
                                            }else{
                                            $x = 0;
                                            }
                                            @endphp
                                            @foreach ($offer as $item)
                                            @php
                                            $x = $x+1;
                                            @endphp
                                            <tr>
                                                <td class="py-1">
                                                    {{$x}}
                                                </td>
                                                <td class="py-1">
                                                    <img src="{{$item->banner}}" alt="{{$item->banner}}" srcset="">
                                                </td>
                                                
                                                <td>
                                                    {{$item->is_active}}
                                                </td>
                                               
                                                <td class="d-flex">
                                                    <a href="{{url('/admin/home/edit/'.encrypt($item->id))}}">
                                                        <button type="button" class="btn btn-info btn-sm">Edit</button>
                                                    </a>
                                                    <form action="{{ url('admin/modaldestroy', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif

                                        </tbody>
                                        {{$home->links('vendor.pagination.bootstrap-4')}}
                                    </table>
                           
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Socal media form</h4>
                                @if ( Session::get('status') == "failed")
                                    <span id="password" class="text-danger f_size-1 font-600 lh-1 error">{{ Session::get('msg') }}</span>
                                @endif
                                @if ( Session::get('status') == "success")
                                    <span id="password" class="text-success f_size-1 font-600 lh-1 error">{{ Session::get('msg') }}</span>
                                @endif
                                <div class="table-responsive">
                                    <form class="forms-sample" action="{{url('/admin/home/storesocialmedia')}}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
                                        @csrf
                                        <input type="hidden" name="id" value="{{isset($socialmedia->id)?$socialmedia->id:''}}">
                                        
                                        <div class="form-group">
                                            <label for="is_active">Socialmedia Type</label>
                                            <select class="form-control" name="socialmediatype" id="is_active">
                                                <option value="facebook" {{ isset($socialmedia->facebook) && $socialmedia->facebook == "facebook" ? 'selected' : '' }}>Facebook</option>
                                                <option value="twiter" {{ isset($socialmedia->twiter) && $socialmedia->twiter == "twiter" ? 'selected' : '' }}>Twiter</option>
                                                <option value="instagram" {{ isset($socialmedia->instagram) && $socialmedia->instagram == "instagram" ? 'selected' : '' }}>Instagram</option>
                                            </select>
                                        </div>
                                     
                              
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Embed Code</label>
                                            <textarea rows="5" class="form-control" name="embed_code" style="height: 100px"
                                                placeholder="Description">{{isset($socialmedia->embed_code)?$socialmedia->embed_code:''}}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Social media 
                                 
                                </h4>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> S.R.No. </th>
                                                <th>Type</th>
                                                <th> embed_code </th>
                                                <th> is Active</th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($socialmedia)
                                            @php
                                            if(isset($_GET['page'])){
                                            $x = ($_GET['page']-1)*15;
                                            }else{
                                            $x = 0;
                                            }
                                            @endphp
                                            @foreach ($socialmedia as $item)
                                            @php
                                            $x = $x+1;
                                            @endphp
                                            <tr>
                                                <td class="py-1">
                                                    {{$x}}
                                                </td>
                                                <td class="py-1">
                                                    {{$item->socialmediatype}}
                                                </td>
                                                
                                             
                                                <td>
                                                    {{$item->embed_code}}
                                                </td>
                                                <td>
                                                    {{$item->is_active}}
                                                </td>
                                               
                                                <td class="d-flex">
                                                    <a href="{{url('/admin/home/edit/'.encrypt($item->id))}}">
                                                        <button type="button" class="btn btn-info btn-sm">Edit</button>
                                                    </a>
                                                    <form action="{{ url('admin/mediadestroy', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif

                                        </tbody>
                                        {{$home->links('vendor.pagination.bootstrap-4')}}
                                    </table>
                           
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->





            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->



    @section('script')

    @stop
    @stop