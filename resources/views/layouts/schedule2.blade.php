<div class="title1" style="border: none">
    当前科室： 口腔内科
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
                    <th>上/下午</th>
                    <th>挂号费用</th>
                    <th>状态</th>
                </tr>
                </thead>
                <tbody>
                @foreach($schedule as $item)
                    <tr>
                        <td>{{ $item->dept_no }}</td>
                        <td>{{ $item->d_no }}</td>
                        <td>{{ $item->period }}</td>
                        <td>{{ $item->price }}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
</div>


