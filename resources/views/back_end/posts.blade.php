@if(session()->has('userid'))

@else
<script>
    window.location.href = "/admin";
</script>
@endif
<?php $roleid = Session::get('roleid'); ?>
<?php $rss_access = Session::get('rss_access'); ?>
<?php
$post_permit = '';
$post_permit_edit = '';
$post_permit_delete = '';
$post_permit_add = '';
$post_access_details = DB::table('permissions')->where('role_id', $roleid)->where('module_id', '2')->get();

foreach ($post_access_details as $permit) {
    $post_permit = $permit->access;
    $post_permit_edit = $permit->edit;
    $post_permit_delete = $permit->delete;
    $post_permit_add = $permit->add;
}

?>
@if($post_permit == '1' || $roleid == '0')

@else
<script>
    window.location.href = "/admin";
</script>
@endif
@extends('layouts.header')
@section('content')

<?php

echo $email = Session::get('email');

if ($email == 'venkata.krishna@beeinnovations.com') {
    echo   $email = 'info@masalamobile.com';
}
?>
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
                        <button class="btn btn-info" onclick="window.location.href='{{url('add_posts')}}'" type="button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
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
                                <form action="posts" method="POST">
                                    @CSRF
                                    <div class="row border p-3" style="background-color:lightgrey;">
                                        <div class="col-md-1 mt-2">
                                           <label class="m-auto text-dark">Filters :</label>
                                        </div>
                                        <div class="col-md-3">

                                            @php
                                            $filter_cate = DB::table('category')->where('post_cate','Yes')->get();
                                            @endphp
                                            <select class="form-control" id="filtercategoryname" name="categoryname">
                                                <option value="">Select Category</option>
                                                <?php if ($roleid == '0') { ?>
                                                    @foreach ($filter_cate as $filter_cate)
                                                    <option value="{{$filter_cate->categoryid}}">{{$filter_cate->categoryname}}</option>
                                                    @endforeach
                                                    <?php } else {
                                                    $access_rss = explode(",", $rss_access);

                                                    foreach ($access_rss as $rss => $value) {
                                                        $get_rss_cat = DB::table('rss')->join('category', 'rss.categoryid', '=', 'category.categoryid')->where('rss.rssid', $value)->get();
                                                        foreach ($get_rss_cat as $cate_name) {  ?>
                                                            <option value='{{$cate_name->categoryid}}'>{{$cate_name->categoryname}}</option>


                                                <?php }
                                                    }
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-3">

                                            @php

                                            $filter_cate = DB::table('rss')->get();
                                            @endphp
                                            <select class="form-control" id="" name="rssname">
                                                <option value="">Select RSS</option>
                                                <?php if ($roleid == '0') { ?>
                                                    @foreach ($filter_cate as $filter_cate)
                                                    @php
                                                    $cate_name = DB::table('category')->where('categoryid', $filter_cate->categoryid)->get();
                                                    @endphp
                                                    @foreach($cate_name as $cate_names)
                                                    <option value="{{$filter_cate->rssid}}">{{$filter_cate->rssname}} - {{$cate_names->categoryname}}</option>
                                                    @endforeach
                                                    @endforeach
                                                    <?php } else {
                                                    $access_rss = explode(",", $rss_access);

                                                    foreach ($access_rss as $rss => $value) {
                                                        $get_rss_cat = DB::table('rss')->join('category', 'rss.categoryid', '=', 'category.categoryid')->where('rss.rssid', $value)->get();
                                                        foreach ($get_rss_cat as $cate_name) {  ?>
                                                            <option value='{{$cate_name->rssid}}'>{{$cate_name->rssname}} - {{$cate_name->categoryname}}</option>


                                                <?php }
                                                    }
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-3">


                                            <select class="form-control" id="" name="status">
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
                                <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

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
                                            <th>Uploaded By</th>

                                        </tr>
                                    </thead>

                                    <tbody>


                                        <?php if (($roleid == '0')) { ?>

                                            @php



                                            foreach ($info as $val) {
                                            $catid = $val->postid;
                                            $updated_at = $val->updated_at;
                                            $status = $val->status;
                                            }

                                            @endphp

                                        <?php } else {

                                            $info = DB::table('post')->where('uploaded_by', $email)->Orderby('postid', 'desc')->get();

                                            foreach ($info as $val) {
                                                $catid = $val->postid;
                                                $updated_at = $val->updated_at;
                                                $status = $val->status;
                                            }
                                        }
                                        ?>


                                        <?php $i = 1; ?>

                                        @foreach ($info as $row)
                                        @php
                                        $get_rss = DB::table('rss')->where('rssid',$row->rssid)->get();
                                        @endphp

                                        @php
                                        $get_cate = DB::table('category')->where('categoryid',$row->categoryid)->get();
                                        @endphp
                                        <tr style="text-align:center">
                                            <td><input type="checkbox" value="{{$row->postid}}" class="form-control posts"></td>
                                            <td style="max-width:10px;">{{$i}}</td>
                                            @foreach($get_cate as $get_cate)
                                            <td>{{$get_cate->categoryname}}</td>
                                            @endforeach
                                            <td>{{$row->posttitle}}</td>
                                            <?php if ($row->rssid == '0') { ?>
                                                <td> Own Post </td>

                                            <?php } else { ?>
                                                @foreach($get_rss as $get_rss)
                                                <td>{{$get_rss->rssname}}</td>
                                                @endforeach
                                            <?php } ?>
                                            <td>
                                                <?php if ($row->status == 'Publish') { ?>
                                                    <span class="badge badge-pill badge-success">Publish</span>
                                                <?php } else { ?>
                                                    <span class="badge badge-pill badge-danger">Pending</span>
                                                <?php } ?>
                                            </td>

                                            @if($row->created_at != '')
                                            <td><?php echo date_format(date_create($row->created_at), "d-m-Y H:i:s"); ?></td>
                                            @else
                                            <td></td>
                                            @endif
                                            @if($row->published_date != '')
                                            <td><?php echo date_format(date_create($row->published_date), "d-m-Y H:i:s"); ?></td>
                                            @else
                                            <td></td>
                                            @endif
                                            @if($row->updated_at != '')
                                            <td><?php echo date_format(date_create($row->updated_at), "d-m-Y H:i:s"); ?></td>
                                            @else
                                            <td></td>
                                            @endif
                                            <!-- <td><?php //echo date_format(date_create($row->published_date),"d-m-Y H:i:s"); 
                                                        ?></td>
                                            <td><?php //echo date_format(date_create($row->updated_at),"d-m-Y H:i:s"); 
                                                ?></td> -->

                                            @if($row->status == 'Publish')
                                            <td><a href="post-single&id={{$row->postid}}" class="btn btn-success" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                            @endif
                                            @if($row->status == 'Pending')
                                            <td><a href="admin-post-single&id={{$row->postid}}&lang=English" class="btn btn-success" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                            @endif

                                            <td>



                                                <a href="edit_posts?postid={{$row->postid}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                                &nbsp;&nbsp;

                                                <a href="delete_post&{{$row->postid}}" onclick="return confirm('Sure Want Delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

                                            </td>

                                            <td><?php echo $row->uploaded_by; ?></td>



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

div class="modal" id="mdelete" role="dialog" aria-labelledby="moddelete">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="moddelete">Confirm Delete</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <p>Are you sure you want to delete</p>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="txtid" id="txtid" />
                                    <input type="text" name="uid" id="uid" />
                                    
                                    <button type="button" class="btn btn-danger " data-dismiss="modal">No</button>
                                
                                    <span class="text-right">
                                        <button type="button" class="btn btn-primary btndelete">Yes</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
$(document).ready(function() {

    $('#mdelete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var userid = button.data('id');
        var uname = button.data('name');
        var modal = $(this);
        modal.find('#txtid').val(userid);
        modal.find('#uid').val(userid);
        modal.find('.modal-body').text(
            'Are you sure you want to delete ' + uname);
    })
});


@endsection