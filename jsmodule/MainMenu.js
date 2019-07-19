import $ from 'jquery';

export default class MainMenu
{
    constructor() {
        //서브메뉴가 존재하는 메뉴일 경우
        $(".main-many-menu").hover(function() {
            $(this).children("ul").stop().slideDown(600);
        }, function() {
            $(this).children("ul").stop().slideUp("fast");
        });

        //메뉴 클릭시 css고정
        $(".main-menu > li").click(function() {
            var li = $(this);
            if(li.hasClass("active")) {
                return;	
            } else {
                $(".main-menu > li").removeClass("active");
                $(this).toggleClass("active");
            }
        });
    }
}