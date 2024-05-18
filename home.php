<?php 
    include('header/header.php'); 
    if(empty($_SESSION['name'])){
        header('Location:index.php');
    }
    include('actions/cn.php');
    $query = "SELECT * FROM `users`";
    $result = mysqli_query($cn,$query) or die('cant run query');
?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <?php if(!empty($_GET['msg'])){ ?>
                    <font color="red"><small> <i class="fa fa-warning"></i> <?php echo $_GET['msg']; ?></small></font>
                <?php } ?>
                <div class="card">
                    <div class="card-header">
                        Welcome <?php echo $_SESSION['name']; ?>
                    </div>
                    <div>
                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                            <?php while($row = mysqli_fetch_array($result)){ ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['password']; ?></td>
                                    <td>
                                        <a href="actions/delete.php?id=<?php echo $row['id']; ?>">
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('header/footer.php'); ?>