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
                    <div class="col-sm-6 text-right">
                        <button class="btn btn-info" data-toggle="modal" data-target="#add-rss-feed" type="button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
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

                             @if (\Session::has('success2'))
                            <div class="alert alert-danger">

                                {!! \Session::get('success2') !!}

                            </div>
                            @endif
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr style="text-align:center">
                                        <th>S.No</th>
                                        <th>Category Name</th>
                                        <th>Story title</th>
                                        <th>Description</th>
                                        <th>Sub Count</th>
                                        <th>Status</th>
                                        <th>View</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php 

                                    $info = DB::table('v_stories')->get(); 
                                    foreach ($info as $val) { 
                                        $vis_id = $val->storyid;
                                         $updated_at = $val->updated_at; } 
                                          @endphp
                                    <?php $i = 1; ?>
                                        @foreach ($info as $row)
                                        <tr style="text-align:center">
                                            <td>{{$i}}</td>
                                            <td>{{$row->categoryid}}</td>
                                            <td>{{$row->storytitle}}</td>
                                            <td>{{$row->description}}</td>
                                            <td></td>
                                            <td>
                                            <?php if($row->status == 'Active'){?>
                                                <span class="badge badge-pill badge-success">Active</span>
                                                <?php }else{ ?>
                                                  <span class="badge badge-pill badge-danger">Inactive</span>
                                                <?php } ?>
                                            </td>
                                            <td><button class="btn btn-success" data-toggle="modal" data-target="#bs-example-modal-lg"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
                                            <td><a href="#" data-toggle="modal" data-target="#bs-example-modal-lg3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;&nbsp;<a href=""><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

                                    
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
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Visual Stories Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="{{ url('add_visualstory') }}" enctype="multipart/form-data" method="post">
                @csrf
            <div class="modal-body">
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
                           <!--  <option value="Fashion">Fashion</option>
                            <option value="Food">Food</option> -->
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Story Title</label>
                        <input type="text" class="form-control" required placeholder="Enter Story title" name="stype" value="" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Story Description</label>
                        <textarea id="w3review" class="form-control" required name="sdescription" rows="4" cols="50"></textarea>
                        <!-- <input type="text" class="form-control" required placeholder="Enter Story Description" name="sdescription" value="" > -->
                    </div>
                    <div class="col-md-6 form-group">
                         <label>Status</label>
                        <select class="form-control" name="status">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Choose Images</label>
                         <input required type="file" onchange="ValidateSize(this)" class="form-control" name="image" accept=".jpg,.png,.gif,.jpeg"> 
                    </div>
                    <!-- <div class="col-md-6 form-group">
                         <label>Status</label>
                        <select class="form-control" name="status">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div> -->
                </div>
                <div id="newRow"></div>
                    <button id="addRow" type="button" class="btn btn-info">Add Sub Stories</button>

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
