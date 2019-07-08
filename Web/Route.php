<?php

namespace Entrance;

class Route
{
    public static $GET = [];
    public static $POST = [];

    //web의 값들을 index가 요리해서 받음
    public static function route($url)
    {
        //post, get인지 확인하기
        //${}를 이용해서 GET을 받았다면 Route에 있는 $GET을 참조하게 된다. => $GET
        foreach (self::${$_SERVER['REQUEST_METHOD']} as $req) {
            if($req[0] === $url) {
                $actions = explode("@", $req[1]);

                //이 경로에 있는 클래스를 불러서
                $cName = "\\Entrance\\Controller\\" . $actions[0];

                //해당 클래스의 인스턴스를 만들어준다.
                $cInstance = new $cName();

                //인스턴스한 클래스의 메소드를 불러준다.
                $cInstance->{$actions[1]}();

                return;
            }
        }

        //직접 만든다면 여기에 경고 페이지를 만들어줄수 있다!
        $cInstance = new \Entrance\Controller\StaticController();
        $cInstance->errorPage("존재하지 않는 페이지 혹은 권한이 없는 페이지 입니다.");

        //echo "존재하지 않는 페이지 이거나 권한이 없습니다.";
        exit;
    }

    //만약 static라면 $this->.. 대신 self를 쓴다.
    public static function get($link, $action)
    {
        self::$GET[] = [$link, $action];
    }

    public static function post($link, $action)
    {
        self::$POST[] = [$link, $action];
    }
}
