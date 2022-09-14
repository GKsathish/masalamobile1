@if(session()->has('userid'))
   
@else 
 <script>window.location.href="/admin";</script>
@endif
<?php $roleid = Session::get('roleid'); ?>
<?php 
    
    $vs_permit = '';
    $vs_permit_edit = '';
    $vs_permit_delete = '';
    $vs_permit_add = '';
    
    
    $vs_access_details = DB::table('permissions')->where('role_id', $roleid)->where('module_id','4')->get();
    
    foreach($vs_access_details as $permit)
    {
        $vs_permit = $permit->access;
        $vs_permit_edit = $permit->edit;
        $vs_permit_delete = $permit->delete;
        $vs_permit_add = $permit->add;
    }
   
    ?>
    @if($vs_permit == '1' || $roleid == '0')
   
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
                        <h4 class="page-title">Visual Stories</h4>

                    </div>
                    @if($vs_permit_add == '1' || $roleid == '0')
                    <div class="col-sm-6 text-right">
                         <!-- <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='{{url('view_stories')}}'">View Story</button> -->
                        <button class="btn btn-info" onclick="window.location.href='{{url('add_visual_story')}}'"  type="button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
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
                                        <th>Story title</th>
                                        <th>Manage/Add Sub Story</th>
                                        <th>View</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php 

                                     $info = DB::table('v_stories')
                                            ->join('category', 'category.categoryid', '=', 'v_stories.categoryid')
                                            ->Orderby('v_stories.storyid', 'desc')                                          
                                            ->get(); 
                                          @endphp
                                    <?php $i = 1; ?>
                                       @foreach ($info as $row)
                                        <tr style="text-align:center">
                                            <td>{{$i}}</td>
                                            <td>{{$row->categoryname}}</td>
                                            <td>{{$row->storytitle}}</td>
                                            <!-- <td><?php echo $row->description; ?></td> -->
                                            <!-- <td><button type="submit" class="btn btn-warning" onclick="window.location.href='add_stories?storyid={{$row->storyid}}'">Edit</button></td>
                                            <td> -->
                                                <!-- <td><button type="submit" class="btn btn-warning" onclick="window.location.href='view_stories'">View</button></td> -->
                                                <td>
                                                @if($vs_permit_edit == '1' || $roleid == '0')
                                                <a href="add_story&id={{$row->storyid}}"><span class="badge badge-pill badge-success">Click Here</span></a>
                                                @endif
                                                
                                                 
                                                
                                            </td>

                                            <td><a href="stories&id={{$row->storyid}}" class="btn btn-success" target="_blank" ><i class="fa fa-eye" aria-hidden="true"></i></a></td> 
    
                                            <td>
                                                @if($vs_permit_edit == '1' || $roleid == '0')
                                                <a  href="edit_vstories?storyid={{$row->storyid}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                @endif
                                                &nbsp;&nbsp;
                                                @if($vs_permit_delete == '1' || $roleid == '0')
                                                <a href="delete_vstory&{{$row->storyid}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
