@extends('layouts.main')

@section('banner')
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('images/banner-department.png') }}" alt="placeholder+image">
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="col-md-12">
        <div class="content-nav">
            <div class="left-nav">
                <ol class="breadcrumb">
                    当前位置：
                    <li><a href="{{ url('/')}}">首页</a></li>
                    <li class="active">专家列表</li>
                </ol>
            </div>
            <div class="right-search">
                <form id="search-department-form" action="{{ route('department') }}" >
                    {{ csrf_field() }}
                    <span class="inputsize">医生搜索:</span>&nbsp;&nbsp;
                    <input class="input" type="text" id="keyword" name="keyword" value="{{ $keyword }}">
                    <input class="button" type="submit" value="搜索">
                    {{--<input type="hidden" name="channelId" id="fid0" value="104">--}}
                </form>
            </div>
        </div>
        <div class="content">
            <div class="expert-item">
                <div class="imgdiv"><img src="{{ asset('/images/database/expert-1.jpg') }}" alt="郑树森"></div>

                <div class="infodiv">
                    <div class="title">郑树森</div>
                    <div class="info-item">科室名称：<span>肝胆胰外科、肝胰移植科</span></div>
                    <div class="info-item">职称：<span>中国工程院院士、教授、主任医师、博士生导师</span></div>
                    <div class="info-item" title="肝胆胰外科肿瘤诊治、器官移植">擅长：<span>肝胆胰外科肿瘤诊治、器官移植</span></div>
                </div>

                <div class="infodiv">
                    {{--<div class="jbxx3">--}}
                    {{--<iframe scrolling="no" style="width: 330px;height: 110px;" id="iframe" frameborder="0" src="/zyyy/paiban/yylist.html?gh=1283"></iframe>--}}
                    {{--</div>--}}
                </div>
                <div class="detail_btn">
                    <a href="{{ route('expertDetail',['id' => 0]) }}">查看</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="divider"></div>
            <div class="expert-item">
                <div class="imgdiv"><img src="{{ asset('/images/database/expert-1.jpg') }}" alt="郑树森"></div>

                <div class="infodiv">
                    <div class="title">郑树森</div>
                    <div class="info-item">科室名称：<span>肝胆胰外科、肝胰移植科</span></div>
                    <div class="info-item">职称：<span>中国工程院院士、教授、主任医师、博士生导师</span></div>
                    <div class="info-item" title="肝胆胰外科肿瘤诊治、器官移植">擅长：<span>肝胆胰外科肿瘤诊治、器官移植</span></div>
                </div>

                <div class="infodiv">
                    {{--<div class="jbxx3">--}}
                    {{--<iframe scrolling="no" style="width: 330px;height: 110px;" id="iframe" frameborder="0" src="/zyyy/paiban/yylist.html?gh=1283"></iframe>--}}
                    {{--</div>--}}
                </div>
                <div class="detail_btn">
                    <a href="{{ route('expertDetail',['id' => 0]) }}">查看</a>
                </div>
            </div>


            {{--@foreach($department_type as $type)--}}
                {{--@if( count($type->items) != 0)--}}
                {{--<div class="content-item">--}}
                    {{--<div class="title">--}}
                       {{--{{ $type->dt_name }}--}}
                    {{--</div>--}}
                    {{--<div class="main">--}}
                        {{--@foreach($type->items as $item)--}}
                            {{--<div class="dep-item">--}}
                            {{--<a href="{{ route('departmentDetail',['id' => $item->id]) }}"><div class="" id="" title="{{$item->name}}">{{$item->name}}</div></a>--}}
                        {{--</div>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--@endif--}}
            {{--@endforeach--}}
        </div>
    </div>
@stop
