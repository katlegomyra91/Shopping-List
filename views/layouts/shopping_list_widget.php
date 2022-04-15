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