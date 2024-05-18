<?php include('header/header.php'); ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        Register Here
                    </div>
                    <div class="card-body">
                        <form action="actions/register.php" method="post">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>          
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email">
                                <?php if(!empty($_GET['email'])){ ?>
                                <font color="red"><small> <i class="fa fa-warning"></i> <?php echo $_GET['email']; ?></small></font>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password">
                                <?php if(!empty($_GET['password'])){ ?>
                                <font color="red"><small> <i class="fa fa-warning"></i> <?php echo $_GET['password']; ?></small></font>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password</label>
                                <input type="password" class="form-control" name="confrimpassword">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger btn-sm">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('header/footer.php'); ?>