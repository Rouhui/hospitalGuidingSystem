<div>
    @foreach($treatments as $index => $treatment)
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>名称</th>
                <th>单次</th>
                <th>价格</th>
            </tr>
            </thead>
            <tbody>
            @foreach($treatment as $item)
                <tr>
                    <td>{{ $item->t_name }}</td>
                    <td>{{ $item->t_unit }}</td>
                    <td>￥{{ $item->t_price }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @if($index == 0)
            <p style="margin-top: -15px; margin-bottom: 30px">* 名老中医每次问诊时间不得少于10分钟。</p>
            @elseif($index == 1)
                <p style="margin-top: -15px; margin-bottom: 30px">* 当日住院当日出院的病人，按一天计收住院诊查费和护理费；产科新生儿不得收此费。</p>
        @endif
    @endforeach
</div>