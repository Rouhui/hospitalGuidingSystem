<div class="title1">
    请选择科室
</div>

<div class="main">
    @foreach($departments as $department)
        <div class="dep-item">
            <a href="{{ route('service',['type'=>'schedule2', 'id' => $department->dept_no]) }}"><div class="" id="" title="{{$department->dept_name}}">{{$department->dept_name}}</div></a>
        </div>
    @endforeach
</div>


