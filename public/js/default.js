$(document).ready(function() {
    // 一级菜单恢复href属性，起到超链接功能
    $(document).off('click.bs.dropdown.data-api');

    // 下拉框实现hover切换是否显示内容
    $("#navbar-item").mouseover(function() {
        $(this).addClass('open');
    }).mouseout(function() {
        $(this).removeClass('open');
    });
});

function login() {
    $('#mask').css('display', 'block');
    $('#login-dialog').css('display', 'block');
}

function register() {
    $('#mask').css('display', 'block');
    $('#register-dialog').css('display', 'block');
}

function cancelLogin(){
    $('#mask').css('display', 'none');
    $('#login-dialog').css('display', 'none');
    $('#register-dialog').css('display', 'none');
}
