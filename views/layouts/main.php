<html>
    <head>
        <title>RR Shopping List</title>
        <link rel="stylesheet" href="components/bootstrap/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4">Welcome to the shopping list</h1>
                <p class="lead">Description ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <hr class="my-4">
                <p>Nam in dictum orci. Praesent pretium ultricies nisi a tincidunt. Ut tincidunt nunc finibus facilisis pulvinar. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>

            <?php
            if (isset($page) && !is_null($page)) {
                require_once($page);
            } else {
                ?>
                <div class="alert alert-danger" role="alert">
                    Page not found.
                </div>
            <?php } ?>

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4>
                                Shopping List
                            </h4>
                        </div>
                        <div class="col-4 ">
                            <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#addOrEditItem">
                                Add Item
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="shopping-list">
                        <li>
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <!-- Example single danger button -->
                                    <div class="btn-group float-right">
                                        <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false">
                                            Options
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Done</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addOrEditItem">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteItem">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Add or Edit Modal -->
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
                            <form>
                                <input type="hidden" class="form-control" name="item-id" id="item-id" value="0">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Item Name</label>
                                    <input type="text" class="form-control" name="item-name" id="item-name">
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete Modal -->
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
                            <form class="text-center">
                                <p>Are you sure you want to delete this item?</p>
                                <div class="form-group">
                                    <button type="button" class="btn btn-danger btn-sm">Yes</button>
                                    <button type="button" class="btn btn-success btn-sm">No</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="components/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </body>
</html>