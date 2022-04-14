<?php

    require_once ("php/component.php");

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
                            inputElement(icon:"<i class='fas fa-id-badge'></i>",placeholder:"ID",name:"book_id",value:"");
                        ?>
                    </div>
                    <div class="pt-2">
                        <?php
                            inputElement(icon:"<i class='fas fa-book'></i>",placeholder:"Book Name",name:"book_name",value:"");
                        ?>
                    </div>
                    <div class="row pt-2">
                        <div class="col">
                            <?php
                                inputElement(icon:"<i class='fas fa-people-carry'></i>",placeholder:"Publisher",name:"book_Publisher",value:"");
                            ?>
                        </div>
                        <div class="col">
                            <?php
                                inputElement(icon:"<i class='fas fa-dollar-sign'></i>",placeholder:"Price",name:"book_Price",value:"");
                            ?>
                        </div>
                    </div>
                    <div class="d-flex">
                        <?php buttonElement(btnid:"btn-create", styleclass:"btn btn-success", text:"<i class='fas fa-plus'></i>", name:"create", attr:"dat-toggle='tooltip' data-placment='bottom' title='create'"); ?>
                        <?php buttonElement(btnid:"btn-read", styleclass:"btn btn-primary", text:"<i class='fas fa-sync'></i>", name:"read", attr:"dat-toggle='tooltip' data-placment='bottom' title='Read'"); ?>
                        <?php buttonElement(btnid:"btn-update", styleclass:"btn btn-light border", text:"<i class='fas fa-pen-alt'></i>", name:"update", attr:"dat-toggle='tooltip' data-placment='bottom' title='Update'"); ?>
                        <?php buttonElement(btnid:"btn-delete", styleclass:"btn btn-danger", text:"<i class='fas fa-trash-alt'></i>", name:"delete", attr:"dat-toggle='tooltip' data-placment='bottom' title='Delete'"); ?>
                    </div>
                </form>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>