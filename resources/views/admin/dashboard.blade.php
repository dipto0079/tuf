@extends('admin.master')
@section('content')
    <div class="row">
        {{--        <div class="col-xl-9 col-12">--}}
        {{--            <div class="box">--}}
        {{--                <div class="box-body p-0">--}}
        {{--                    <div class="flexbox align-items-center p-15">--}}
        {{--                        <div class="flexbox align-items-center">--}}
        {{--                            <div class="custom-control custom-checkbox ps-0">--}}
        {{--                                <button type="button" class="btn btn-primary btn-round checkbox-toggle"><i class="ion ion-android-checkbox-outline-blank"></i></button>--}}
        {{--                            </div>--}}

        {{--                            <span class="divider-line mx-1"></span>--}}

        {{--                            <div class="dropdown">--}}
        {{--                                <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" href="#" aria-expanded="false">Move to</button>--}}
        {{--                                <div class="dropdown-menu">--}}
        {{--                                    <a class="dropdown-item" href="#"><span class="badge badge-ring badge-danger me-1"></span> Work</a>--}}
        {{--                                    <a class="dropdown-item" href="#"><span class="badge badge-ring badge-warning me-1"></span> Family</a>--}}
        {{--                                    <a class="dropdown-item" href="#"><span class="badge badge-ring badge-info me-1"></span> Friends</a>--}}
        {{--                                    <a class="dropdown-item" href="#"><span class="badge badge-ring badge-success me-1"></span> Private</a>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                            <div class="dropdown d-none d-sm-block">--}}
        {{--                                <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" href="#" aria-expanded="false">Sort by</button>--}}
        {{--                                <div class="dropdown-menu">--}}
        {{--                                    <a class="dropdown-item" href="#">Date</a>--}}
        {{--                                    <a class="dropdown-item" href="#">Name</a>--}}
        {{--                                    <a class="dropdown-item" href="#">Group</a>--}}
        {{--                                    <a class="dropdown-item" href="#">Popular</a>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}

        {{--                        <div>--}}
        {{--                            <div class="lookup lookup-circle lookup-right">--}}
        {{--                                <input type="text" data-provide="media-search">--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <!-- /.box-body -->--}}
        {{--            </div>--}}
        {{--            <div class="row">--}}
        {{--                <div class="col-lg-6 col-12">--}}
        {{--                    <div class="box">--}}
        {{--                        <div class="box-body">--}}
        {{--                            <div class="media-list media-list-divided media-list-hover">--}}

        {{--                                <div class="media align-items-center">--}}
        {{--                                    <div class="custom-control custom-checkbox">--}}
        {{--                                        <input type="checkbox" class="custom-control-input">--}}
        {{--                                    </div>--}}

        {{--                                    <div class="app-contact-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></div>--}}

        {{--                                    <span class="badge badge-dot badge-danger"></span>--}}

        {{--                                    <a class="flexbox flex-grow gap-items text-truncate" href="#qv-user-details" data-toggle="quickview">--}}
        {{--                                        <img class="avatar" src="../images/avatar/1.jpg" alt="...">--}}

        {{--                                        <div class="media-body text-truncate">--}}
        {{--                                            <h6>Sophia</h6>--}}
        {{--                                            <small>--}}
        {{--                                                <span>Sophia@gmail.com</span>--}}
        {{--                                                <span class="divider-dash">(123) 456-7980</span>--}}
        {{--                                            </small>--}}
        {{--                                        </div>--}}
        {{--                                    </a>--}}

        {{--                                    <div class="dropdown">--}}
        {{--                                        <a class="text-fade" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>--}}
        {{--                                        <div class="dropdown-menu dropdown-menu-end">--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-commenting"></i> Message</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-envelope"></i> Email</a>--}}
        {{--                                            <div class="dropdown-divider"></div>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-trash"></i> Delete</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="media align-items-center">--}}
        {{--                                    <div class="custom-control custom-checkbox">--}}
        {{--                                        <input type="checkbox" class="custom-control-input">--}}
        {{--                                    </div>--}}

        {{--                                    <div class="app-contact-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></div>--}}

        {{--                                    <span class="badge badge-dot badge-danger opacity-0"></span>--}}

        {{--                                    <a class="flexbox flex-grow gap-items text-truncate" href="#qv-user-details" data-toggle="quickview">--}}
        {{--                                        <img class="avatar" src="../images/avatar/2.jpg" alt="...">--}}

        {{--                                        <div class="media-body text-truncate">--}}
        {{--                                            <h6>Isabella</h6>--}}
        {{--                                            <small>--}}
        {{--                                                <span>Isabella@gmail.com</span>--}}
        {{--                                                <span class="divider-dash">(256) 875-6579</span>--}}
        {{--                                            </small>--}}
        {{--                                        </div>--}}
        {{--                                    </a>--}}


        {{--                                    <div class="dropdown">--}}
        {{--                                        <a class="text-fade" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>--}}
        {{--                                        <div class="dropdown-menu dropdown-menu-end">--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-commenting"></i> Message</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-envelope"></i> Email</a>--}}
        {{--                                            <div class="dropdown-divider"></div>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-trash"></i> Delete</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="media align-items-center">--}}
        {{--                                    <div class="custom-control custom-checkbox">--}}
        {{--                                        <input type="checkbox" class="custom-control-input">--}}
        {{--                                    </div>--}}

        {{--                                    <div class="app-contact-star"> <a href="#"><i class="fa fa-star-o text-yellow"></i></a></div>--}}

        {{--                                    <span class="badge badge-dot badge-warning"></span>--}}

        {{--                                    <a class="flexbox flex-grow gap-items text-truncate" href="#qv-user-details" data-toggle="quickview">--}}
        {{--                                        <img class="avatar" src="../images/avatar/3.jpg" alt="...">--}}

        {{--                                        <div class="media-body text-truncate">--}}
        {{--                                            <h6>Emma</h6>--}}
        {{--                                            <small>--}}
        {{--                                                <span>Emma@gmail.com</span>--}}
        {{--                                                <span class="divider-dash">(123) 456-7890</span>--}}
        {{--                                            </small>--}}
        {{--                                        </div>--}}
        {{--                                    </a>--}}

        {{--                                    <div class="dropdown">--}}
        {{--                                        <a class="text-fade" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>--}}
        {{--                                        <div class="dropdown-menu dropdown-menu-end">--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-commenting"></i> Message</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-envelope"></i> Email</a>--}}
        {{--                                            <div class="dropdown-divider"></div>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-trash"></i> Delete</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="media align-items-center">--}}
        {{--                                    <div class="custom-control custom-checkbox">--}}
        {{--                                        <input type="checkbox" class="custom-control-input">--}}
        {{--                                    </div>--}}

        {{--                                    <div class="app-contact-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></div>--}}

        {{--                                    <span class="badge badge-dot badge-danger opacity-0"></span>--}}

        {{--                                    <a class="flexbox flex-grow gap-items text-truncate" href="#qv-user-details" data-toggle="quickview">--}}
        {{--                                        <img class="avatar" src="../images/avatar/4.jpg" alt="...">--}}

        {{--                                        <div class="media-body text-truncate">--}}
        {{--                                            <h6>Olivia</h6>--}}
        {{--                                            <small>--}}
        {{--                                                <span>Olivia@gmail.com</span>--}}
        {{--                                                <span class="divider-dash">(123) 456-7890</span>--}}
        {{--                                            </small>--}}
        {{--                                        </div>--}}
        {{--                                    </a>--}}

        {{--                                    <div class="dropdown">--}}
        {{--                                        <a class="text-fade" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>--}}
        {{--                                        <div class="dropdown-menu dropdown-menu-end">--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-commenting"></i> Message</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-envelope"></i> Email</a>--}}
        {{--                                            <div class="dropdown-divider"></div>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-trash"></i> Delete</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="media align-items-center">--}}
        {{--                                    <div class="custom-control custom-checkbox">--}}
        {{--                                        <input type="checkbox" class="custom-control-input">--}}
        {{--                                    </div>--}}

        {{--                                    <div class="app-contact-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></div>--}}

        {{--                                    <span class="badge badge-dot badge-info"></span>--}}

        {{--                                    <a class="flexbox flex-grow gap-items text-truncate" href="#qv-user-details" data-toggle="quickview">--}}
        {{--                                        <img class="avatar" src="../images/avatar/default.jpg" alt="...">--}}

        {{--                                        <div class="media-body text-truncate">--}}
        {{--                                            <h6>Ava</h6>--}}
        {{--                                            <small>--}}
        {{--                                                <span>Ava@gmail.com</span>--}}
        {{--                                                <span class="divider-dash">(123) 456-7890</span>--}}
        {{--                                            </small>--}}
        {{--                                        </div>--}}
        {{--                                    </a>--}}


        {{--                                    <div class="dropdown">--}}
        {{--                                        <a class="text-fade" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>--}}
        {{--                                        <div class="dropdown-menu dropdown-menu-end">--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-commenting"></i> Message</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-envelope"></i> Email</a>--}}
        {{--                                            <div class="dropdown-divider"></div>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-trash"></i> Delete</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="media align-items-center">--}}
        {{--                                    <div class="custom-control custom-checkbox">--}}
        {{--                                        <input type="checkbox" class="custom-control-input">--}}
        {{--                                    </div>--}}

        {{--                                    <div class="app-contact-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></div>--}}

        {{--                                    <span class="badge badge-dot badge-info"></span>--}}

        {{--                                    <a class="flexbox flex-grow gap-items text-truncate" href="#qv-user-details" data-toggle="quickview">--}}
        {{--                                        <img class="avatar" src="../images/avatar/5.jpg" alt="...">--}}

        {{--                                        <div class="media-body text-truncate">--}}
        {{--                                            <h6>Emily</h6>--}}
        {{--                                            <small>--}}
        {{--                                                <span>Emily@gmail.com</span>--}}
        {{--                                                <span class="divider-dash">(123) 456-7890</span>--}}
        {{--                                            </small>--}}
        {{--                                        </div>--}}
        {{--                                    </a>--}}

        {{--                                    <div class="dropdown">--}}
        {{--                                        <a class="text-fade" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>--}}
        {{--                                        <div class="dropdown-menu dropdown-menu-end">--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-commenting"></i> Message</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-envelope"></i> Email</a>--}}
        {{--                                            <div class="dropdown-divider"></div>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-trash"></i> Delete</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="media align-items-center">--}}
        {{--                                    <div class="custom-control custom-checkbox">--}}
        {{--                                        <input type="checkbox" class="custom-control-input">--}}
        {{--                                    </div>--}}

        {{--                                    <div class="app-contact-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></div>--}}

        {{--                                    <span class="badge badge-dot badge-danger opacity-0"></span>--}}

        {{--                                    <a class="flexbox flex-grow gap-items text-truncate" href="#qv-user-details" data-toggle="quickview">--}}
        {{--                                        <img class="avatar" src="../images/avatar/6.jpg" alt="...">--}}

        {{--                                        <div class="media-body text-truncate">--}}
        {{--                                            <h6>Brandon</h6>--}}
        {{--                                            <small>--}}
        {{--                                                <span>brandon@gmail.com</span>--}}
        {{--                                                <span class="divider-dash">(123) 456-7890</span>--}}
        {{--                                            </small>--}}
        {{--                                        </div>--}}
        {{--                                    </a>--}}

        {{--                                    <div class="dropdown">--}}
        {{--                                        <a class="text-fade" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>--}}
        {{--                                        <div class="dropdown-menu dropdown-menu-end">--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-commenting"></i> Message</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-envelope"></i> Email</a>--}}
        {{--                                            <div class="dropdown-divider"></div>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-trash"></i> Delete</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="media align-items-center">--}}
        {{--                                    <div class="custom-control custom-checkbox">--}}
        {{--                                        <input type="checkbox" class="custom-control-input">--}}
        {{--                                    </div>--}}

        {{--                                    <div class="app-contact-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></div>--}}

        {{--                                    <span class="badge badge-dot badge-success"></span>--}}

        {{--                                    <a class="flexbox flex-grow gap-items text-truncate" href="#qv-user-details" data-toggle="quickview">--}}
        {{--                                        <img class="avatar" src="../images/avatar/8.jpg" alt="...">--}}

        {{--                                        <div class="media-body text-truncate">--}}
        {{--                                            <h6>Abigail</h6>--}}
        {{--                                            <small>--}}
        {{--                                                <span>Abigail@gmail.com</span>--}}
        {{--                                                <span class="divider-dash">(123) 456-7890</span>--}}
        {{--                                            </small>--}}
        {{--                                        </div>--}}
        {{--                                    </a>--}}

        {{--                                    <div class="dropdown">--}}
        {{--                                        <a class="text-fade" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>--}}
        {{--                                        <div class="dropdown-menu dropdown-menu-end">--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-commenting"></i> Message</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-envelope"></i> Email</a>--}}
        {{--                                            <div class="dropdown-divider"></div>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-trash"></i> Delete</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                            </div>--}}

        {{--                        </div>--}}
        {{--                        <!-- /.box-body -->--}}
        {{--                    </div>--}}
        {{--                    <!-- /. box -->--}}
        {{--                </div>--}}
        {{--                <div class="col-lg-6 col-12">--}}
        {{--                    <div class="box">--}}
        {{--                        <div class="box-body">--}}
        {{--                            <div class="media-list media-list-divided media-list-hover">--}}

        {{--                                <div class="media align-items-center">--}}
        {{--                                    <div class="custom-control custom-checkbox">--}}
        {{--                                        <input type="checkbox" class="custom-control-input">--}}
        {{--                                    </div>--}}

        {{--                                    <div class="app-contact-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></div>--}}

        {{--                                    <span class="badge badge-dot badge-danger"></span>--}}

        {{--                                    <a class="flexbox flex-grow gap-items text-truncate" href="#qv-user-details" data-toggle="quickview">--}}
        {{--                                        <img class="avatar" src="../images/avatar/9.jpg" alt="...">--}}

        {{--                                        <div class="media-body text-truncate">--}}
        {{--                                            <h6>Madison</h6>--}}
        {{--                                            <small>--}}
        {{--                                                <span>Madison@gmail.com</span>--}}
        {{--                                                <span class="divider-dash">(123) 456-7980</span>--}}
        {{--                                            </small>--}}
        {{--                                        </div>--}}
        {{--                                    </a>--}}

        {{--                                    <div class="dropdown">--}}
        {{--                                        <a class="text-fade" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>--}}
        {{--                                        <div class="dropdown-menu dropdown-menu-end">--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-commenting"></i> Message</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-envelope"></i> Email</a>--}}
        {{--                                            <div class="dropdown-divider"></div>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-trash"></i> Delete</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="media align-items-center">--}}
        {{--                                    <div class="custom-control custom-checkbox">--}}
        {{--                                        <input type="checkbox" class="custom-control-input">--}}
        {{--                                    </div>--}}

        {{--                                    <div class="app-contact-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></div>--}}

        {{--                                    <span class="badge badge-dot badge-danger opacity-0"></span>--}}

        {{--                                    <a class="flexbox flex-grow gap-items text-truncate" href="#qv-user-details" data-toggle="quickview">--}}
        {{--                                        <img class="avatar" src="../images/avatar/8.jpg" alt="...">--}}

        {{--                                        <div class="media-body text-truncate">--}}
        {{--                                            <h6>Mason</h6>--}}
        {{--                                            <small>--}}
        {{--                                                <span>Mason@gmail.com</span>--}}
        {{--                                                <span class="divider-dash">(256) 875-6579</span>--}}
        {{--                                            </small>--}}
        {{--                                        </div>--}}
        {{--                                    </a>--}}


        {{--                                    <div class="dropdown">--}}
        {{--                                        <a class="text-fade" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>--}}
        {{--                                        <div class="dropdown-menu dropdown-menu-end">--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-commenting"></i> Message</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-envelope"></i> Email</a>--}}
        {{--                                            <div class="dropdown-divider"></div>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-trash"></i> Delete</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="media align-items-center">--}}
        {{--                                    <div class="custom-control custom-checkbox">--}}
        {{--                                        <input type="checkbox" class="custom-control-input">--}}
        {{--                                    </div>--}}

        {{--                                    <div class="app-contact-star"> <a href="#"><i class="fa fa-star-o text-yellow"></i></a></div>--}}

        {{--                                    <span class="badge badge-dot badge-warning"></span>--}}

        {{--                                    <a class="flexbox flex-grow gap-items text-truncate" href="#qv-user-details" data-toggle="quickview">--}}
        {{--                                        <img class="avatar" src="../images/avatar/7.jpg" alt="...">--}}

        {{--                                        <div class="media-body text-truncate">--}}
        {{--                                            <h6>William</h6>--}}
        {{--                                            <small>--}}
        {{--                                                <span>William@gmail.com</span>--}}
        {{--                                                <span class="divider-dash">(123) 456-7890</span>--}}
        {{--                                            </small>--}}
        {{--                                        </div>--}}
        {{--                                    </a>--}}

        {{--                                    <div class="dropdown">--}}
        {{--                                        <a class="text-fade" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>--}}
        {{--                                        <div class="dropdown-menu dropdown-menu-end">--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-commenting"></i> Message</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-envelope"></i> Email</a>--}}
        {{--                                            <div class="dropdown-divider"></div>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-trash"></i> Delete</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="media align-items-center">--}}
        {{--                                    <div class="custom-control custom-checkbox">--}}
        {{--                                        <input type="checkbox" class="custom-control-input">--}}
        {{--                                    </div>--}}

        {{--                                    <div class="app-contact-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></div>--}}

        {{--                                    <span class="badge badge-dot badge-danger opacity-0"></span>--}}

        {{--                                    <a class="flexbox flex-grow gap-items text-truncate" href="#qv-user-details" data-toggle="quickview">--}}
        {{--                                        <img class="avatar" src="../images/avatar/6.jpg" alt="...">--}}

        {{--                                        <div class="media-body text-truncate">--}}
        {{--                                            <h6>Jayden</h6>--}}
        {{--                                            <small>--}}
        {{--                                                <span>Jayden@gmail.com</span>--}}
        {{--                                                <span class="divider-dash">(123) 456-7890</span>--}}
        {{--                                            </small>--}}
        {{--                                        </div>--}}
        {{--                                    </a>--}}

        {{--                                    <div class="dropdown">--}}
        {{--                                        <a class="text-fade" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>--}}
        {{--                                        <div class="dropdown-menu dropdown-menu-end">--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-commenting"></i> Message</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-envelope"></i> Email</a>--}}
        {{--                                            <div class="dropdown-divider"></div>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-trash"></i> Delete</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="media align-items-center">--}}
        {{--                                    <div class="custom-control custom-checkbox">--}}
        {{--                                        <input type="checkbox" class="custom-control-input">--}}
        {{--                                    </div>--}}

        {{--                                    <div class="app-contact-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></div>--}}

        {{--                                    <span class="badge badge-dot badge-info"></span>--}}

        {{--                                    <a class="flexbox flex-grow gap-items text-truncate" href="#qv-user-details" data-toggle="quickview">--}}
        {{--                                        <img class="avatar" src="../images/avatar/5.jpg" alt="...">--}}

        {{--                                        <div class="media-body text-truncate">--}}
        {{--                                            <h6>Noah</h6>--}}
        {{--                                            <small>--}}
        {{--                                                <span>Noah@gmail.com</span>--}}
        {{--                                                <span class="divider-dash">(123) 456-7890</span>--}}
        {{--                                            </small>--}}
        {{--                                        </div>--}}
        {{--                                    </a>--}}


        {{--                                    <div class="dropdown">--}}
        {{--                                        <a class="text-fade" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>--}}
        {{--                                        <div class="dropdown-menu dropdown-menu-end">--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-commenting"></i> Message</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-envelope"></i> Email</a>--}}
        {{--                                            <div class="dropdown-divider"></div>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-trash"></i> Delete</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="media align-items-center">--}}
        {{--                                    <div class="custom-control custom-checkbox">--}}
        {{--                                        <input type="checkbox" class="custom-control-input">--}}
        {{--                                    </div>--}}

        {{--                                    <div class="app-contact-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></div>--}}

        {{--                                    <span class="badge badge-dot badge-info"></span>--}}

        {{--                                    <a class="flexbox flex-grow gap-items text-truncate" href="#qv-user-details" data-toggle="quickview">--}}
        {{--                                        <img class="avatar" src="../images/avatar/4.jpg" alt="...">--}}

        {{--                                        <div class="media-body text-truncate">--}}
        {{--                                            <h6>Michael</h6>--}}
        {{--                                            <small>--}}
        {{--                                                <span>Michael@gmail.com</span>--}}
        {{--                                                <span class="divider-dash">(123) 456-7890</span>--}}
        {{--                                            </small>--}}
        {{--                                        </div>--}}
        {{--                                    </a>--}}

        {{--                                    <div class="dropdown">--}}
        {{--                                        <a class="text-fade" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>--}}
        {{--                                        <div class="dropdown-menu dropdown-menu-end">--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-commenting"></i> Message</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-envelope"></i> Email</a>--}}
        {{--                                            <div class="dropdown-divider"></div>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-trash"></i> Delete</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="media align-items-center">--}}
        {{--                                    <div class="custom-control custom-checkbox">--}}
        {{--                                        <input type="checkbox" class="custom-control-input">--}}
        {{--                                    </div>--}}

        {{--                                    <div class="app-contact-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></div>--}}

        {{--                                    <span class="badge badge-dot badge-danger opacity-0"></span>--}}

        {{--                                    <a class="flexbox flex-grow gap-items text-truncate" href="#qv-user-details" data-toggle="quickview">--}}
        {{--                                        <img class="avatar" src="../images/avatar/3.jpg" alt="...">--}}

        {{--                                        <div class="media-body text-truncate">--}}
        {{--                                            <h6>Ethan</h6>--}}
        {{--                                            <small>--}}
        {{--                                                <span>Ethan@gmail.com</span>--}}
        {{--                                                <span class="divider-dash">(123) 456-7890</span>--}}
        {{--                                            </small>--}}
        {{--                                        </div>--}}
        {{--                                    </a>--}}

        {{--                                    <div class="dropdown">--}}
        {{--                                        <a class="text-fade" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>--}}
        {{--                                        <div class="dropdown-menu dropdown-menu-end">--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-commenting"></i> Message</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-envelope"></i> Email</a>--}}
        {{--                                            <div class="dropdown-divider"></div>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-trash"></i> Delete</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="media align-items-center">--}}
        {{--                                    <div class="custom-control custom-checkbox">--}}
        {{--                                        <input type="checkbox" class="custom-control-input">--}}
        {{--                                    </div>--}}

        {{--                                    <div class="app-contact-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></div>--}}

        {{--                                    <span class="badge badge-dot badge-success"></span>--}}

        {{--                                    <a class="flexbox flex-grow gap-items text-truncate" href="#qv-user-details" data-toggle="quickview">--}}
        {{--                                        <img class="avatar" src="../images/avatar/2.jpg" alt="...">--}}

        {{--                                        <div class="media-body text-truncate">--}}
        {{--                                            <h6>Alexander</h6>--}}
        {{--                                            <small>--}}
        {{--                                                <span>Alexander@gmail.com</span>--}}
        {{--                                                <span class="divider-dash">(123) 456-7890</span>--}}
        {{--                                            </small>--}}
        {{--                                        </div>--}}
        {{--                                    </a>--}}

        {{--                                    <div class="dropdown">--}}
        {{--                                        <a class="text-fade" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>--}}
        {{--                                        <div class="dropdown-menu dropdown-menu-end">--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-commenting"></i> Message</a>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-envelope"></i> Email</a>--}}
        {{--                                            <div class="dropdown-divider"></div>--}}
        {{--                                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-trash"></i> Delete</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                            </div>--}}

        {{--                        </div>--}}
        {{--                        <!-- /.box-body -->--}}
        {{--                    </div>--}}
        {{--                    <!-- /. box -->--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="col-lg-3 col-12">--}}
        {{--            <div class="box no-shadow">--}}
        {{--                <div class="box-body">--}}
        {{--                    <div class="contact-page-aside">--}}
        {{--                        <ul class="list-style-none fs-16">--}}
        {{--                            <li class="box-label"><a href="javascript:void(0)">All Contacts <span>123</span></a></li>--}}
        {{--                            <li class="divider"></li>--}}
        {{--                            <li><a class="text-danger" href="javascript:void(0)">Work <span class="text-danger">103</span></a></li>--}}
        {{--                            <li><a class="text-warning" href="javascript:void(0)">Family <span class="text-warning">19</span></a></li>--}}
        {{--                            <li><a class="text-info" href="javascript:void(0)">Friends <span class="text-info">623</span></a></li>--}}
        {{--                            <li><a class="text-success" href="javascript:void(0)">Private <span class="text-success">53</span></a></li>--}}
        {{--                            <li class="box-label"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-success mt-10">+ Create New Label</a></li>--}}
        {{--                        </ul>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
@endsection
