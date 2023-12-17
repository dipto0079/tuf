@extends('admin.master')

@section('content')
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">Team</h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Forms</li>
                            <li class="breadcrumb-item active" aria-current="page">Team</li>
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
                          action="{{route('teamUpdate')}}" method="POST" enctype="multipart/form-data">
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
                                                    <label> name </label>
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
                                                    <label> Title </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-label">
                                                    <input type="text"
                                                           name="title"
                                                           class="form-control" placeholder="Title"
                                                           value="{{isset($test)?$test->title:old('title')}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group has-label">
                                                    <label> Facebook Url </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-label">
                                                    <input type="text"
                                                           name="facebook_url"
                                                           class="form-control" placeholder="Facebook Url"
                                                           value="{{isset($test)?$test->facebook_url:old('facebook_url')}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group has-label">
                                                    <label> Twitter Url</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-label">
                                                    <input type="text"
                                                           name="twitter_url"
                                                           class="form-control" placeholder="Twitter Url"
                                                           value="{{isset($test)?$test->twitter_url:old('twitter_url')}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group has-label">
                                                    <label> LinkedIn Url</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-label">
                                                    <input type="text"
                                                           name="linked_in_url"
                                                           class="form-control" placeholder="LinkedIn Url"
                                                           value="{{isset($test)?$test->linked_in_url:old('linked_in_url')}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group has-label">
                                                    <label> Other Url</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-label">
                                                    <input type="text"
                                                           name="other_url"
                                                           class="form-control" placeholder="Other Url"
                                                           value="{{isset($test)?$test->other_url:old('other_url')}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group has-label">
                                                    <label> Image</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-label">
                                                    <input type="file"
                                                           name="image"
                                                           class="form-control" placeholder="Image"
                                                           value="{{isset($test)?$test->image:old('image')}}">
                                                </div>
                                            </div>
                                        </div>


                                        default
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group has-label">
                                                    <label> Status </label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-label">
                                                    <select class="form-control" required name="status">
                                                        <option @if(isset($test) && $test->status==1) selected
                                                                @endif value="1">Active
                                                        </option>
                                                        <option @if(isset($test) && $test->status==0) selected
                                                                @endif value="0">In-Active
                                                        </option>
                                                    </select>
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


