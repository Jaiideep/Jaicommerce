<!DOCTYPE html>
<html lang="en">
        <head>
                <title>Test</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <link rel="stylesheet" href="css/main.css"/>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>

        <body>

                <nav class="navbar navbar-inverse navbar-fixed-top">
                        <div class="container-fluid">
                                <div class="navbar-header">
                                        <a class="navbar-brand" href="/Test/index.php" >Test</a>
                                </div>
                        </div>
                </nav>

                <div class="col-md-2"></div>

                <div class="col-md-8">

                        <div class="row">

                                <h2 class="text-center">Menu</h2>

                                <div class="col-md-3">
                                        <img src="images/p1.jpg" id="images"/>
                                        <h4>Butter Chicken</h4>
                                        <p class="list-price text-danger">List Price: <s>$24.99</s></p>
                                        <p class="price">Our Price: $19.99</p>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                                </div>

                                <div class="col-md-3">
                                        <img src="images/p2.jpg" id="images"/>
                                        <h4>Matar Panner</h4>
                                        <p class="list-price text-danger">List Price: <s>$24.99</s></p>
                                        <p class="price">Our Price: $19.99</p>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
                                </div>

                                <div class="col-md-3">
                                        <img src="images/p3.jpg" id="images"/>
                                        <h4>Dal Makhani</h4>
                                        <p class="list-price text-danger">List Price: <s>$24.99</s></p>
                                        <p class="price">Our Price: $19.99</p>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>
                                </div>

                                <div class="col-md-3">
                                        <img src="images/p4.jpg" id="images"/>
                                        <h4>Pao Bhaji</h4>
                                        <p class="list-price text-danger">List Price: <s>$24.99</s></p>
                                        <p class="price">Our Price: $19.99</p>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
                                </div>
                        </div>
                </div>
                <?php
                        include 'details-modal-ButterChicken.php';
                        include 'details-modal-MatarPanner.php';
                        include 'details-modal-DalMakhani.php';
                        include 'details-modal-PaoBhaji.php'
                ?>
        </body>
</html>
