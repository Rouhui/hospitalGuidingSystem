<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>导医系统-首页</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/default.css') }}">
</head>
<body>
@section('header')
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="logo pull-left">
                        <a href="#">
                            <img src="{{ asset('images/logo.png') }}">
                        </a>
                    </h1>
                    <div class="pull-right user">
                        <i class="icon-user"></i><span>患者<a href="#" onclick="login()">登录</a> / <a href="#" onclick="register()">注册</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@show

@section('navbar')
    <div class="topmenu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav navbar-nav menu">
                        <li class="{{ Request::getPathInfo() == '/'? 'active': '' }}"><a href="{{ url('/')}}">首页</a></li>
                        <li class="{{ strstr( Request::getPathInfo(), '/Home/About')? 'active': '' }}"><a href="{{ url('Home/About')}}">医院介绍</a></li>
                        <li class="{{ strstr( Request::getPathInfo(), '/Home/Department')? 'active': '' }}"><a href="{{ url('Home/Department')}}">科室设置</a></li>
                        <li class="{{ strstr( Request::getPathInfo(), '/Home/Expert')? 'active': '' }}"><a href="{{ url('Home/Expert')}}">专家团队</a></li>
                        <li class="dropdown {{ strstr( Request::getPathInfo(), '/Home/Service') ? 'active': '' }}" id="navbar-item">
                            <a href="{{ url('Home/Service/schedule')}}" class="dropdown-toggle" data-toggle="dropdown" role="button"  aria-haspopup="true" aria-expanded="false">便民服务<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">智能导诊</a></li>
                                <li><a href="#">门诊排班</a></li>
                                <li><a href="#">价格查询</a></li>
                                <li><a href="#">费用清单查询</a></li>
                                <li><a href="#">检验检查查询</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@show

@yield('banner')

<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>

@section('footer')
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </div>
@show

@include('layouts.login')
@include('layouts.register')

<!-- 遮罩层 -->
<div id="mask" onclick="cancelLogin()"></div>

<!-- jQuery 文件 -->
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<!-- Bootstrap JavaScript 文件 -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/default.js') }}"></script>

</body>
</html>