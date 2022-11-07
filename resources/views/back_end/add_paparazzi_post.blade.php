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
                        <h4 class="page-title">Add Paparazzi Posts</h4>

                    </div>
                    <div class="col-sm-6">
    <div class="float-right d-none d-md-block">

            <div class="button-items">
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='{{url('paparazzi')}}'">View Paparazzi</button>
             
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
                         <form action="{{url('add_new_paparazzi_post')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    
                    <div class="col-md-6 form-group">
                        <label>Post Title</label>
                        <input type="text" class="form-control" required placeholder="Enter Title" name="title" value=""/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Video Link <span style="color:red;font-size:9px;"> (Please Upload Embed Video Link. For Example : https://www.youtube.com/embed/8FAUEv_E_xQ )</span></label>
                        <input type="text" class="form-control" required placeholder="Enter Video Title" name="video_link" value=""/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option value="Pending">Pending</option>
                            <option value="Publish">Publish</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Post Description</label><br/>
                        <textarea class="summernote" name="description"></textarea>
                       <!--  <textarea id="w3review" name="description" rows="4" cols="65"></textarea> -->
                    </div>
                </div>
                
                <div style="float:right;">
                    <button type="button" class="btn btn-warning" onclick="location.href='posts'">Cancel</button>                                    
                    <button type="submit" class="btn btn-primary">Update</button>  
                </div>
                                                    
                <!-- <button type="submit" class="btn btn-primary" style="float: right;">Save</button> -->
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
  $("#with_noti").click(function(){
      console.log("Working");
      $('#notification_input').val('1');
  })
  $("#without_noti").click(function(){
      $('#notification_input').val('0');
  })
  
  $("#schedule_date").change(function(){
      if($("#schedule_date").val() == "Yes")
      {
        $("#schedule_input").show();
      }
      else
      {
        $("#schedule_input").hide();
      }

  })
});

</script>
@endsection
