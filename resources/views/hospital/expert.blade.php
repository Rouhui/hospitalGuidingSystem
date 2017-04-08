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
                <form id="search-department-form" action="{{ route('expert') }}" >
                    {{ csrf_field() }}
                    <span class="inputsize">医生搜索:</span>&nbsp;&nbsp;
                    <input class="input" type="text" id="keyword" name="keyword" value="{{ $keyword }}">
                    <input class="button" type="submit" value="搜索">
                    {{--<input type="hidden" name="channelId" id="fid0" value="104">--}}
                </form>
            </div>
        </div>
        <div class="content">
            @foreach($doctors as $doctor)
                <div class="expert-item">
                    <div class="imgdiv"><img src="{{ asset('/images/database/'.$doctor->d_photo) }}" alt="{{ $doctor->d_name }}"></div>

                    <div class="infodiv">
                        <div class="title">{{ $doctor->d_name }}</div>
                        <div class="info-item">科室名称：<span>{{ $doctor->dept_name }}</span></div>
                        <div class="info-item">职称：<span>{{ $doctor->d_jobtitle }}</span></div>
                        <div class="info-item">擅长：<span>{{ $doctor->d_expert }}</span></div>
                    </div>

                    <div class="infodiv2">
                        <div class="info-item">门诊时间：<span>周一上午</span></div>
                        <div class="info-item">门诊地点：<span>门诊八楼</span></div>
                        <div class="info-item">挂号费用：<span>周一300元</span></div>
                    </div>
                    <div class="detail_btn">
                        <a href="{{ route('expertDetail',['id' => $doctor->d_no]) }}">查看</a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="divider"></div>
            @endforeach

            <div style="background: white; width: 100%; height: 70px;">
                <div class="pull-right">
                    {{ $doctors->links() }}
                </div>
            </div>

        </div>
    </div>
@stop
