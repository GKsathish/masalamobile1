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
                        <h4 class="page-title">Add Posts</h4>

                    </div>
                    <div class="col-sm-6">
    <div class="float-right d-none d-md-block">

            <div class="button-items">
                <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='{{url('posts')}}'">View Posts</button>
             
        </div>
         
     </div>
     
</div>
<?php $email = Session::get('email'); ?>
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
                         <form action="{{url('new_post')}}" enctype="multipart/form-data" method="post">
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
                        <label>Post Title</label>
                        <input type="text" class="form-control" required placeholder="Enter Title" name="title" value=""/>
                    </div>
                </div>

                <div class="row">
                    
      
                    
                     <div class="col-md-6 form-group">
                         <label>RSS Name</label>
                        <select class="form-control" name="rss">
                            <option value="0">Admin</option>
                            <!--<option value="2">Hindustan</option>-->
                            <!--<option value="3">Times of India</option>-->
                            <!--<option value="4">Hindu</option>-->
                        </select>
                    </div>
<!--                     
                     <div class="col-md-6 form-group">
                         <label>User</label>
                        <select class="form-control" name="email" required>
                           
                            
                        </select>
                    </div> -->

                    <div class="col-md-6 form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option value="Pending">Pending</option>
                            <option value="Publish">Publish</option>
                        </select>
                    </div>
                    
                    
                </div>

                <div class="row">
                    
                    <div class="col-md-6 form-group">
                        <label>Select Options</label><br/>
                       <input type="checkbox" id="trending" name="trending" value="Trending Now">
                        <label for=""> Trending Now</label>&nbsp;&nbsp;
                        <input type="checkbox" id="hotcontent" name="hotcontent" value="Hot Content">
                        <label for=""> Hot Content</label>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Select Images <span style="color:red;font-size:10px;"> (Please Upload Above 500 X 1300 Pixels For Better Quality)</label>
                        <input required type="file" onchange="ValidateSize(this)" class="form-control" name="images" accept=".jpg,.png,.gif,.jpeg"> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>HashTag</label>
                        <input type="text" class="form-control"  placeholder="Enter " name="hashtag" />
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Schedule Post</label>

                        <select class="form-control" name="schedule" id="schedule_date">
                            <option value="">Select</option>
                            <option value="Yes"> Yes </option>
                            <option value="No" > No </option>
                        </select>

                        <input type="datetime-local" class="form-control mt-4" id="schedule_input" name="schedule_input">
                    </div>
                    
                  
                    
                </div>
                 <div class="row">

                    <div class="col-md-6 form-group">
                        <label>UploadedBy</label>
                        <input type="text" class="form-control" required placeholder="Uploaded_by" name="uploaded_by" value=""/>
                    </div>

                    
                    <div class="col-md-6 form-group">
                  
                        <input   type="checkbox"  name="terms" class="term" toggle="Checked"  /><br>
                        <label>Email checkbox</label>
                    </div>
                </div>


               <div class="row">
               <div class="col-md-6 form-group">
                        <label>Post Description</label><br/>
                        <textarea  id="" class="summernote" name="description"></textarea>
                       <!--  <textarea id="w3review" name="description" rows="4" cols="65"></textarea> -->

                    </div> 
                    <div class="col-md-6 form group">
                                      <label>Language</label>
                                 
                                        <select class="form-control" name="language" required>
                                        <option value="English">English</option>
                                        <option value="Telugu">Telugu</option>
                                      
                                        <option value="Hindi">Hindi</option>
                                      
                                          
                                        </select>
                                     

                                   </div>
               </div>


                <input type='hidden' name='notification' id="notification_input">
                <div style="float:right;">
                <button type="button" class="btn btn-warning" onclick="location.href='posts'">Cancel</button>                                    
                <button type="submit" class="btn btn-primary" id="with_noti">Publish With Notification</button>
                <button type="submit" class="btn btn-primary" id="without_noti">Publish Without Notification</button>    
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

















