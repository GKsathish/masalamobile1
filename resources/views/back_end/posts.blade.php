@if(session()->has('userid'))
   
@else 
 <script>window.location.href="/admin";</script>
@endif
<?php $roleid = Session::get('roleid'); ?>
<?php $rss_access = Session::get('rss_access'); ?>
<?php 
    $post_permit = '';
    $post_permit_edit = '';
    $post_permit_delete = '';
    $post_permit_add = '';
    $post_access_details = DB::table('permissions')->where('role_id', $roleid)->where('module_id','2')->get();
    
    foreach($post_access_details as $permit)
    {
        $post_permit = $permit->access;
        $post_permit_edit = $permit->edit;
        $post_permit_delete = $permit->delete;
        $post_permit_add = $permit->add;
    }

?>
@if($post_permit == '1' || $roleid == '0')
   
   @else 
    <script>window.location.href="/admin";</script>
   @endif
@extends('layouts.header') 
@section('content')


<div class="content-page">
    <div class="content">
        <div class="container-fluid">
              <div class="page-title-box pt-2">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Posts</h4>

                    </div>
                    @if($post_permit_add == '1' || $roleid == '0')
                    <div class="col-sm-6 text-right">
                        <button class="btn btn-info" onclick="window.location.href='{{url('add_posts')}}'"  type="button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
                    </div>
                    @endif

                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body ">

                            @if (\Session::has('success'))
                            <div class="alert alert-success">

                                {!! \Session::get('success') !!}

                            </div>
                            @endif

                            @if (\Session::has('success2'))
                            <div class="alert alert-danger">

                                {!! \Session::get('success2') !!}

                            </div>
                            @endif
                            <div class="form-group text-center">
                                <form action="posts" method="GET">
                                
                                    <div class="row border p-3" style="background-color:lightgrey;">
                                    <div class="col-md-1 mt-2">
                                    <label class="m-auto text-dark" >Filters :</label>
                                </div>
                                <div class="col-md-3">
                               
                                @php
                                $filter_cate = DB::table('category')->where('post_cate','Yes')->get();
                                @endphp
                                <select class="form-control" id="categoryname" name="categoryname">
                                    <option value="">Select Category</option>
                                    @foreach ($filter_cate as $filter_cate)
                                    <option value="{{$filter_cate->categoryid}}" >{{$filter_cate->categoryname}}</option>
                                    @endforeach
                                </select> 
                                </div>
                                <div class="col-md-3">
                                
                                @php
                                $filter_cate = DB::table('rss')->get();
                                @endphp
                                <select class="form-control" id="rssname" name="rssname">
                                    <option value="rssname">Select RSS</option>
                                    @foreach ($filter_cate as $filter_cate)
                                     @php
                                    $cate_name = DB::table('category')->where('categoryid', $filter_cate->categoryid)->get();
                                    @endphp
                                   @foreach($cate_name as $cate_names)
                                    <option value="{{$filter_cate->rssid}}" >{{$filter_cate->rssname}} - {{$cate_names->categoryname}}</option>
                                    @endforeach
                                   
                                    @endforeach
                                </select> 
                                </div>
                                <div class="col-md-3">
                               
                               
                                <select class="form-control" id="status" name="status">
                               
                                    <option value="">Select Status</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Publish">Publish</option>
                                </select> 
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-info" type="submit">Submit</button>
                                </div>
                                
                                </div>
                                
                                </form>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button class="btn btn-primary" id="publish"><i class="fas fa-globe-americas"></i> Publish</button>
                                <!-- <button class="btn btn-info"><i class="fa fa-pen"></i> Pending</button>
                                <button class="btn btn-warning"><i class="fa fa-times"></i> Delete</button> -->
                            </div>
                            <div class="postsrow ">
                            <table id="datatable"  class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr style="text-align:center">
                                        <th></th>
                                        <th>S.No</th>
                                        <th>Category Name</th>
                                        <th>Post Title</th>
                                        <th>RSS Name</th>
                                        <th>Status</th>
                                        <th>Received on</th>
                                        <th>Published on</th>
                                        <th>Edited on</th>
                                        <th>View</th>
                                        <th>Action</th>
                                        <th>uploaded_by</th>
                                        <th>hashtag</th>
                                        <th>language</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php if(isset($_GET['categoryname']) == "") { ?>
                                    @php 

                                    $info = DB::table('post')
                                            ->Orderby('postid', 'desc')->take(3000)                                             
                                            ->get();
                                    foreach ($info as $val) { 
                                        $catid = $val->postid;
                                         $updated_at = $val->updated_at; 
                                     $status = $val->status; 
                                 } 

                                    @endphp
                                    <?php } else{
                                        $access_rss = explode (",", $rss_access);
                                         $cate_array = [];
                                        $info = DB::table('post')->Orderby('postid', 'desc')->whereIn('rssid',$access_rss);
                                       foreach($access_rss as $rss => $value)
                                       { 
                                        
                                        $get_rss_cat = DB::table('rss')->join('category','rss.categoryid','=','category.categoryid')->where('rss.rssid',$value)->get();
                                        foreach($get_rss_cat as $cate_name)
                                        {  
                                            array_push($cate_array,$cate_name->categoryid);
                                           
                                       }
                                    }
                                    $info = $info->wherein('categoryid',$cate_array)->take(1000)->get();
                                    
                                    }?>
                                    <?php $i = 1; ?>
                                    @foreach ($info as $row)
                                        @php
                                        $get_rss = DB::table('rss')->where('rssid',$row->rssid)->take(1000)->get();
                                        @endphp
                                        
                                        @php
                                        $get_cate = DB::table('category')->where('categoryid',$row->categoryid)->take(1000)->get();
                                        @endphp
                                        <tr style="text-align:center">
                                            <td><input type="checkbox" value="{{$row->postid}}" class="form-control posts"></td>
                                            <td style="max-width:10px;">{{$i}}</td>
                                            @foreach($get_cate as $get_cates)
                                            <td>{{$get_cates->categoryname}}</td>
                                            @endforeach
                                            <td>{{$row->posttitle}}</td>
                                            <?php if($row->rssid == '0')
                                            { ?>
                                                <td> Own Post </td>

                                            <?php } else { ?>
                                            @foreach($get_rss as $get_rss)
                                            <td>{{$get_rss->rssname}}</td>
                                            @endforeach
                                            <?php } ?>
                                            <td>
                                            <?php 
                                            
                                            if($row->status == 'Publish'){?>
                                                <span class="badge badge-pill badge-success">Publish</span>
                                                <?php }else{ ?>
                                                  <span class="badge badge-pill badge-danger">Pending</span>
                                                <?php } ?>
                                            </td>

                        
                                            @if($row->created_at != '')
                                            <td><?php echo date_format(date_create($row->created_at),"Y-m-d h:i:sa"); ?></td>
                                            @else
                                            <td></td>
                                            @endif
                                            @if($row->published_date != '')
                                            <td><?php echo date_format(date_create($row->published_date),"Y-m-d h:i:sa"); ?></td>
                                            @else
                                            <td></td>
                                            @endif
                                            @if($row->updated_at != '')
                                            <td><?php echo date_format(date_create($row->updated_at),"Y-m-d h:i:sa"); ?></td>
                                            @else
                                            <td></td>
                                            @endif
                                            <!-- <td><?php //echo date_format(date_create($row->published_date),"d-m-Y H:i:s"); ?></td>
                                            <td><?php //echo date_format(date_create($row->updated_at),"d-m-Y H:i:s"); ?></td> -->
                                            
                                            @if($row->status == 'Publish')
                                            <td><a href="post-single&id={{$row->postid}}" class="btn btn-success" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>  
                                            @endif
                                            @if($row->status == 'Pending')
                                            <td><a href="admin-post-single&id={{$row->postid}}" class="btn btn-success" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>  
                                            @endif
                         



                            <td> 
                                <?php if($post_permit_edit == '1' || $roleid == '0') { ?>
                                <a href="edit_posts?postid={{$row->postid}}" onclick="window.location.href=''"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <?php } ?>
                                &nbsp;&nbsp;
                                <?php if($post_permit_delete == '1' || $roleid == '0') { ?>
                                <a href="delete_post&{{$row->postid}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                <?php } ?>
                            </td>

                            <td><?php echo $row->uploaded_by; ?></td>
                            <td><?php echo $row->hashtag; ?></td>
                            <td><?php echo $row->language; ?></td>


      

                
                            </tr>          
                                    
                           
                                        <?php $i++  ?>
                                            @endforeach
                               


                                            
                                </tbody>

                            </table>
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

@endsection
