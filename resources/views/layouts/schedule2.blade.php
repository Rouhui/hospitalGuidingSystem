<div class="title1" style="border: none">
    当前科室： {{ $deptName }}
</div>
<div class="title1">
    排班列表
</div>

<div class="main">
    @foreach($schedules as $key=>$schedule)
        <div class="schedule_item">
            <p>{{ $key }}</p>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>预约科室</th>
                    <th>预约专家</th>
                    <th>专家职称</th>
                    <th>上/下午</th>
                    <th>挂号费用</th>
                    <th>总号数</th>
                    <th>余号数</th>
                </tr>
                </thead>
                <tbody>
                @foreach($schedule as $item)
                    <tr>
                        <td>{{ $item->dept_name }}</td>
                        <td><a href="{{ route('expertDetail', ['id'=>$item->d_no]) }}">{{ $item->d_name }}</a></td>
                        <td>{{ $item->d_jobtitle }}</td>
                        <td>{{ $item->period == 1 ? '上午' : '下午'}}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->num }}</td>
                        <td>{{ $item->remainNum }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
</div>


