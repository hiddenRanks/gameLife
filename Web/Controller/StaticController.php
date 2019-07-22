<?php
namespace Entrance\Controller;

class StaticController extends MasterController
{
    public function index()
    {
        $this->render("main");
    }

    public function errorPage($msg)
    {
        $this->render("error", ['msg'=>$msg]);
    }

    public function post()
    {
        $this->render("post/write");
    }
}