<div class="modal fade" id="addOrEditItem" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addOrEditItemHeader">Add Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="ajax_form" action="ajax-add-or-edit-list-item.php">
                    <input type="hidden" class="form-control" name="item-id" id="addOrEditItemId" value="0">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Item Name</label>
                        <input type="text" class="form-control" name="item-name" id="addOrEditItemName" placeholder="Enter Item Name">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>