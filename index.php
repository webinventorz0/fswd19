<?php include('header/header.php'); ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4">
                <?php if(!empty($_GET['error'])){ ?>
                <font color="red"><small> <i class="fa fa-warning"></i> <?php echo $_GET['error']; ?></small></font>
                <?php } ?>
                <br />
                <form action="actions/login.php" method="get">
                    <div class="card">
                        <div class="card-header">
                            Login Here
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger btn-sm">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include('header/footer.php'); ?>