@if(session()->has('userid'))
   
@else 
 <script>window.location.href="/admin";</script>
@endif
<?php $roleid = Session::get('roleid'); ?>
<?php $rss_access = Session::get('rss_access'); 
$access_rss = explode (",", $rss_access); 
?>
<?php 
    
    $rss_permit = '';
    $rss_permit_edit = '';
    $rss_permit_delete = '';
    $rss_permit_add = '';
    $rss_access_details = DB::table('permissions')->where('role_id', $roleid)->where('module_id','3')->get();

    foreach($rss_access_details as $permit)
    {
        $rss_permit = $permit->access;
        $rss_permit_edit = $permit->edit;
        $rss_permit_delete = $permit->delete;
        $rss_permit_add = $permit->add;
    }
    
    ?>
    @if($rss_permit == '1' || $roleid == '0')
   
   @else 
    <script>window.location.href="/admin";</script>
   @endif
@extends('layouts.header') 
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
              <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">RSS Details</h4>

                    </div>
                    @if($rss_permit_add == '1' || $roleid == '0')
                    <div class="col-sm-6 text-right">
                        <button class="btn btn-info" onclick="window.location.href='{{url('add_rss')}}'"  type="button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
                    </div>
                    @endif

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

                            @if (\Session::has('success2'))
                            <div class="alert alert-danger">

                                {!! \Session::get('success2') !!}

                            </div>
                            @endif
                            <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr style="text-align:center">
                                        <th>S.No</th>
                                        <th>Category Name</th>
                                        <th>RSS Name</th>
                                        <th>RSS Source URL</th>
                                      <!--   <th>Total Feeds</th> -->
                                        <th>Status</th>
                                        <!-- <th>View</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if($roleid == '0')
                                    @php 

                                    $info = DB::table('rss')
                                            ->join('category', 'category.categoryid', '=', 'rss.categoryid')
                                            ->Orderby('rss.rssid', 'asc')                                          
                                            ->get(); 

                                    foreach ($info as $val) { 
                                        $rssid = $val->rssid;
                                         $updated_at = $val->updated_at; } 
                                          @endphp
                                    @else
                                    @php 

                                    $info = DB::table('rss')
                                            ->join('category', 'category.categoryid', '=', 'rss.categoryid')
                                            ->Orderby('rss.rssid', 'desc')->whereIn('rssid',$access_rss)                                         
                                            ->get();
                                    @endphp
                                    @endif
                                    <?php $i = 1; ?>
                                        @foreach ($info as $row)
                                        <tr style="text-align:center">
                                            <td>{{$i}}</td>
                                            <td>{{$row->categoryname}}</td>
                                            <td>{{$row->rssname}}</td>
                                            <td>{{$row->sourceurl}}</td>
                                           <!--  <td></td> -->
                                            <!-- <td>{{$row->status}}</td> -->
                                            <td>
                                            <?php if($row->status == 'Active'){?>
                                                <span class="badge badge-pill badge-success">Active</span>
                                                <?php }else{ ?>
                                                  <span class="badge badge-pill badge-danger">Inactive</span>
                                                <?php } ?>
                                            </td>
                                             <!-- <td><a href="#" class="btn btn-success" data-toggle="modal" data-target="#bs-example-modal-lg2{{$row->rssid}}" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>   -->
                         

                            <?php if(!empty($info)) {?>
                                <div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="bs-example-modal-lg2{{$row->rssid}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">View RSS</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label>Category Name</label>
                                                        <input type="text" class="form-control" required placeholder="" name="type" value="{{$row->categoryname}}" readonly/>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label>RSS Name</label>
                                                        <input type="text" class="form-control" required placeholder="" name="type" value="{{$row->rssname}}" readonly/>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label>Source URL</label>
                                                        <input type="text" class="form-control" required placeholder="" name="type" value="{{$row->sourceurl}}" readonly/>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label>Status</label>
                                                        <input type="text" class="form-control" required placeholder="" name="type" value="{{$row->status}}" readonly/>
                                                    </div>
                                                </div>



                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                </div>
                            <?php } ?>

                            <td>
                                @if($rss_permit_edit == '1' || $roleid == '0')
                                <a href="edit_rss?rssid={{$row->rssid}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                @endif
                                &nbsp;&nbsp;
                                @if($rss_permit_delete == '1' || $roleid == '0')
                                <a onclick="return confirm('Are you sure want to delete this RSS Details ? <br> It will Delete all Posts Mapped with this RSS')" href="delete_rss&{{$row->rssid}}" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                @endif
                            </td>

                                        </tr>
                                        <?php $i++ ?>
                                            @endforeach
                                </tbody>

                            </table>

                        </div>

                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
</div>
 <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="add-rss-feed">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Add RSS Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="{{ url('add-rss-feed') }}" method="POST">
            <div class="modal-body">
            @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                       <label>Category Name</label>
                        <select class="form-control" name="category">
                            @php
                                 $cat_select = DB::table('category')->get();
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

                <div class="text-right">
                    <button class="btn btn-info" type="submit">Add</button>
                </div>

            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection
