<!DOCTYPE html>
<html lang="{{ \App::getLocale() }}">
<head>
    <title>Frequently Asked Questions</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    @yield('style')
</head>
<body>
<div class="container" style="padding:15px;">
    @if(session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session()->has('danger'))
        <div class="alert alert-success">{{ session('danger') }}</div>
    @endif
    @yield('content')
</div>
<script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@yield('script')
        <!-- Footer -->
@yield('footer')
<br><br>

</body>
@include('common.footer')
</html>
