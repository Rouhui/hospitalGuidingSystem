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
                <form id="search-department-form" action="" >
                    <span class="inputsize">科室搜索:</span>&nbsp;&nbsp;
                    <input class="input" type="text" id="keywordName" name="q" value="">&nbsp;&nbsp;
                    <input class="button" type="submit" value="搜索">
                    <input type="hidden" name="channelId" id="fid0" value="104">
                </form>
            </div>
        </div>
        <div class="department-content">
            <div class="content-item">
                <div class="title">
                    内科系统
                </div>
                <div class="main">
                    <div class="dep-item">
                        <a href="http://www.zy91.com:80/nkxt/481.jhtml"><div class="" id="" title="感染病科">感染病科</div></a>
                    </div>
                    <div class="dep-item">
                        <a href="http://www.zy91.com:80/nkxt/481.jhtml"><div class="" id="" title="感染病科">血液病科</div></a>
                    </div>
                    <div class="dep-item">
                        <a href="http://www.zy91.com:80/nkxt/481.jhtml"><div class="" id="" title="感染病科">骨髓移植中心</div></a>
                    </div>
                    <div class="dep-item">
                        <a href="http://www.zy91.com:80/nkxt/481.jhtml"><div class="" id="" title="感染病科">肾脏病中心</div></a>
                    </div>
                    <div class="dep-item">
                        <a href="http://www.zy91.com:80/nkxt/481.jhtml"><div class="" id="" title="感染病科">消化内科</div></a>
                    </div>
                    <div class="dep-item">
                        <a href="http://www.zy91.com:80/nkxt/481.jhtml"><div class="" id="" title="感染病科">心内科</div></a>
                    </div>
                    <div class="dep-item">
                        <a href="http://www.zy91.com:80/nkxt/481.jhtml"><div class="" id="" title="感染病科">感染病科</div></a>
                    </div>
                    <div class="dep-item">
                        <a href="http://www.zy91.com:80/nkxt/481.jhtml"><div class="" id="" title="感染病科">血液病科</div></a>
                    </div>
                    <div class="dep-item">
                        <a href="http://www.zy91.com:80/nkxt/481.jhtml"><div class="" id="" title="感染病科">骨髓移植中心</div></a>
                    </div>
                    <div class="dep-item">
                        <a href="http://www.zy91.com:80/nkxt/481.jhtml"><div class="" id="" title="感染病科">肾脏病中心</div></a>
                    </div>
                    <div class="dep-item">
                        <a href="http://www.zy91.com:80/nkxt/481.jhtml"><div class="" id="" title="感染病科">消化内科</div></a>
                    </div>
                    <div class="dep-item">
                        <a href="http://www.zy91.com:80/nkxt/481.jhtml"><div class="" id="" title="感染病科">心内科</div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
