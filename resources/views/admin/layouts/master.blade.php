<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>いばらき文化振興財団</title>
    <link href="{{url('source/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('source/css/style.css')}}" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> 
</head>
<body>
@include('admin.layouts.header')
<div class="content">
    <div class="row">
            @include('admin.layouts.sidebar')
            @yield('content')
    </div>
</div>

@include('admin.layouts.footer')
<script src="{{url('source/js/bootstrap.min.js')}}"></script>
<script src="{{url('source/js/admin.js')}}"></script>     
</body>
</html>