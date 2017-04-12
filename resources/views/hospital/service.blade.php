@extends('layouts.main')

@section('banner')
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('images/banner-service.png') }}" alt="placeholder+image">
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="col-md-3">
        <div class="left-part">
            <div class="list-group">
                <a href="{{ route('service',['type'=>'guiding']) }}" class="list-group-item {{ Request::getPathInfo() == '/Home/Service'? 'active': '' }}"><i class="icon-stethoscope"></i>智能导诊</a>
                <a href="{{ route('service',['type'=>'schedule']) }}" class="list-group-item {{ Request::getPathInfo() == '/Home/Service/schedule'? 'active': '' }}"><i class="icon-user-md"></i>门诊排班</a>
                <a href="{{ route('service',['type'=>'queryMedicalPrice']) }}" class="list-group-item {{ Request::getPathInfo() == '/Home/Service/queryMedicalPrice'? 'active': '' }}"><i class="icon-stethoscope"></i>药品价格</a>
                <a href="{{ route('service',['type'=>'queryTreatmentPrice']) }}" class="list-group-item {{ Request::getPathInfo() == '/Home/Service/queryTreatmentPrice'? 'active': '' }}"><i class="icon-stethoscope"></i>医疗价格</a>
                <a href="{{ route('service',['type'=>'queryBill']) }}" class="list-group-item {{ Request::getPathInfo() == '/Home/Service/queryBill'? 'active': '' }}"><i class="icon-stethoscope"></i>费用清单查询</a>
                <a href="{{ route('service',['type'=>'queryReport']) }}" class="list-group-item {{ Request::getPathInfo() == '/Home/Service/queryReport'? 'active': '' }}"><i class="icon-list-alt"></i>检查单/检验单查询</a>
                <a href="{{ route('service',['type'=>'print']) }}" class="list-group-item {{ Request::getPathInfo() == '/Home/Service/print'? 'active': '' }}"><i class="icon-print"></i>打印</a>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="right-part">
            {{--<div class="content-header">--}}
                {{--<ol class="breadcrumb">--}}
                    {{--当前位置：--}}
                    {{--<li><a href="{{ url('/')}}">首页</a></li>--}}
                    {{--<li class="active">--}}
                        {{--@if( strstr( Request::getPathInfo(), 'queryMedicalPrice') )--}}
                            {{--药品价格--}}
                        {{--@elseif( strstr( Request::getPathInfo(), 'queryTreatmentPrice') )--}}
                            {{--医疗价格--}}
                        {{--@elseif( strstr( Request::getPathInfo(), 'schedule') )--}}
                            {{--门诊排班--}}
                        {{--@endif--}}
                    {{--</li>--}}
                {{--</ol>--}}
            {{--</div>--}}
            <div class="content">
                @if(isset($type))
                    @include('layouts.'.$type)
                @endif
            </div>
        </div>
    </div>
@stop
