<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_id = trim($_POST["item-id"]);

    require_once("models/ListItemModel.php");
    $listItem = new ListItemModel();
    if ($item_id != "0") {
        if ($listItem->markListItem($item_id)) {
            echo "success";
        } else {
            echo "error";
        }
    } else {
        echo "error";
    }
}