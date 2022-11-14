<!-- connect file -->
<?php
include('includes/connect.php');
include('functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Details</title>
    <!-- // bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- // font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- // CSS link -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <div class="container-fluid">
                <img src="./image/logo.png" alt="" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="display_all.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php"> <i class="fa-sharp fa-solid fa-cart-shopping"></i><sup>
                                    <?php
                                    cart_item();
                                    ?>
                                </sup></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- calling cart function -->
        <?php
        cart();
        ?>
        <!-- second child -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </nav>

        <!-- third child -->
        <div class="bg-light">
            <h3 class="text-center">
                Hidden Store
            </h3>
            <p class="text-center">Communication </p>
        </div>

        <!-- fourth child -->
        <div class="container">
            <div class="row">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                           <th>Product Title</th>
                           <th >Product Image</th>
                           <th>Quantity</th>
                           <th>Total Price</th>
                           <th>Remove</th>
                           <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Apple</td>
                            <td><img src="./image/apple1.jpg" alt=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td>9000</td>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>
                                <p>Updatte</p>
                                <p>Remove</p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- subtotal -->
                <div class="d-flex mb-5">
                    <h4 class="px-3">Subtotal: <strong class="text-danger">5000</strong> </h4>
                    <a href="index.php"><button class="bg-secondary px-3 py-2 border-0 mx-3">Continue Shopping</button></a>
                    <a href="#"><button class="bg-dark px-3 py-2 border-0 text-light">Checkout</button></a>
                </div>
            </div>
        </div>
        <!-- last child -->
        <!-- include footer -->
        <?php
        include('./includes/footer.php');
        ?>

    </div>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>