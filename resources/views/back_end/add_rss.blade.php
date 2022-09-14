@if(session()->has('userid'))
   
@else 
 <script>window.location.href="/admin";</script>
@endif
@extends('layouts.header') @section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Add RSS</h4>

                    </div>
                    <div class="col-sm-6">
    <div class="float-right d-none d-md-block">

            <div class="button-items">
                    <!-- <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='{{url('rss-feed')}}'">View RSS</button> -->
             
        </div>
         
     </div>
     
</div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @if (\Session::has('success'))
                            <div class="alert alert-success">

                                {!! \Session::get('success') !!}

                            </div>
                            @endif

                            <div class="m-b-30">
                         <form action="{{url('add-rss-feed')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                       <label>Category Name</label>
                        <select class="form-control" name="category">
                            @php
                                 $cat_select = DB::table('category')->where('post_cate','Yes')->get();
                                                @endphp
                                                @foreach ($cat_select as $row)
                                                <option value="{{$row->categoryid}}">{{$row->categoryname}}</option>
                                                @endforeach
                            <!-- <option value="1">Entertainment</option>
                            <option value="2">Fashion</option>
                            <option value="3">Celebrity Gossip</option>
                            <option value="4">Hot Content</option> -->
                        </select>
                        <!-- <input type="text" class="form-control" required placeholder="Enter Title" name="category" value=""/> -->
                    </div>
                    <div class="col-md-6 form-group">
                       <label>RSS Name</label>
                       <input type="text" class="form-control" required placeholder="Enter RSS Name" name="rssname" value="" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Source URL</label>
                        <input type="text" class="form-control" required placeholder="Enter Source URL" name="url" value="" >
                    </div>
                    <div class="col-md-6 form-group">
                         <label>Status</label>
                        <select class="form-control" name="status">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="float: right;">Save</button>
            </form>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
</div>
<script type='text/javascript' src='assets/front_end/js/jquery.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // $("#hide").click(function(){
  //   $("p").hide();
  // });
  $("#save").click(function(){
    $("#stories").show();
    
  });
});
</script>
@endsection
