<div class="modal fade" id="deleteItem" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteItemHeader">Delete Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="text-center ajax_form" action="ajax-delete-list-item.php">
                    <input type="hidden" class="form-control" name="item-id" id="deleteItemId" value="0">
                    <p id="deleteItemQuestion">Are you sure you want to delete this item?</p>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-sm">Yes</button>
                        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" aria-label="Close">No</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>