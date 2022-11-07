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
                        <h4 class="page-title">Edit RSS</h4>

                    </div>
                    <div class="col-sm-6">
    <div class="float-right d-none d-md-block">

            <!-- <div class="button-items">
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='{{url('visualstories')}}'">View Stories</button>
             
        </div> -->
         
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

                            @php
                            $id = $_GET['rssid'];
                            $info = DB::table('rss')
                                            ->join('category', 'category.categoryid', '=', 'rss.categoryid')
                                            ->where('rss.rssid', $id)                                          
                                            ->get(); 
                            foreach ($info as $row) {
                                   $rssid = $row->rssid;
                                   $rssname = $row->rssname;
                                   $sourceurl = $row->sourceurl;
                                    $status = $row->status;

                                }

                            @endphp

                            <div class="m-b-30">
                         <form action="{{url('edit_rss_feed')}}" enctype="multipart/form-data" method="post">
                @csrf
                 <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label>Category Name</label>
                                                    
                                                 
                                                        @php
                                                             $cat_select = DB::table('category')->where('categoryid', $row->categoryid)->where('post_cate','Yes')->get();
                                                                            @endphp
                                                                            @foreach ($cat_select as $rows)
                                                                            <input type="text" name="category" value="{{$rows->categoryid}}"  hidden>
                                                                            <input type="text" value="{{$rows->categoryname}}" class="form-control" disabled>
                                                                            @endforeach
                            
                                                        
                                                    <!-- <input type="text" class="form-control" required placeholder="Enter Source URL" name="url" value="{{$row->sourceurl}}" > -->
                                                </div>
                                                <div class="col-md-6 form-group">
                                                   <label>RSS Name</label>
                                                   <input type="hidden" name="rss_id" value="<?php echo $id;?>">
                                                   <input type="text" class="form-control" required placeholder="Enter RSS Name" name="rssname" value="{{$row->rssname}}" >
                                                </div>
                                                
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label>Source URL</label>
                                                    <input type="text" class="form-control" required placeholder="Enter Source URL" name="url" value="{{$sourceurl}}" >
                                                </div>
                                                <div class="col-md-6 form-group">
                                                     <label>Status</label>
                                                    <select class="form-control" name="status">
                                                        <option value="Active" <?php if($status=="Active") echo 'selected="selected"'; ?> >Active</option>
                                            <option value="Inactive" <?php if($status=="Inactive") echo 'selected="selected"'; ?> >Inactive</option>
                                                        <!-- <option value="Active">Active</option>
                                                        <option value="Inactive">Inactive</option> -->
                                                    </select>
                                                </div>
                                            </div>



                                                <button type="submit" class="btn btn-primary" style="float: right;">Update</button>
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
