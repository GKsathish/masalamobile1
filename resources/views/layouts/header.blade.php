<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Mobile Masala - Admin </title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
<link rel="shortcut icon" href="assets/images/favicon.png">
        
<!--Chartist Chart CSS -->
{{-- <link rel="stylesheet" href="plugins/chartist/css/chartist.min.css"> --}}

 <!-- App css -->
 <!-- Magnific popup -->
<link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css" />

<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- DataTables -->
<link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.0.0/css/fixedColumns.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
]

<!-- Responsive datatable examples -->
<link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="assets/summernote/summernote-bs4.css" id="theme-style" />

    </head>
<body>
    <div id="wrapper">
         <!-- Top Bar Start -->
   <div class="topbar">

<!-- LOGO -->
<div class="topbar-left">
<a href="{{'/'}}" class="logo">
        <span>
                <img src="assets/images/logo.png" alt="" style="width: 210px;">
                {{-- <img src="assets/images/logo.png" alt="" height="18"> --}}
            </span>
        <i>
                <img src="assets/images/favicon.png" alt="" height="22">
                {{-- <img src="assets/images/logo-sm.png" alt="" height="22"> --}}
            </i>
    </a>
</div>

<nav class="navbar-custom">
    <ul class="navbar-right d-flex list-inline float-right mb-0">
       
        <li class="dropdown notification-list">
            <div class="dropdown notification-list nav-pro-img">
                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="assets/images/admin.jpg" alt="user" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->                
                    <a class="dropdown-item d-block" href="{{url('/changePassword')}}"><i class="mdi mdi-settings m-r-5"></i>Change Password</a>

                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="mdi mdi-power text-danger"></i> Logout</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
                </div>
            </div>
        </li>

    </ul>

    <ul class="list-inline menu-left mb-0">
        <li class="float-left">
            <button class="button-menu-mobile open-left waves-effect">
                <i class="mdi mdi-menu"></i>
            </button>
        </li>
       
    </ul>

</nav>

</div>
<!-- Top Bar End -->
<?php $roleid = Session::get('roleid'); ?>
         <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">&nbsp;</li>
                            <?php 
                            
                            $post_permit = '';
                            $rss_permit = '';
                            $vs_permit = '';
                            $trending_permit = '';
                            $paparazzi_permit = '';
                            
                            $post_access_details = DB::table('permissions')->where('role_id', $roleid)->where('module_id','2')->get();
                            $rss_access_details = DB::table('permissions')->where('role_id', $roleid)->where('module_id','3')->get();
                            $vs_access_details = DB::table('permissions')->where('role_id', $roleid)->where('module_id','4')->get();
                            $trending_access_details = DB::table('permissions')->where('role_id', $roleid)->where('module_id','5')->get();
                            $paparazzi_access_details = DB::table('permissions')->where('role_id', $roleid)->where('module_id','6')->get();
                            
                            
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
                            foreach($trending_access_details as $permit)
                            {
                                $trending_permit = $permit->access;
                                $trending_permit_edit = $permit->edit;
                                $trending_permit_delete = $permit->delete;
                                $trending_permit_add = $permit->add;
                            }
                            foreach($paparazzi_access_details as $permit)
                            {
                                $paparazzi_permit = $permit->access;
                                $paparazzi_permit_edit = $permit->edit;
                                $paparazzi_permit_delete = $permit->delete;
                                $paparazzi_permit_add = $permit->add;
                            }
                            ?>
                           
                            
                            <li>
                                <a href="{{url('dashboard')}}" class="waves-effect">
                                    <i class="ti-home"></i><span> Dashboard </span>
                                </a>
                            </li>
                            
                            @if($post_permit == '1' || $roleid == '0')
                            <li>
                                <a href="{{url('posts')}}" class="waves-effect"><i class="fa fa-file-image-o" aria-hidden="true"></i><span> Posts </span></a>
                            </li>
                            @endif
                            @if($paparazzi_permit == '1' || $roleid == '0')
                            <li>
                                <a href="{{url('paparazzi')}}" class="waves-effect"><i class="fa fa-file-image-o" aria-hidden="true"></i><span> Paparazzi Posts</span></a>
                            </li>
                            @endif
                            
                            @if($rss_permit == '1' || $roleid == '0')
                            <li>
                                    <a href="{{url('rss-feed')}}" class="waves-effect"><i class="fas fa-video-camera"></i><span> RSS Details </span></a>
                                   
                                </li>
                            @endif
                            @if($vs_permit == '1' || $roleid == '0')
                                <li>
                                    <a href="{{url('visualstories')}}" class="waves-effect"><i class="fas fa-quote-left"></i><span> Visual Stories </span></a>
                                   
                                </li>
                            @endif
                            @if($trending_permit == '1' || $roleid == '0')
                                <li>
                                    <a href="{{url('trending')}}" class="waves-effect"><i class="fas fa-newspaper"></i><span> Trending News </span></a>
                                   
                                </li>
                            @endif
                               
                                @if($roleid == 0)
                                <li>
                                    <a href="{{url('roles')}}" class="waves-effect"><i class="fas fa-newspaper"></i><span> Roles </span></a>
                                   
                                </li>
                                @endif
                                @if($roleid == 0)
                                <li>
                                    <a href="{{url('create-user')}}" class="waves-effect"><i class="fas fa-newspaper"></i><span> Create Users </span></a>
                                   
                                </li>
                                @endif
                                <!-- <li>
                                    <a href="{{url('trending')}}" class="waves-effect"><i class="fas fa-newspaper"></i><span> Role Permissions </span></a>
                                   
                                </li> -->

                                <!-- <li>
                                    <a href="{{url('settings')}}" class="waves-effect"><i class="fa fa-cog" aria-hidden="true"></i><span> Settings </span></a>
                                    
                                </li> -->
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
                @yield('content')

            <footer class="footer">
                    ©  <?php echo date("Y");?> Mobile Masala
               </footer>  
                       <!-- App's Basic Js  -->
               <script src="assets/js/jquery.min.js"></script>
               <script src="assets/js/bootstrap.bundle.min.js"></script>
               <script src="assets/js/metisMenu.min.js"></script>
               <script src="assets/js/jquery.slimscroll.js"></script>
               <script src="assets/js/waves.min.js"></script>
               
                <!--Chartist Chart-->
               {{-- <script src="plugins/chartist/js/chartist.min.js"></script>
               <script src="plugins/chartist/js/chartist-plugin-tooltip.min.js"></script> --}}
               <!-- peity JS -->
               <script src="plugins/peity-chart/jquery.peity.min.js"></script>
               {{-- <script src="assets/pages/dashboard.js"></script> --}}
                <!-- magnific Popup -->
<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>


<!-- Required datatable js -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="plugins/datatables/dataTables.buttons.min.js"></script>
<script src="plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="plugins/datatables/jszip.min.js"></script>
<script src="plugins/datatables/pdfmake.min.js"></script>
<script src="plugins/datatables/vfs_fonts.js"></script>
<script src="plugins/datatables/buttons.html5.min.js"></script>
<script src="plugins/datatables/buttons.print.min.js"></script>
<script src="plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="plugins/datatables/dataTables.responsive.min.js"></script>
<script src="plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/pages/datatables.init.js"></script>   
<!-- App js-->
<script src="assets/js/app.js"></script>
<script src="assets/js/multiselect-drop.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<script src="https://cdn.jsdelivr.net/gh/dmuy/duDatepicker/duDatepicker.min.js"></script>
<script src="assets/summernote/summernote-bs4.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>



<script>
  $(function(){
    'use strict';

        // Summernote editor
        $('.summernote').summernote({
            height: 150,
          tooltip: false
      })
      $('.add_another').click(function(){
        $('.summernote').summernote({
            height: 150,
          tooltip: false
      })
      })
    });

</script>
<script>
 $("#filtercategoryname").change(function() {
        console.log("Working");
        $.ajax({
            url: '{{ url('sessionfilter') }}',
            method: "POST",
            data: {filtercategoryname: $("#filtercategoryname").val(),
            _token: '{{ csrf_token() }}'},
            dataType: "json",
            success: function (response) {  
                console.log(response.value);            
                $info = response.data;
                //console.log($info);            
            }
        });
   });


$('.add_another').click(function(){
    $('.storyadd').append(' <div class="row"><div class="col-md-6 form-group"><label>Title</label><input type="text" class="form-control"  placeholder="Enter Title" name="ttitle[]" value=""/></div><div class="col-md-6 form-group"><label>Choose Images</label><input required type="file" onchange="ValidateSize(this)" class="form-control" name="image[]" accept=".jpg,.png,.gif,.jpeg"></div></div><div class="row"><div class="col-md-6 form-group"><label>Story Description</label><textarea class="summernote" name="storydesc[]"></textarea></div></div>')
});

$(document).ready(function()
{
   
    $('#publish').click(function()
    {
      
        // $(".posts:checked").each(function(){
        //     // yourArray.push($(this).val());
        //     console.log($(this).val());
            
        //     DB::table('post')->where('postid', $id)
        //                     ->update(['status'     => 'Publish']);
        //                     echo "updated";
        //                     ?>
        // });
        
    });
});
$('#publish').click(function () {
   if( confirm('Are you Sure Want to Publish the Selected Posts?'))
   {
        var selectedlist = [];
        $('.posts:checked').each(function () {
                selectedlist.push($(this).val());
        });
        console.log(selectedlist);
        $.ajax({
        type: 'POST',
        url: '{{url("posts-pending")}}',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: { list: selectedlist}, //Add request data
        success: function (data) {
            //console.log(data);
            alert('Published Successfully');
            location.reload('send_noti');
        }    });
        
    }
  
});
</script>
<script>
    $('.permission-save').click(function(){
        //console.log("Working");
        // $('input[type="checkbox"]:checked').each(function() {
        //     console.log(this.name);
        // });
        // $('input[type="checkbox]:unchecked').each(function() {
        //     console.log(this.name);
        // });
    })
    $('.rssdetail').click(function(){
        $('#rssdetails').text('');
        $.ajax({
        type: 'POST',
        url: '{{url("get-user-rss")}}',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: { rss: $(this).val()}, //Add request data
        success: function (data) {
            //console.log(data);

            var values = data.value;
            //console.log(values)
            $count = 1;
            if(data.success == true)
            {
                $.each(values,function(key,val){
                    //console.log(val);
                    $('#rssdetails').append('<tr><td>'+$count+'</td><td>'+val.categoryname+'</td><td>'+val.rssname+'</td></tr>')
                    $count ++;
                })
                
            }
        }    });
    })
</script>

        </div> 
        
        <style>
                .text-white-50 {
                color: white !important;
                }
                .center-value {
                border: none !important;
                font-size: 30px !important;
                color: green !important;
                font-weight: 600 !important;
                }
                </style>
                        
        </body>
        </html>
