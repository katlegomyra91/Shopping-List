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
            require_once("views/layouts/shopping_list_widget.php");
            require_once("views/layouts/add_or_edit_list_item_modal.php");
            require_once("views/layouts/delete_list_item_modal.php");
            ?>
        </div>

        <script src="components/jQuery/jquery-3.6.0.min.js"></script>
        <script src="components/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <script src="assets/js/form_submit.js"></script>
        <script src="assets/js/listeners.js"></script>
    </body>
</html>