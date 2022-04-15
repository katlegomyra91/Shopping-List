<?php

require_once("models/ListItemModel.php");

class IndexController
{
    public function getPageData(): array
    {
        $listItem = new ListItemModel();
        $pageData = array();
        $pageData["load_view"] = "views/landing_page.php";
        $pageData["list_items"] = $listItem->getAllListItems();
        return $pageData;
    }
}