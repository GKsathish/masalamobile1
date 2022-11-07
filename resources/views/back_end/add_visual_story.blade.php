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
                                <h4 class="page-title">Add Visual Story</h4>

                            </div>
                            <div class="col-sm-6">
                                <div class="float-right d-none d-md-block">

                                   <div class="button-items">
                                      <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='{{url('visualstories')}}'">View Stories</button>
             
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
                                    <form id="myForm" action="{{url('add_visualstory')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                        <label>Category Name <span style="color:red;">*</span></label>
                                        <select class="form-control" name="category">
                                            @php
                                                    $cat_select = DB::table('category')->where('v_cate','Yes')->get();
                                                                    @endphp
                                                                    @foreach ($cat_select as $row)
                                                                    <option value="{{$row->categoryid}}">{{$row->categoryname}}</option>
                                                                    @endforeach
                                            <!--  <option value="Fashion">Fashion</option>
                                                <option value="Food">Food</option> -->
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Story Title <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" required placeholder="Enter Story title" name="stype" value="" >
                                        </div>
                                   </div>

                                  
                                   <div>
                                   <div class="col-md-6 form group">
                                      <label>Category</label>
                                 
                                    
                                 
                                        <select class="form-control" name="categorytype" required>
                                        <option value="visualstories">Visual Stories</option>
                                        <option value="horoscope">Horoscope</option> 
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


                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>Choose Images <span style="color:red;">*</span><span style="color:red;font-size:12px;"> (Please Upload 720 X 1280 in Pixels Only)</span></label>
                                        <input required type="file" onchange="ValidateSize(this)" class="form-control" name="image" accept=".jpg,.png,.gif,.jpeg"> 
                                    </div>
                                
                                    <div class="col-md-6 form-group">
                                        <label>Story Description</label>
                                        <!-- <textarea class="summernote"  name="description" rows="4" cols="50" ></textarea>  -->

                                        <textarea  required placeholder="Enter Story Description" class="summernote"name="sdescription"></textarea> 
                              
                                </div>
                    <div class="col-md-6 form-group">
                         <label>Status</label>
                        <select class="form-control" name="status">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
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
        </div>
    </div>
</div>

@endsection
