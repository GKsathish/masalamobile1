@if(session()->has('userid'))
   
@else
 <script>window.location.href="/admin";</script>
@endif
@extends('layouts.header') @section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        @foreach($info as $info)
                        <h4 class="page-title">Manage Sub Stories for <span style="color:#ff0853;">{{$info->storytitle}}</span></h4>
                        @endforeach
                    </div>
                    <div class="col-sm-6">
                        <div class="float-right d-none d-md-block">
                   
                                <div class="button-items">
                                        <!-- <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='{{url('visualstories')}}'">View Stories</button> -->
                                 
                                </div>
                             
                        </div>
                         
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

                            <div class="m-b-30">
                                <form id="myForm" action="{{url('add_newstories')}}" enctype="multipart/form-data" method="post">
                                            @csrf
                                            <input type="hidden" value="{{$info->storyid}}" name="stitle">
                                        <div class="row">
                                       
                                                    <div class="col-md-6 form-group">
                                                        <label>Title <span style="color:red;">*</span></label>
                                                        <input type="text" class="form-control"  placeholder="Enter Title" name="ttitle[]" value=""/>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label>Choose Images <span style="color:red;">*</span><span style="color:red;font-size:12px;"> (Please Upload 720 X 1280 in Pixels Only)</label>
                                                         <input required type="file" onchange="ValidateSize(this)" class="form-control" name="image[]" accept=".jpg,.png,.gif,.jpeg,.webp"> 
                                                    </div>
                   
                                       
                                        </div>
                                        <div class="row">
                                            
                                                                                       
                                                        <div class="col-md-6 form group">
                                      <label>Category Name</label>
                                 
                                        <select class="form-control" name="categorytype" required>
                                          
                                          <option value="stories"> Stories</option>
                                          <option value="horoscope">Horoscope</option>
                                          
                                        </select>
                                     
</div>
                                 
                                           
                                            <div class="col-md-6 form-group">
                                                <label>Story Description</label>
                                               
                                                 <textarea class="form-control  " required placeholder="Enter Story Description"  name="storydesc[]" rows="4" cols="50"></textarea>
                                                  <!--<textarea class="summernote" name="description"></textarea>-->
                                                <!--<textarea class="summernote" name="storydesc[]"></textarea>-->
                                                <!--<input type="text" class="form-control" name="storydesc[]" value=""/>-->
                                            </div>
                       
                                        </div>
                                        <!--<div class="storyadd"></div>-->
                                        <!--                <div class="col-md-12" style="text-align:center">-->
                                        <!--                                        <div class="box-footer">-->
                                        <!--                                            <button type="button" class="btn btn-info mb-3 add_another" >Add Another</button>-->
                                                   
                                        <!--                                        </div>-->
                                                                           
                                                        
                                    <div class="col-md-12" style="text-align:center">
                                                                        <div class="box-footer">
                                                                            <button type="submit" id="save" class="btn btn-primary">Save</button>
                                                                            <button type="button" class="btn btn-success"  onclick="window.history.back();">Back</button>
                                                                        </div>
                                                        </div>
                                 </form>
                                <br/>
 
                            </div>

                        </div>
                    </div>

                </div>
                <!-- end col -->
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
                                        <th>Title</th>
                                        <th>CategoryType</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                 
                                   
                                    @php
                                   
                                   
                                    $storytrans = DB::table('v_storiestrans')->where('storyid', $info->storyid)->get();
                                   
                                    @endphp
                                    <?php $i = 1; ?>
                                       @foreach ($storytrans as $row)
                                        <tr style="text-align:center">
                                            <td>{{$i}}</td>
                                            <td>{{$row->t_title}}</td>
                                            <td>{{$row->cat_type}}</td>
                                            <td>{{$row->t_description}}</td>
                                            <td><a href="{{$row->t_imagelink}}" target="_blank"><img src="{{$row->t_imagelink}}" alt="" srcset="" width="42px" height="42px"></a></td>
                                           
                                               
                                               
                                               <td>
                                     
                                                <a  href="edit_stories?transid={{$row->transid}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                             
                                                &nbsp;&nbsp;
                                                   <a  onclick="return confirm('Sure Want Delete?')" href="delete_stories&transid={{$row->transid}}&storyid={{$row->storyid}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                 
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
        </div>
    </div>
</div>

<div class="modal" id="mdelete" role="dialog" aria-labelledby="moddelete">
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