@if(session()->has('userid'))
   
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
                        <h4 class="page-title">Create User</h4>

                    </div>
                    <div class="col-sm-6 text-right">
                        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#rolemodal"><i class="fa fa-plus" aria-hidden="true"></i> Add User</button>
                    </div>

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
                            
                            <div class="col-md-12 mb-3">
                                <!-- <button class="btn btn-primary" id="publish"><i class="fas fa-globe-americas"></i> Publish</button> -->
                                <!-- <button class="btn btn-info"><i class="fa fa-pen"></i> Pending</button>
                                <button class="btn btn-warning"><i class="fa fa-times"></i> Delete</button> -->
                            </div>
                            <div class="postsrow ">
                            <table id="datatable"  class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr style="text-align:center">
                                        <th>S.No</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>RSS Access</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                   
                                    @php 

                                    $info = DB::table('users')->where('userid','<>','1')->get();

                                    @endphp
                                   
                                    <?php $i = 1; ?>
                                        @foreach ($info as $row)
                                        
                                        <tr style="text-align:center">
                                            
                                            <td style="max-width:10px;">{{$i}}</td>
                                            <td>{{$row->username}}</td>
                                            <td>{{$row->email}}</td>
                                            <td><button class="btn btn-success rssdetail" data-toggle="modal" data-target="#rolemodaledit" value="{{$row->rss_access}}"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
                                            <td>
                                            <?php if($row->status == 'active'){?>
                                                <span class="badge badge-pill badge-success">Active</span>
                                                <?php }else{ ?>
                                                  <span class="badge badge-pill badge-danger">Inactive</span>
                                                <?php } ?>
                                            </td>
                                            <td><a href="delete_user&userid={{$row->userid}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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
<div class="modal fade" id="rolemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0  pb-5 text-center">Add Users</h3>
                <!-- <p class="text-muted m-b-30 font-13"> Use Bootstrap's predefined grid classes for horizontal form </p> -->
                <form class="form-horizontal" method="POST" action="add_user">
                    @csrf
                    <div class="form-group row">
                        <label for="rolename" class="col-sm-3 control-label col-form-label">Username*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rolename" class="col-sm-3 control-label col-form-label">Password*</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rolename" class="col-sm-3 control-label col-form-label">Email*</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rolename" class="col-sm-3 control-label col-form-label">Select Role*</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="roleid">
                                <option>- Select -</option>
                                @php
                                $info = DB::table('role')->get();
                                @endphp
                                @foreach($info as $role)
                                 <option value="<?php echo $role->roleid;?>">{{$role->rolename}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rolename" class="col-sm-3 control-label col-form-label">Select RSS*</label>
                        <div class="col-sm-9">
                        <select name="rssid[]" id="field2" multiple multiselect-search="true" multiselect-select-all="true" multiselect-max-items="3">
                                @php
                                $info = DB::table('rss')->where('status','Active')->get();
                                @endphp
                                @foreach($info as $role)
                                @php
                                $rss_name = $role->rssname;
                                $rss_id = $role->rssid;
                                $category_id = $role->categoryid;
                                $get_cate_name = DB::table('category')->where('categoryid',$category_id)->get(); 
                                
                                @endphp
                                @foreach($get_cate_name as $get_name)
                                    @php
                                        $cate_name = $get_name->categoryname;
                                    @endphp
                                @endforeach
                                 <option value="<?php echo $rss_id;?>"><?php echo $cate_name." - ".$rss_name; ?></option>
                                @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-3 col-sm-9">
                            <div class="checkbox checkbox-success">
                                <input id="rolecheck" type="checkbox" name="status" value="active" checked required>
                                <label for="rolecheck" >Active</label>
                            </div>
                        </div>
                    </div>
               
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="addrole">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="rolemodaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0  pb-5 text-center" >RSS Access</h3>
                <!-- <p class="text-muted m-b-30 font-13"> Use Bootstrap's predefined grid classes for horizontal form </p> -->
                <table id="datatable"  class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                        <tr style="text-align:center">
                            <th>S.No</th>
                            <th>Category Name</th>
                            <th>RSS Name</th>
                        </tr>
                    </thead>

                    <tbody id="rssdetails">
                    </tbody>
                </table>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
