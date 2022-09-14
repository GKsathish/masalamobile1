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
                        <h4 class="page-title">Edit Visual Story</h4>

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

                            $id = $_GET['storyid'];

                            $info = DB::table('v_stories')
                                            ->where('storyid', $id)                                         
                                            ->get(); 
                            foreach ($info as $row) {
                                   $storyid = $row->storyid;

                                }

                            @endphp

                            <div class="m-b-30">
                         <form action="{{url('edit_vstory')}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="row">
                               <div class="col-md-6 form-group">
                                                    <label>Category Name <span style="color:red;">*</span></label>
                                                    <select class="form-control" name="category">
                                                    @php
                                                         $cat_select = DB::table('category')->where('v_cate','Yes')->get();
                                                                        @endphp
                                                                        @foreach ($cat_select as $rows)
                                                                        <option value="{{$rows->categoryid}}">{{$rows->categoryname}}</option>
                                                                        @endforeach
                                                </select>

                                                </div>

                                                <div class="col-md-6 form-group">
                                                   <label>Story Title <span style="color:red;">*</span></label>
                                                   <input type="hidden" name="story_id" value="{{$storyid}}">
                                                   <input type="text" class="form-control" required placeholder="Enter RSS Name" name="story_title" value="{{$row->storytitle}}" >
                                                </div>
                                            
                                                
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label>Description</label>
                                                      <textarea id="" class="form-control"  name="storydescription" rows="4" cols="50">{{$row->description}}</textarea> 
                                                    <!--<textarea class="summernote" name="storydescription">{{$row->description}}</textarea>-->
                                                   <!--  <input type="text" class="form-control" required placeholder="Enter Source URL" name="url" value="{{$row->description}}" > -->
                                                </div>
                                                <div class="col-md-4 form-group">
                                                        <label> Select Image <span style="color:red;">*</span> <span style="color:red;font-size:10px;"> (Please Upload Above 500 X 1300 Pixels For Better Quality)</label>
                                                         <input type="file"  class="form-control" name="images" accept=".jpg,.png,.gif,.jpeg"> 
                                                      
                                                    </div>
                                                    <div class="col-md-2 form-group"> 
                                                        <a href="{{$row->imagelink}}" target="_blank"><img src="{{$row->imagelink}}" alt="" srcset="" width="100px" height="100px" ></a>
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
