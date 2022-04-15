<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_id = trim($_POST["item-id"]);
    $item_name = trim($_POST["item-name"]);

    require_once("models/ListItemModel.php");
    $listItem = new ListItemModel();
    if ($item_id === "0") {
        if ($listItem->addListItem($item_name)) {
            echo "success";
        } else {
            echo "error";
        }
    } else {
        if ($listItem->editListItem($item_name, $item_id)) {
            echo "success";
        } else {
            echo "error";
        }
    }
}