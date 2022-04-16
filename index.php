<?php

    require_once ("App/front-end/component.php");
    require_once ("App/back-end/db.php");
    require_once ("App/operation.php");
    createdb();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css file -->
    <link rel="stylesheet" href="style.css">
    <title>E-Book</title>
</head>
<body>
    <main>
        <div class="container text-center">
            <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Book Store</h1>
            <div class="d-flex justify-content-center">
                <form action="" method="post" class="w-50">
                    <div class="pt-2">
                        <?php
                            inputElement("<i class='fas fa-id-badge'></i>","ID","book_id","");
                        ?>
                    </div>
                    <div class="pt-2">
                        <?php
                            inputElement("<i class='fas fa-book'></i>","Book Name","book_name","");
                        ?>
                    </div>
                    <div class="row pt-2">
                        <div class="col">
                            <?php
                                inputElement("<i class='fas fa-people-carry'></i>","Publisher","book_publisher","");
                            ?>
                        </div>
                        <div class="col">
                            <?php
                                inputElement("<i class='fas fa-dollar-sign'></i>","Price","book_price","");
                            ?>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <?php buttonElement("btn-create", "btn btn-success", "<i class='fas fa-plus'></i>", "create","dat-toggle='tooltip' data-placment='bottom' title='create'"); ?>
                        <?php buttonElement("btn-read", "btn btn-primary","<i class='fas fa-sync'></i>","read","dat-toggle='tooltip' data-placment='bottom' title='Read'"); ?>
                        <?php buttonElement("btn-update", "btn btn-light border","<i class='fas fa-pen-alt'></i>", "update","dat-toggle='tooltip' data-placment='bottom' title='Update'"); ?>
                        <?php buttonElement("btn-delete", "btn btn-danger","<i class='fas fa-trash-alt'></i>","delete","dat-toggle='tooltip' data-placment='bottom' title='Delete'"); ?>
                    </div>
                </form>
            </div>
            <div class="d-flex table-data">
                <table class="table table-striped table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Book Name</th>
                            <th>Publisher</th>
                            <th>Book Price</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <tr>
                            <td>1</td>
                            <td>Lupin</td>
                            <td>Hugo Malsin</td>
                            <td>19.95</td>
                            <td><i class="fas fa-edit btnedit"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>