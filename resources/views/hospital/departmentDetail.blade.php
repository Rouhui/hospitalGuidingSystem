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
                    <li><a href="{{ url('Home/Department')}}">科室列表</a></li>
                    <li class="active">详情</li>
                </ol>
            </div>
        </div>
        <div class="department-detail-content">
            <div class="department-info">
                <div class="title">基础介绍</div>
                <div>
                    <div>科室名称： <span>感染病科</span></div>
                    <div>负责人： <span>李兰娟 盛吉芳 黄建荣 </span></div>
                    <div>地理位置： <span>肝炎/感染普通、咨询、专家门诊9号楼2楼；结核门诊9号楼1楼；</span></div>
                    <div>电话： <span>（0571）87236896</span></div>
                    <div>电子邮件： <span>Lpxwl2001@zju.edu.cn</span></div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="department-info">
                <div class="title">工作职责</div>
                <div class="main">
                    <p>感染病科是目前国内综合性医院同类学科中，规模最大的临床医疗科室之一，中国工程院院士李兰娟教授担任传染病诊治国家重点实验室主任。病区面积23000平方米，开放床位数260张，年门诊量10 万余人次，年住院量6千余人次。建有人工肝治疗中心、重症监护病房、感染性疾病、病毒性肝炎、结核病和艾滋病等10个诊疗病区。长期从事不明原因发热、细菌感染性疾病、病毒性肝炎、肝硬化和新发、再发传染病的临床诊治工作，积累了丰富的临床经验并探索出一套完整的诊断思路和治疗方案，收治病种齐全，病人来源广泛，医疗服务立足浙江，辐射全国乃至国际。以重型肝炎肝衰竭诊治为传统优势医疗项目，创建了人工肝支持系统等多项具有核心竞争力的临床诊治技术，治疗重型肝炎取得重大突破，并推广至全国各地，保证了学科在该领域的国际领先地位。</p>
                </div>
            </div>
            <div class="divider"></div>
            <div class="department-info">
                <div class="title">学术地位</div>
                <div class="main">
                    <p>感染病科系国家重点学科，先后荣获国家科技进步奖2项和省科技进步一等奖5项，其他奖励上百项；发表了Nature immunology、Lancet、New England、PNAS、Hepatology等一大批高质量的学术论文；主编《传染病学》、《人工肝脏》、《感染微生态》、《人类病毒性疾病》等教材和论著数十部；获得国家发明专利授权数十项，并取得了良好的经济效益和社会效益。</p>
                </div>
            </div>
            <div class="divider"></div>
            <div class="department-info">
                <div class="title">技术优势</div>
                <div class="main">
                    <p>（1）人工肝研究处于国际领先水平。针对重型肝炎病死率高的难题，历经多年攻关，创建了一套独特有效具有自主知识产权的人工肝支持系统，探索确定人工肝在治疗过程中的各种参数，攻克了人工肝基础和应用中一系列的技术难关；探明了人工肝治疗的适应证和禁忌证，极大地降低了患者病死率。</p>
                    <p>（2）感染微生态学的建立及应用研究。将微生态学理论引入感染和肝病研究领域，创建了“感染微生态”学新理论，对肝病微生态和细菌耐药进行了系列研究，提出了感染微生态防治新策略：用微生态学的理论和方法研究感染的发生、发展及转归过程，发现破坏人体微生态平衡会导致严重感染或脏器损害，该发现更新了抗感染策略。</p>
                    <p>（3）病毒性肝炎研究方面。发现戊肝病毒新的抗原表位，探明病毒抗体的诊断意义，率先观察病毒血症及粪便排病毒规律，明确戊肝临床隔离时间。</p>
                    <p>（4）传染病的诊断新技术研究获得丰硕成果。发明了特异探针标记新方法，研制了一系列特异性高，通量更大的诊断芯片。</p>
                    <p>（5）在艾滋病/HIV 感染、禽流感等疾病的防治、其他新发与再现传染病防治等方面进行重点研究。尤其在禽流感（H7N9）危重症的抢救工作中的救治以及基础科研方面做出了突出贡献，创建了“四抗二平衡”治疗策略，即“抗病毒、抗休克、抗ARDS、抗感染；维持水电解质平衡和微生态平衡” ，并创造性地应用人工肝技术清除患者体内堆积的炎症因子，有效地抑制炎症反应，助力重症患者度过器官功能衰竭难关，临床治疗效果突出。目前“四抗二平衡”治疗方案已作为全国救治H7N9禽流感的基本原则。</p>
                </div>
            </div>
        </div>
    </div>
@stop
