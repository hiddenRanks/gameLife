import $ from 'jquery';

export default class LoginBtn
{
    constructor() {
        $(document).ready(function() {
            var Regex = /^[a-zA-Z0-9]{4,16}$/;

            $("form").submit(function() {
                if(!Regex.test($.trim($("#id").val()))) {
                    alert("아이디 오류");
                    $("#id").focus();
                    return false;
                }
                if(!Regex.test($.trim($("#pw").val()))) {
                    alert("비밀번호 오류");
                    $("#pw").focus();
                    return false;
                }
            });
        });
    }
}