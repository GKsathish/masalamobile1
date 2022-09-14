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
                        <h4 class="page-title">Manage Permissions</h4>

                    </div>
                    <!-- <div class="col-sm-6 text-right">
                        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#rolemodal"><i class="fa fa-plus" aria-hidden="true"></i> Add Role</button>
                    </div> -->

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
                            
                            <div class="form-group row">
                        <label for="rolename" class="col-sm-3 control-label col-form-label">Role Name*</label>
                        <div class="col-sm-9">
                            @foreach($role_name as $name)
                            <input type="email" class="form-control" id="perrolename" placeholder="Rolename" value="{{$name->rolename}}" readonly>
                            @endforeach
                        </div>
                    </div>
                    <form class="form-horizontal" method="POST" action="edit_rolepermission">
                        @CSRF
                    <div class="form-group row">
                        <table class="table">
                            <tbody id="permission-data" class="perm-body">
                            <tr>
                                <th>Page Name</th>
                                <th>Add</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Access</th>
                            </tr>
                            @foreach($module_permission as $permission)
                            <tr>
                                <td>{{$permission->modulename}}</td>
                                <input type="hidden" name="module_id[]" class ="moduleid"  value="{{$permission->moduleid}}">
                                @foreach($role_name as $name)
                                <input type="hidden" name="roleid" class ="moduleid"  value="{{$name->roleid}}">
                                @endforeach
                                <?php
                                if($permission->add == '0' || $permission->add == null )
                                { ?>
                                    <td><input type="checkbox" class="add" name="add_{{$permission->moduleid}}" value="0" ></td>
                                <?php }
                                else
                                {  ?>
                                    <td><input  type="checkbox" class="add" name="add_{{$permission->moduleid}}" value="0" checked></td>
                               <?php }
                                if($permission->edit == '0' || $permission->edit == null )
                                { ?>
                                    <td><input type="checkbox" class="edit" name="edit_{{$permission->moduleid}}" value="0"></td>
                              <?php  } 
                                else
                                { ?>
                                    <td><input  type="checkbox" class="edit" name="edit_{{$permission->moduleid}}" value="0" checked></td>
                                <?php }
                                if($permission->delete == '0' || $permission->delete == null )
                                { ?>
                                    <td><input  type="checkbox" class="delete" name="delete_{{$permission->moduleid}}" value="0"></td>
                                <?php }
                                else
                                { ?>
                                    <td><input  type="checkbox" class="delete"  name="delete_{{$permission->moduleid}}" value="0" checked></td>
                                <?php } 
                                if($permission->access == '0' || $permission->access == null )
                                { ?>
                                    <td><input  type="checkbox" class="access" name="access_{{$permission->moduleid}}" value="0"></td>
                                <?php }
                                else
                                {  ?>
                                   <td><input type="checkbox" class="access"  name="access_{{$permission->moduleid}}" value="0" checked></td>
                               <?php } ?>
                                
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- <div class="offset-sm-3 col-sm-9">
                            <div class="checkbox checkbox-success">
                                <input id="rolecheck" type="checkbox" name="status" value="active" checked required>
                                <label for="rolecheck" >Active</label>
                            </div>
                        </div> -->
                    </div>
                    <button class="btn btn-primary" type="submit" style="float:right;" >Save</button> 
                    </form>
                            
                         
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
                <h3 class="box-title m-b-0  pb-5 text-center">Add User Role</h3>
                <!-- <p class="text-muted m-b-30 font-13"> Use Bootstrap's predefined grid classes for horizontal form </p> -->
                <form class="form-horizontal" method="POST" action="add_role">
                    @csrf
                    <div class="form-group row">
                        <label for="rolename" class="col-sm-3 control-label col-form-label">Role Name*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="rolename" placeholder="Rolename" required>
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
                <h3 class="box-title m-b-0  pb-5 text-center" >Edit User Role</h3>
                <!-- <p class="text-muted m-b-30 font-13"> Use Bootstrap's predefined grid classes for horizontal form </p> -->
                <form class="form-horizontal" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="rolename" class="col-sm-3 control-label col-form-label">Role Name*</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="rolenameedit" placeholder="Rolename" required>
                        </div>
                    </div>
                    <input type="hidden" id="roleid">
                    <div class="form-group row">
                        <div class="offset-sm-3 col-sm-9">
                            <div class="checkbox checkbox-success">
                                <input id="rolecheckedit" type="checkbox" name="status" value="active" checked required> 
                                <label for="rolecheck" >Active</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="updaterole">Update</button>
      </div>
    </div>
  </div>
</div>
@endsection
