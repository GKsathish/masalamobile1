@if(session()->has('userid'))
   
@else 
 <script>window.location.href="/admin";</script>
@endif
<?php $roleid = Session::get('roleid'); ?>
<?php $rss_access = Session::get('rss_access'); ?>
<?php 
    $paparazzi_permit = '';
    $paparazzi_permit_edit = '';
    $paparazzi_permit_delete = '';
    $paparazzi_permit_add = '';
    $paparazzi_access_details = DB::table('permissions')->where('role_id', $roleid)->where('module_id','6')->get();
    
    foreach($paparazzi_access_details as $permit)
    {
        $paparazzi_permit = $permit->access;
        $paparazzi_permit_edit = $permit->edit;
        $paparazzi_permit_delete = $permit->delete;
        $paparazzi_permit_add = $permit->add;
    }

?>
@if($paparazzi_permit == '1' || $roleid == '0')
   
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
                        <h4 class="page-title">Paparazzi Posts</h4>

                    </div>
                   
                    @if($paparazzi_permit_add == '1' || $roleid == '0')
                    <div class="col-sm-6 text-right">
                        <button class="btn btn-info" onclick="window.location.href='{{url('add_paparazzi_posts')}}'"  type="button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
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
                                <form action="paparazzi" method="GET">
                                
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
                                        <th>S.No</th>
                                        <th>Paparazzi Title</th>
                                        <th>Video Link</th>
                                        <th>Status</th>
                                        <th>Created on</th>
                                        <th>Published on</th>
                                        <th>Edited on</th>
                                        <!--<th>View</th>-->
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                   
                                   
                                    @php 
                                    $info = DB::table('paparazzi_post')->Orderby('published_date','desc')->get();
                                    @endphp
                                    <?php $i = 1; ?>
                                        @foreach ($info as $row)
                                       
                                        <tr style="text-align:center">
                                           
                                            <td style="max-width:10px;">{{$i}}</td>
                                            <td>{{$row->posttitle}}</td>
                                            <td>{{$row->videopath}}</td>
                                            <td>
                                            <?php if($row->status == 'Publish'){?>
                                                <span class="badge badge-pill badge-success">Publish</span>
                                                <?php }else{ ?>
                                                  <span class="badge badge-pill badge-danger">Pending</span>
                                                <?php } ?>
                                            </td>
                        
                                            @if($row->created_at != '')
                                            <td><?php echo date_format(date_create($row->created_at),"d-m-Y H:i:s"); ?></td>
                                            @else
                                            <td></td>
                                            @endif
                                            @if($row->published_date != '')
                                            <td><?php echo date_format(date_create($row->published_date),"d-m-Y H:i:s"); ?></td>
                                            @else
                                            <td></td>
                                            @endif
                                            @if($row->updated_at != '')
                                            <td><?php echo date_format(date_create($row->updated_at),"d-m-Y H:i:s"); ?></td>
                                            @else
                                            <td></td>
                                            @endif
                                            <!-- <td><?php //echo date_format(date_create($row->published_date),"d-m-Y H:i:s"); ?></td>
                                            <td><?php //echo date_format(date_create($row->updated_at),"d-m-Y H:i:s"); ?></td> -->
                                            
                                           

                                            <td> 
                                            
                                            <?php if($paparazzi_permit_edit == '1' || $roleid == '0') { ?>
                                                <a href="edit_paparazzi_posts?postid={{$row->postid}}" onclick="window.location.href=''"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <?php } ?>
                                                &nbsp;&nbsp;
                                                <?php if($paparazzi_permit_delete == '1' || $roleid == '0') { ?>
                                                <a href="delete_paparazzi_post&{{$row->postid}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                <?php } ?>
                                                
                                            </td>
                                        </tr>
                                        <?php $i++ ?>
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
