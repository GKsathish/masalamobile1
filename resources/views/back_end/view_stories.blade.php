@if(session()->has('userid'))
   
@else 
 <script>window.location.href="/admin"</script>
@endif
@extends('layouts.header') 
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
              <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Manage Stories</h4>

                    </div>
                    <div class="col-sm-6 text-right">
                        <!-- <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='{{url('visualstories')}}'">Visual Stories</button> -->
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
                            <table id="datatable" class="table table-bordered dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr style="text-align:center">
                                         <th>S.No</th>
                                        <th>Story Name</th>
                                        <th>Title</th>
                                        <th>Categorytype</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php 

                                     $info = DB::table('v_stories')
                                            ->join('v_storiestrans', 'v_storiestrans.storyid', '=', 'v_stories.storyid')
                                            ->Orderby('v_storiestrans.transid', 'asc')                                          
                                            ->get();
                                    foreach ($info as $val) { 
                                        $vis_id = $val->storyid;
                                         $trans_id = $val->transid;
                                         $updated_at = $val->updated_at; } 
                                          @endphp
                                    <?php $i = 1; ?>
                                       @foreach ($info as $row)
                                        <tr style="text-align:center">
                                            <td>{{$i}}</td>
                                            <td>{{$row->storytitle}}</td>
                                            <td>{{$row->t_title}}</td>
                                            <td>{{$row->cat_type}}</td>
                                            <td>{{$row->t_description}}</td>
                                            <td><a href="{{$row->t_imagelink}}" target="_blank"><img src="{{$row->t_imagelink}}" alt="" srcset="" width="42px" height="42px"></a></td>
                                            <td><a href="edit_stories?transid={{$row->transid}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;&nbsp;<a href="delete_stories&{{$row->transid}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

   
                          

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
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
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
                       <input type="text" class="form-control" required placeholder="Enter RSS Name" name="rssname" value=""/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Source URL</label>
                        <input type="text" class="form-control" required placeholder="Enter Source URL" name="url" value=""/>
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
