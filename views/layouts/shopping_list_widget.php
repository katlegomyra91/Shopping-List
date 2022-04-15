<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-8">
                <h4>
                    Shopping List
                </h4>
            </div>
            <div class="col-4 ">
                <button type="button" class="btn btn-primary btn-sm float-right add-item">
                    Add Item
                </button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <?php if (isset($pageData) && isset($pageData["list_items"]) && count($pageData["list_items"]) > 0) { ?>
        <ul class="shopping-list">
            <?php
            foreach ($pageData["list_items"] as $item) {
                if ($item["status_id"] != "3") {
            ?>
            <li>
                <div class="row">
                    <div class="col-10">
                        <div class="form-group form-check">
                            <?php if ($item["status_id"] === "1") { ?>
                                <input type="checkbox" class="form-check-input mark-item clickable" data-item-id="<?php echo $item["id"]?>">
                                <label class="form-check-label mark-item clickable" data-item-id="<?php echo $item["id"]?>"><?php echo $item["item_name"]?></label>
                            <?php } else if ($item["status_id"] === "4") { ?>
                                <input type="checkbox" class="form-check-input unmark-item" checked="checked">
                                <label class="form-check-label unmark-item clickable" data-item-id="<?php echo $item["id"]?>"><?php echo $item["item_name"]?></label>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="btn-group float-right">
                            <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false">
                                Options
                            </button>
                            <div class="dropdown-menu">
                                <?php if ($item["status_id"] === "1") { ?>
                                    <a class="dropdown-item mark-item" href="#" data-item-id="<?php echo $item["id"]?>">Mark</a>
                                    <a class="dropdown-item edit-item" href="#" data-item-id="<?php echo $item["id"]?>" data-item-name="<?php echo $item["item_name"]?>">Edit</a>
                                <?php } else if ($item["status_id"] === "4") { ?>
                                    <a class="dropdown-item unmark-item" href="#" data-item-id="<?php echo $item["id"]?>">Unmark</a>
                                <?php } ?>
                                <a class="dropdown-item delete-item" href="#" data-item-id="<?php echo $item["id"]?>" data-item-name="<?php echo $item["item_name"]?>">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <?php }} ?>
        </ul>
        <?php } else { ?>
        <div class="alert alert-danger" role="alert">
            No list items found
        </div>
        <?php } ?>
    </div>
</div>