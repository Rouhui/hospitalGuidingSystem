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
                    <li class="active">科室列表</li>
                </ol>
            </div>
            <div class="right-search">
                <form id="search-department-form" action="{{ route('department') }}" >
                    {{ csrf_field() }}
                    <span class="inputsize">科室搜索:</span>&nbsp;&nbsp;
                    <input class="input" type="text" id="keyword" name="keyword" value="{{ $keyword }}">
                    <input class="button" type="submit" value="搜索">
                    {{--<input type="hidden" name="channelId" id="fid0" value="104">--}}
                </form>
            </div>
        </div>
        <div class="department-content">
            @foreach($department_type as $type)
                @if( count($type->items) != 0)
                <div class="content-item">
                    <div class="title">
                       {{ $type->dt_name }}
                    </div>
                    <div class="main">
                        @foreach($type->items as $item)
                            <div class="dep-item">
                            <a href="{{ route('departmentDetail',['id' => $item->no]) }}"><div class="" id="" title="{{$item->name}}">{{$item->name}}</div></a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
@stop
