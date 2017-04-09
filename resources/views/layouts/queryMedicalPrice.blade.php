<div class="content-nav">
    <div class="right-search">
        <form id="search-department-form" action="{{ route('service',['type'=>'queryPrice']) }}" >
            {{ csrf_field() }}
            <span class="inputsize">药品搜索:</span>&nbsp;&nbsp;
            <input class="input" type="text" id="keyword" name="keyword" value="{{ $keyword }}">
            <input class="button" type="submit" value="搜索">
        </form>
    </div>
</div>
<div>
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>通用名</th>
            <th>单位</th>
            <th>规格</th>
            <th>价位</th>
            <th>剂型</th>
            <th>产地</th>
        </tr>
        </thead>
        <tbody>
        @foreach($medical as $item)
            <tr>
                <td>{{ $item->m_name }}</td>
                <td>{{ $item->m_unit }}</td>
                <td>{{ $item->m_specification }}</td>
                <td>￥{{ $item->m_price }}</td>
                <td>{{ $item->m_type }}</td>
                <td>{{ $item->m_orgin }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div style="background: white; width: 100%; height: 70px;">
        <div class="pull-right">
            {{ $medical->links() }}
        </div>
    </div>
</div>