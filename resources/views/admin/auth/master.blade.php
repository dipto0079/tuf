<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('admin/images/favicon.ico')}}">
    <title>Admin </title>
    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{asset('admin/css/vendors_css.css')}}">
    <!-- Style-->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/skin_color.css')}}">
</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(../images/auth-bg/bg-1.jpg)">
<div class="container h-p100">
    <div class="row align-items-center justify-content-md-center h-p100">
        <div class="col-12">
            @yield('content')
        </div>
    </div>
</div>


<!-- Vendor JS -->
<script src="{{asset('admin/js/vendors.min.js')}}"></script>
<script src="{{asset('admin/js/pages/chat-popup.js')}}"></script>
<script src="{{asset('assets/icons/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('assets/vendor_components/sweetalert/sweetalert.min.js')}}"></script>
<script>
    @if(Session::has("dismiss"))
    swal("Failed!", "{{Session::get("dismiss")}}", "error")
    @endif
    @if(Session::has("success"))
    swal("Success!", "{{Session::get("success")}}", "success")
    @endif
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    swal("Failed!", "{{$error}}", "error")
    @endforeach
    @endif
</script>
{{--<script src="{{asset('assets/vendor_components/sweetalert/jquery.sweet-alert.custom.js')}}"></script>--}}
</body>
</html>
