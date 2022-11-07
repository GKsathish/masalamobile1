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
                        <h4 class="page-title">Edit Story</h4>

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
                            
                             $id = $_GET['transid'];

                            $info = DB::table('v_storiestrans')
                                            ->join('v_stories', 'v_stories.storyid', '=', 'v_storiestrans.storyid')
                                            ->where('v_storiestrans.transid', $id)                                          
                                            ->get();
                            foreach ($info as $row) {
                                   $transid = $row->transid;
                                }

                            @endphp

                            <div class="m-b-30">
                         <form action="{{url('edit_storynew')}}" enctype="multipart/form-data" method="post">
                @csrf
                 <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <input type="hidden" name="transid" value="<?php echo $transid;?>">
                                                        <label>Select Story</label>

                        <select class="form-control" name="stitle">
                        @php
                                 $story_select = DB::table('v_stories')->get();
                                                @endphp
                                                @foreach ($story_select as $rows)
                                                <option value="{{$rows->storyid}}">{{$rows->storytitle}}</option>
                                                @endforeach
                        </select>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                         <label>Title</label>
                                                        <input type="text" class="form-control" required placeholder="Enter Title" name="ttitle" value="{{$row->t_title}}"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label>Story Description</label><br/>
                                                         <textarea class="summernote" name="tdescription">{{$row->t_description}}</textarea>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <label> Select Image (Please Upload Above 500 X 1300 Pixels For Better Quality)</label>
                                                         <input type="file" onchange="ValidateSize(this)" class="form-control" name="images" accept=".jpg,.png,.gif,.jpeg"> 
                                                      
                                                    </div>
                                                    <div class="col-md-2 form-group"> 
                                                        <a href="{{$row->t_imagelink}}" target="_blank"><img src="{{$row->t_imagelink}}" alt="" srcset="" width="100px" height="100px" ></a>
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
