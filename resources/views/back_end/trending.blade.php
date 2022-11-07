@if(session()->has('userid'))
   
@else 
 <script>window.location.href="/admin";</script>
@endif
<?php $roleid = Session::get('roleid'); ?>
<?php 
    
    $trending_permit = '';
    $trending_permit_edit = '';
    $trending_permit_delete = '';
    $trending_permit_add = '';

    $trending_access_details = DB::table('permissions')->where('role_id', $roleid)->where('module_id','5')->get();
    
    
    foreach($trending_access_details as $permit)
    {
        $trending_permit = $permit->access;
        $trending_permit_edit = $permit->edit;
        $trending_permit_delete = $permit->delete;
        $trending_permit_add = $permit->add;
    }
    ?>
@extends('layouts.header') 
@section('content')


<div class="content-page">
    <div class="content">
        <div class="container-fluid">
              <div class="page-title-box pt-2">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Trending News</h4>

                    </div>
                    <!-- <div class="col-sm-6 text-right">
                        <button class="btn btn-info" onclick="window.location.href='{{url('add_posts')}}'"  type="button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
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
                            
                            <div class="col-md-12 mb-3">
                                <!-- <button class="btn btn-primary" id="publish"><i class="fas fa-globe-americas"></i> Publish</button> -->
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
                                        <th>Published on</th>
                                        <th>View</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                   
                                    @php 

                                    $info = DB::table('post')
                                            ->where('trending_now','Trending Now')
                                            ->Orderby('published_date', 'desc')->take(15)                                          
                                            ->get();
                                    foreach ($info as $val) { 
                                        $catid = $val->postid;
                                         $updated_at = $val->published_date; 
                                     $status = $val->status; 
                                 } 

                                    @endphp
                                   
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
                                            <?php if($row->rssid == '0')
                                            { ?>
                                                <td> Own Post </td>

                                            <?php } else { ?>
                                            @foreach($get_rss as $get_rss)
                                            <td>{{$get_rss->rssname}}</td>
                                            @endforeach
                                            <?php } ?>
                                            <td>
                                            <?php if($row->status == 'Publish'){?>
                                                <span class="badge badge-pill badge-success">Publish</span>
                                                <?php }else{ ?>
                                                  <span class="badge badge-pill badge-danger">Pending</span>
                                                <?php } ?>
                                            </td>
                                            @if($row->published_date != '')
                                            <td><?php echo date_format(date_create($row->published_date),"d-m-Y H:i:s"); ?></td>
                                            @else
                                            <td></td>
                                            @endif
                                            <!-- <td>{{$row->published_date}}</td> -->
                                            
                                            @if($row->status == 'Publish')
                                            <td><a href="post-single&id={{$row->postlink}}" class="btn btn-success" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>  
                                            @endif
                                            @if($row->status == 'Pending')
                                            <td><a href="admin-post-single&id={{$row->postlink}}" class="btn btn-success" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>  
                                            @endif
                         



                            <td>
                                @if($trending_permit_delete == '1' || $roleid == '0')
                                <a href="remove_trending&postid={{$row->postid}}"><button class='btn btn-info'>Remove</button></a>
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
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
</div>

@endsection
