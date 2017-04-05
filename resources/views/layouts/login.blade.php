@section ('login-dialog')
    <!-- 登录窗口 -->
    <div id="login-dialog">
        <p class="login-title">登录</p>
        <form role="form" class="login-form">
            <div class="form-group">
                <input type="text" id="userName" placeholder="账号：身份证号码">
            </div>
            <div class="form-group">
                <input type="password" id="userPsw" placeholder="密码">
            </div>
            <div class="form-group" style="display: none">
                <div class="wrongtip"></div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn login-btn">登录</button>
            </div>
        </form>
    </div>
@show