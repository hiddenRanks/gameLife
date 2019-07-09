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
}