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
                    <li><a href="{{ url('Home/Expert')}}">专家列表</a></li>
                    <li class="active">专家详情</li>
                </ol>
            </div>
        </div>
        <div class="department-detail-content">
            <div class="expert-item">
                {{--<div class="title">基础介绍</div>--}}
                {{--<div>--}}
                    {{--<div>科室名称： <span>{{ $doctor->dept_name }}</span></div>--}}
                    {{--<div>负责人： <span>{{ $department->dept_director }} </span></div>--}}
                    {{--<div>地理位置： <span>{{ $department->dept_position }}</span></div>--}}
                    {{--<div>电话： <span>{{ $department->dept_phone }}</span></div>--}}
                    {{--<div>电子邮件： <span>{{ $department->dept_email }}</span></div>--}}
                {{--</div>--}}
                <div>
                    <div class="imgdiv"><img src="{{ asset('/images/database/'.$doctor->d_photo) }}" alt="{{ $doctor->d_name }}"></div>

                    <div class="infodiv">
                        <div class="title">{{ $doctor->d_name }}</div>
                        <div class="info-item">性别：<span>{{ $doctor->d_sex == 0 ? '男': '女' }}</span></div>
                        <div class="info-item">学历：<span></span></div>
                        <div class="info-item">科室名称：<span>{{ $doctor->dept_name }}</span></div>
                    </div>

                    <div class="infodiv2">
                        <div class="info-item">门诊：<span></span></div>
                        <div class="info-item">职称：<span>{{ $doctor->d_jobtitle }}</span></div>
                        <div class="info-item">擅长：<span>{{ $doctor->d_expert }}</span></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="divider"></div>

            <div class="department-info">
                <div class="title">简介</div>
                <div class="main">
                    <p>从事传染病临床、科研和教学工作40年，是我国著名的传染病学家。作为我国人工肝的开拓者，她创建独特有效的人工肝支持系统治疗重型肝炎获重大突破。首次提出感染微生态学理论，从微生态角度来审视感染的发生、发展和结局，为感染防治提供了崭新的思路。承担了国家“863”、“973”、“十五”攻关、国家科学基金重点项目等课题10余项。发表论文400余篇，其中在Lancet、NEJM、hepatology和PNAS等SCI收录杂志发表150余篇，授权发明专利22项。以第一完成人获得国家科技进步二等奖2项，省科技进步一等奖5项，教育部高校推广应用奖二等奖1项。主编出版了我国首部《人工肝脏》、《感染微生态学》和教育部规划教材《传染病学》等专著28部。还担任“艾滋病和病毒性肝炎等重大传染病防治”科技重大专项“十二五”计划技术副总师、“综合防治示范区和现场研究”责任专家组组长。2010年荣获 “全国优秀科技工作者”称号。为我国传染病诊治作出了重大贡献。</p>
                    <p>现任传染病诊治国家重点实验室主任、国家传染病学重点学科、211建设学科学术带头人、浙江省传染病重点实验室主任。</p>
                </div>
            </div>
            <div class="divider"></div>
            <div class="department-info">
                <div class="title">职务</div>
                <div class="main">
                    <p>教育部生物与医学学部主任，中华医学会副会长，中国卫生信息协会副会长，中国生物医学工程学会副理事长,中华医学会感染病学分会主任委员、肝衰竭与人工肝学组组长，全国人工肝培训基地主任，中华预防医学会微生态学分会主任委员，国际血液净化学会理事，浙江省医学会会长；《中华临床感染病杂志》、《中国微生态学杂志》、《浙江医学》主编及《中华传染病杂志》、《国际流行病学传染病学杂志》副主编等学术职务。</p>
                </div>
            </div>
            <div class="divider"></div>
            <div class="department-info">
                <div class="title">研究方向</div>
                <div class="main">
                    <p>肝衰竭与人工肝。</p>
                </div>
            </div>
            <div class="divider"></div>
            <div class="department-info">
                <div class="title">医疗成果</div>
                <div class="main">
                    <p>1、人工肝支持系统治疗重型病毒性肝炎研究，1998年获国家科学技术进步二等奖，排名第一</p>
                    <p>2、重型肝炎肠道微生态变化的研究，2001年获浙江省科学技术进步一等奖，排名第一</p>
                    <p>3、人工肝支持系统治疗重型肝炎的推广应用研究，2001年获中国高校科学技术二等奖，排名第一</p>
                    <p>4、人工肝支持系统治疗重型病毒性肝炎研究，1997年获浙江省科学技术进步一等奖，排名第一</p>
                    <p>5、2008年12月获中华预防医学会公共卫生与预防医学发展贡献奖</p>
                </div>
            </div>
        </div>
    </div>
@stop
