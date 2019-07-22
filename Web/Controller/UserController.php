<?php
namespace Entrance\Controller;

class UserController extends MasterController
{
    public function loginPage()
    {
        $this->render("user/login");
    }

    public function loginProcess()
    {

    }

    public function signUp()
    {
        $this->render("user/signUp");
    }
}