@if(session()->has('userid'))
   
@else 
 <script>window.location.href="/admin";</script>
@endif
@php
$id = $_GET['postid'];
$info = DB::table('post')
                ->join('category', 'category.categoryid', '=', 'post.categoryid')
                ->where('post.postid', $id)                                          
                ->get();
foreach ($info as $row) {
        $postid = $row->postid;
        $posttitle = $row->posttitle;
        $rssid = $row->rssid;
        $status = $row->status;
        $description = $row->description;
        $trending_now = $row->trending_now;
        $hot_content = $row->hot_content;

    }
@endphp
<?php $roleid = Session::get('roleid'); ?>
<?php $rss_access = Session::get('rss_access'); 
$access_rss = explode (",", $rss_access); 
$check_post = DB::table('post')->where('postid',$id)->whereIn('rssid',$access_rss)->count();
if($check_post == '1' || $roleid =='0')
{

}
else
{
    ?> <script>window.location.href="/admin";</script> <?php
}

?>

@extends('layouts.header') @section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Edit Posts</h4>

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

                            

                            <div class="m-b-30">
                         <form action="{{url('edit_post')}}" enctype="multipart/form-data" method="post">
                @csrf
                 <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <input type="hidden" name="post_id" value="<?php echo $id;?>">
                                                        <label>Category Name</label>
                                                        <select class="form-control" name="category">
                                                        @php
                                                             $cat_select = DB::table('category')->where('categoryid', $row->categoryid)->where('post_cate','Yes')->get();
                                                                            @endphp
                                                                            @foreach ($cat_select as $rows)
                                                                            <option value="{{$rows->categoryid}}" selected>{{$rows->categoryname}}</option>
                                                                            @endforeach
                                                                            @php
                                                             $cat_select = DB::table('category')->where('categoryid','<>',$row->categoryid)->where('post_cate','Yes')->get();
                                                                            @endphp
                                                                            @foreach ($cat_select as $rows)
                                                                            <option value="{{$rows->categoryid}}">{{$rows->categoryname}}</option>
                                                                            @endforeach
                                                    </select>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label>Post Title</label>
                                                        <input type="text" class="form-control" required placeholder="" name="posttitle" value="{{$row->posttitle}}"/>
                                                    </div>
                                                </div>
                                                @php
                                                 $cat_name = DB::table('rss')->where('rssid', $row->rssid)->get();
                                                                           
                                                                            
                                                                          
                                                @endphp
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label>RSS Name</label>
                                                        <input type="hidden" class="form-control" required placeholder="" name="rss_name" value="{{$row->rssid}}" readonly/>
                                                        @foreach ($cat_name as $cat_name)
                                                        <input type="text" class="form-control" required placeholder="" name="" value="{{$cat_name->rssname}}" readonly/>
                                                        @endforeach
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label>Status</label>
                                                        <input type="hidden" name="checkstatus" value="<?php echo $row->status?>">
                                                        <select class="form-control" name="status">
                                                             <option value="Pending" <?php if($row->status=="Pending") echo 'selected="selected"'; ?> >Pending</option>
                                            <option value="Publish" <?php if($row->status=="Publish") echo 'selected="selected"'; ?> >Publish</option>
                                                        </select>

                                                    </div>
                                                    
                                                </div>

                                                <div class="row">

<div class="col-md-6 form-group">
    <label>UploadedBy</label>
    <input type="text" class="form-control" required placeholder="Uploaded_by" name="uploaded_by" value=""/>
</div>
</div>
                                                <div class="row">
                                                    
                                                    <div class="col-md-6 form-group">
                                                        <label>Select Options</label><br/>
                                                       <input type="checkbox" id="trending" <?php if($row->trending_now === 'Trending Now') echo 'checked="checked"';?> name="trending" value="Trending Now">
                                                        <label for=""> Trending Now</label>&nbsp;&nbsp;
                                                        <!-- <input type="checkbox"  <?php if($row->hot_content === 'Hot Content') echo 'checked="checked"';?> id="hotcontent" name="hotcontent" value="Hot Content">
                                                        <label for=""> Hot Content</label> -->
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <label> Select Image <span style="color:red;font-size:10px;"> (Please Upload Above 500 X 1300 Pixels For Better Quality)</label>
                                                         <input type="file" onchange="ValidateSize(this)" class="form-control" name="images" accept=".jpg,.png,.gif,.jpeg"> 
                                                      
                                                    </div>
                                                    <div class="col-md-2 form-group"> 
                                                        <a href="{{$row->imagepath}}" target="_blank"><img src="{{$row->imagepath}}" alt="" srcset="" width="100px" height="100px" ></a>
                                                    </div>

                                                </div>
                                                <div class="row">
                    
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

                                                    
                                                    <div class="col-md-12 form-group">
                                                        <label>Post Description</label><br/>
                                                         <textarea class="summernote" name="description">{{$row->description}}</textarea>
                                                    </div>
                                                </div>
                                                <input type='hidden' name='notification' id="notification_input">
                                                <div style="float: right;">
                                                    <button type="button" class="btn btn-warning" onclick="location.href='posts'">Cancel</button>
                                                    <?php if($row->status=="Pending") { ?>
                                                        <button type="submit" class="btn btn-primary" id="with_noti">Publish With Notification</button>
                                                        <button type="submit" class="btn btn-primary" id="without_noti">Publish Without Notification</button>    
                                                    <?php } ?>
                                                    <?php if($row->status=="Publish") { ?>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                    <?php } ?>
                                                </div>
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
