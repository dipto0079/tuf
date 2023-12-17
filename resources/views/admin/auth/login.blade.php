@extends('admin.auth.master')
@section('content')
    <div class="row justify-content-center g-0">
        <div class="col-lg-5 col-md-5 col-12">
            <div class="bg-white rounded10 shadow-lg">
                <div class="content-top-agile p-20 pb-0">
                    <h2 class="text-primary">Let's Get Started</h2>
                    <p class="mb-0">Sign in to continue to WebkitX.</p>
                </div>
                <div class="p-40">
                    <form action="{{route('admin.postLogin')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-transparent"><i class="fa fa-user"></i></span>
                                <input type="email" class="form-control ps-15 bg-transparent" name="email" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <span class="input-group-text  bg-transparent"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" class="form-control ps-15 bg-transparent" placeholder="Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="checkbox">
                                    <input type="checkbox" id="basic_checkbox_1" >
                                    <label for="basic_checkbox_1">Remember Me</label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                                <div class="fog-pwd text-end">
                                    {{--                                    <a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>--}}
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
