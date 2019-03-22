@extends('frontView.master')

@section('css')
<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/jquery.datepicker.css">
        <link rel="stylesheet"  href="{{asset('frontend')}}/assets/css/style.css">
        <link rel="stylesheet"  href="{{asset('frontend')}}/assets/css/responsive.css">
        <link rel="shortcut icon" href="{{asset('frontend')}}/assets/favicon/TheShahibiens.jpg" type="image/x-icon"/>
@endsection

@section('js')
   <script src="{{asset('frontend')}}/assets/js/jquery.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/owl.carousel.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/jquery.datepicker.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/turn.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/main.js"></script>

@endsection