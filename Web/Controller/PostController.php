<?php
namespace Entrance\Controller;

class PostController extends MasterController
{
    public function uploadHandle() {
        var_dump($_FILES['upload']);
    }
}