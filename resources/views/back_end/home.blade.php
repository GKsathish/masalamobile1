<?php $roleid = Session::get('roleid'); ?>
<?php 
    $dashboard_permit='';
    $post_permit = '';
    $rss_permit = '';
    $vs_permit = '';
    $hs_permit = '';
    $trending_permit = '';
    $dashboard_access_details = DB::table('permissions')->where('role_id', $roleid)->where('module_id','1')->get();
    $post_access_details = DB::table('permissions')->where('role_id', $roleid)->where('module_id','2')->get();
    $rss_access_details = DB::table('permissions')->where('role_id', $roleid)->where('module_id','3')->get();
    $vs_access_details = DB::table('permissions')->where('role_id', $roleid)->where('module_id','4')->get();
    $hs_access_details = DB::table('permissions')->where('role_id', $roleid)->where('module_id','7')->get();

    $trending_access_details = DB::table('permissions')->where('role_id', $roleid)->where('module_id','5')->get();

    foreach($dashboard_access_details as $permit)
    {
        $dashboard_permit = $permit->access;
    }
    foreach($post_access_details as $permit)
    {
        $post_permit = $permit->access;
        $post_permit_edit = $permit->edit;
        $post_permit_delete = $permit->delete;
        $post_permit_add = $permit->add;
    }
    foreach($rss_access_details as $permit)
    {
        $rss_permit = $permit->access;
        $rss_permit_edit = $permit->edit;
        $rss_permit_delete = $permit->delete;
        $rss_permit_add = $permit->add;
    }
    foreach($vs_access_details as $permit)
    {
        $vs_permit = $permit->access;
        $vs_permit_edit = $permit->edit;
        $vs_permit_delete = $permit->delete;
        $vs_permit_add = $permit->add;
    }

    foreach($hs_access_details as $permit)
    {
        $hs_permit = $permit->access;
        $hs_permit_edit = $permit->edit;
        $hs_permit_delete = $permit->delete;
        $hs_permit_add = $permit->add;
    }
    foreach($trending_access_details as $permit)
    {
        $trending_permit = $permit->access;
        $trending_permit_edit = $permit->edit;
        $trending_permit_delete = $permit->delete;
        $trending_permit_add = $permit->add;
    }
?>
@if(session()->has('userid'))
   
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
     <h4 class="page-title">Dashboard</h4>
     <ol class="breadcrumb">
         <li class="breadcrumb-item active">Welcome to Mobile Masala </li>
     </ol>
</div>
            
    </div>
</div>
<!-- end row -->
@php
    
    $post = DB::table('post')->count();
    $rss = DB::table('rss')->where('status', '=', 'Active')->count();
    $category = DB::table('category')->count();
    $story = DB::table('v_stories')->where('status', '=', 'Active')->count();
    $Hstory = DB::table('H_stories')->where('status', '=', 'Active')->count();


@endphp


                        <div class="row">
                        @if($post_permit == '1'  || $roleid == '0')
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-danger text-white">
                                    <div class="card-body">
                                        <a href="posts">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/01.png" alt="" >
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Posts</h5>
                                        <h4 class="font-500" style="color:#fff;">{{ $post }}</h4>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($rss_permit == '1'  || $roleid == '0')
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-secondary text-white">
                                    <div class="card-body">
                                        <a href="rss-feed">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/02.png" alt="" >
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">RSS Details</h5>
                                        <h4 class="font-500" style="color:#fff;">{{ $rss }}</h4>
                                          
                                        </div>
                                    </a>
                                   
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($vs_permit == '1'  || $roleid == '0')
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-info text-white">
                                    <div class="card-body">
                                        <a href="visualstories">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/02.png" alt="" >
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Visual Stories</h5>
                                        <h4 class="font-500" style="color:#fff;">{{ $story }}</h4>
                                           
                                        </div>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            @endif
                           
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-success text-white">
                                    <div class="card-body">
                                        <a href="dashboard">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/02.png" alt="" >
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Categories</h5>
                                        <h4 class="font-500" style="color:#fff;">{{ $category }}</h4>  
                                        </div>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($hs_permit == '1'  || $roleid == '0')
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-info text-white">
                                    <div class="card-body">
                                        <a href="horoscopestories   ">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/02.png" alt="" >
                                            </div>
                                            <h5 class="font-14 text-uppercase mt-0 text-white-50">Horoscope Stories</h5>
                                        <h4 class="font-500" style="color:#fff;">{{ $Hstory }}</h4>
                                           
                                        </div>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        <!-- end row -->
                </div> 
            </div> 
        </div> 

        @endsection