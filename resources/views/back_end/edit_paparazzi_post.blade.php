@if(session()->has('userid'))
   
@else 
 <script>window.location.href="/admin";</script>
@endif
@php
$id = $_GET['postid'];
$info = DB::table('paparazzi_post')->where('postid', $id)->get();
foreach ($info as $row) {
        $postid = $row->postid;
        $posttitle = $row->posttitle;
        $videopath = $row->videopath;
        $status = $row->status;
        $description = $row->description;

    }
@endphp
<?php $roleid = Session::get('roleid'); ?>
<?php $rss_access = Session::get('rss_access'); 
$access_rss = explode (",", $rss_access); 
?>

@extends('layouts.header') @section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Edit Paparazzi Posts</h4>

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
                         <form action="{{url('edit_paparazzi_post')}}" enctype="multipart/form-data" method="post">
                @csrf
                 <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label>Post Title</label>
                                                        <input type="text" class="form-control" required placeholder="" name="posttitle" value="{{$row->posttitle}}"/>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label>Video Link <span style="color:red;font-size:9px;"> (Please Upload Embed Video Link. For Example : https://www.youtube.com/embed/8FAUEv_E_xQ )</span></label>
                                                        <input type="text" class="form-control" required placeholder="Enter Video Title" name="video_link" value="{{$row->videopath}}"/>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="postid" value="<?php echo $row->postid; ?>">
                                                <div class="row">
                                                   
                                                    <div class="col-md-6 form-group">
                                                        <label>Status</label>
                                                        <input type="hidden" name="checkstatus" value="<?php echo $row->status; ?>">
                                                        <select class="form-control" name="status">
                                                             <option value="Pending" <?php if($row->status=="Pending") echo 'selected="selected"'; ?> >Pending</option>
                                            <option value="Publish" <?php if($row->status=="Publish") echo 'selected="selected"'; ?> >Publish</option>
                                                        </select>

                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label>Post Description</label><br/>
                                                         <textarea class="summernote" name="description">{{$row->description}}</textarea>
                                                    </div>
                                                    
                                                </div>


                                                
                                                
                                                <div class="row">                                                  

                                                    
                                                   
                                                </div>
                                                <div style="float: right;">
                                                    <button type="button" class="btn btn-warning" onclick="location.href='posts'">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Update</button>
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

@endsection
