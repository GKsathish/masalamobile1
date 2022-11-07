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
                        <h4 class="page-title">Change Password</h4>

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

                            <div class="m-b-30">
                <form method="post" action="change_password" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Current Password</label>
                        <input type="password" class="form-control" required placeholder="" name="old_password" value=""/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>New Password</label>
                        <input type="password" class="form-control" id="new_password" required placeholder="" name="new_password" value=""/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" required placeholder="" name="confirm_password" value=""/>
                    </div>
                    <div style="color:red;font-weight: 800" id="CheckPasswordMatch1"></div>
                     <script>
                    function checkPasswordMatch1() {
                        var password = $("#new_password").val();
                        var confirmPassword = $("#confirm_password").val();
                        if (password != confirmPassword)
                            $("#CheckPasswordMatch1").html("Passwords does not match!").css("color", "red");
                        else
                             $("#CheckPasswordMatch1").html("Passwords match.").css("color", "green");
                    }
                    $(document).ready(function () {
                       $("#confirm_password").keyup(checkPasswordMatch1);
                    });
                    </script>
                </div>

                <button type="submit" class="btn btn-primary">Change Password</button>
            </form>

                                </div>
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
<script type='text/javascript' src='assets/front_end/js/jquery.js'></script>
@endsection
