<?php
namespace Entrance\Controller;

use Jenssegers\Blade\Blade;

class MasterController
{
    public function render($page, $data = []) {
        $blade = new Blade(__VIEW, __CACHE);
        echo $blade->make($page, $data);
    }
}