<?php
namespace Entrance\Controller;

class SearchController extends MasterController
{
    public function allSearch() {
        $this->render("search/search");
    }
}