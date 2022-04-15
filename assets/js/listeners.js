$(function() {
    $(document).on('click', '.add-item' , function(e) {
        e.preventDefault();
        $('#addOrEditItemHeader').html("Add Item");
        $('#addOrEditItemId').val(0);
        $('#addOrEditItemName').val('');
        $('#addOrEditItem').modal('show');
    });

    $(document).on('click', '.edit-item' , function(e) {
        e.preventDefault();
        let itemId = $(this).data('item-id');
        let itemName = $(this).data('item-name');
        $('#addOrEditItemHeader').html("Edit " + itemName);
        $('#addOrEditItemId').val(itemId);
        $('#addOrEditItemName').val(itemName);
        $('#addOrEditItem').modal('show');
    });

    $(document).on('click', '.delete-item' , function(e) {
        e.preventDefault();
        let itemId = $(this).data('item-id');
        let itemName = $(this).data('item-name');
        $('#deleteItemHeader').html("Delete " + itemName);
        $('#deleteItemQuestion').html("Are you sure you want to delete <b>" + itemName + "</b> from your shopping list?");
        $('#deleteItemId').val(itemId);
        $('#deleteItem').modal('show');
    });

    $(document).on('click', '.mark-item' , function(e) {
        e.preventDefault();
        let itemId = $(this).data('item-id');
        $.ajax({
            type: 'POST',
            url: 'ajax-mark-list-item.php',
            data: 'item-id=' + itemId,
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                location.reload();
            }
        });
    });

    $(document).on('click', '.unmark-item' , function(e) {
        e.preventDefault();
        let itemId = $(this).data('item-id');
        $.ajax({
            type: 'POST',
            url: 'ajax-unmark-list-item.php',
            data: 'item-id=' + itemId,
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                location.reload();
            }
        });
    });
});