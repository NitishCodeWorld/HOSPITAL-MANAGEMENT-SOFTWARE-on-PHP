<?php 

    include "include/header.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12 m-0 p-0">
            <div class="bg-doc-image">
                <div class="log-in-text">

                    <form action="log-in-validate.php" method="post">
                        <h2 class="text-center">CARE4U Hospital</h2>

                        <?php if(isset($_GET['error'])){ ?>
                            <p class="error text-center" style="color: red;"><?php echo $_GET['error']; ?></p>
                        <?php } ?>

                        <div class="form-group">
                            <label for="user">User Id</label>
                            <input type="text" class="form-control" id="user" name="user-id" placeholder="Enter user id" require>
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" class="form-control" id="pass" name="password" placeholder="Enter password" require>
                        </div>
                        <button class="btn btn-success" name="submit">Log in</button>
                    </form>

                </div>

                <div class="log-in-text-admin">
                    <table class="table">
                        <tr>
                            <th scope="col">Select</th>
                            <th scope="col">User id</th>
                            <th scope="col">Password</th>
                        </tr>
                        <tr>
                            <td><input type="radio" name="check" onclick="userSelect1()"></td>
                            <td>admin</td>
                            <td>12345</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="check"  onclick="userSelect2()"></td>
                            <td>doc123</td>
                            <td>54321</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="check" onclick="userSelect3()"></td>
                            <td>nur123</td>
                            <td>vwxy</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include "include/footer.php";
?>