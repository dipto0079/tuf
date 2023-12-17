@extends('admin.master')

@section('content')
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">Favorite Settings</h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Forms</li>
                            <li class="breadcrumb-item active" aria-current="page">Homes</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="box">
                    <form class="form"
                          action="{{route('cUpdate')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($test))
                            <input type="hidden" name="id" value="{{$test->id}}">
                        @endif
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group has-label">
                                                    <label> Name </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-label">
                                                    <input type="text"
                                                           name="name"
                                                           class="form-control" placeholder="Name"
                                                           value="{{isset($test)?$test->name:old('name')}}">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group has-label">
                                                    <label> Username </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-label">
                                                    <input type="text"
                                                           name="username"
                                                           class="form-control" placeholder="Username"
                                                           value="{{isset($test)?$test->username:old('username')}}">
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group has-label">
                                                    <label> Email </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-label">
                                                    <input type="text"
                                                           name="email"
                                                           class="form-control" placeholder="Email"
                                                           value="{{isset($test)?$test->email:old('email')}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group has-label">
                                                    <label> Number </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-label">
                                                    <input type="text"
                                                           name="number"
                                                           class="form-control" placeholder="Number"
                                                           value="{{isset($test)?$test->number:old('number')}}">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group has-label">
                                                    <label> Country </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-label">
                                                    <input type="text"
                                                           name="country"
                                                           class="form-control" placeholder="Country"
                                                           value="{{isset($test)?$test->country:old('country')}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group has-label">
                                                    <label> Address </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-label">
                                                    <input type="text"
                                                           name="address"
                                                           class="form-control" placeholder="Address"
                                                           value="{{isset($test)?$test->address:old('address')}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group has-label">
                                                    <label> State </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-label">
                                                    <input type="text"
                                                           name="state"
                                                           class="form-control" placeholder="State"
                                                           value="{{isset($test)?$test->state:old('state')}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group has-label">
                                                    <label> City </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-label">
                                                    <input type="text"
                                                           name="city"
                                                           class="form-control" placeholder="City"
                                                           value="{{isset($test)?$test->city:old('city')}}">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group has-label">
                                                    <label> Zip Code </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-label">
                                                    <input type="number"
                                                           name="zip"
                                                           class="form-control" placeholder="Zip Code"
                                                           value="{{isset($test)?$test->zip:old('zip')}}">
                                                </div>
                                            </div>
                                        </div>

                                       

                                        <div class="row">
                                            <div class="col-md-1">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="ti-save-alt"></i> Save
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

@endsection


