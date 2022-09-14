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
                                                         <input required type="file" onchange="ValidateSize(this)" class="form-control" name="image[]" accept=".jpg,.png,.gif,.jpeg"> 
                                                    </div>
                    
                                        
                                        </div>
                                        <div class="row">
                                           
                                            <div class="col-md-6 form-group">
                                                <label>Story Description</label>
                                                <textarea  required placeholder="Enter Story Description" class="summernote form-control"  name="storydesc[]"></textarea> 
                                                 <!--<textarea id="" class="required  summernote" name="storydesc[]" rows="4" cols="50"></textarea>-->
                                                  <!--<textarea class="summernote" name="description"></textarea>-->
                                                <!--<textarea class="summernote" name="storydesc[]"></textarea>-->
                                               
                                            </div>
                        
                                        </div>
                                        <!--<div class="storyadd"></div>-->
                                        <!--                <div class="col-md-12" style="text-align:center">-->
                                        <!--                                        <div class="box-footer">-->
                                        <!--                                            <button type="button" class="btn btn-info mb-3 add_another" >Add Another</button>-->
                                                    
                                        <!--                                        </div>-->
                                                                            
                                                        </div>

<div>
<div class="col-md-6 form group">
                                      <label>Category</label>
                                 
                                        <select class="form-control" name="categorytype" required>
                                        <option value="Stories">Stories</option>
                                      
                                        <option value="Horoscope">Horoscope</option>
                                      
                                          
                                        </select>
                                     

                                   </div>

                  
                    <div class="col-md-6 form group">
                                      <label>Category</label>
                                 
                                        <select class="form-control" name="language" required>
                                        <option value="english">English</option>
                                        <option value="telugu">Telugu</option>
                                      
                                        <option value="hindi">Hindi</option>
                                      
                                          
                                        </select>
                                     

                                   </div>
</div>

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
                                        <th>Description</th>
                                        <th>categorytype</th>
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
                                            <td>{{$row->t_description}}</td>
                                            <td>{{$row->cat_type}}</td>
                                            <td><a href="{{$row->t_imagelink}}" target="_blank"><img src="{{$row->t_imagelink}}" alt="" srcset="" width="42px" height="42px"></a></td>
                                           
                                               
                                                
                                               <td>
                                                      <a href="delete_stories&transid={{$row->transid}}&storyid={{$row->storyid}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                   
                                                   <a href="delete_stories&transid={{$row->transid}}&storyid={{$row->storyid}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                   
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

@endsection