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
                          action="{{route('pUpdate')}}" method="POST" enctype="multipart/form-data">
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
                                                    <label> Text_1 </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-label">
                                                    <input type="text"
                                                           name="text_1"
                                                           class="form-control" placeholder="Text_1"
                                                           value="{{isset($test)?$test->text_1:old('text_1')}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group has-label">
                                                    <label> Text_2 </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-label">
                                                    <input type="text"
                                                           name="text_2"
                                                           class="form-control" placeholder="Text_2"
                                                           value="{{isset($test)?$test->text_2:old('text_2')}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group has-label">
                                                    <label> Text_3 </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-label">
                                                    <input type="text"
                                                           name="text_3"
                                                           class="form-control" placeholder="Text_3"
                                                           value="{{isset($test)?$test->text_3:old('facebook_url')}}">
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


