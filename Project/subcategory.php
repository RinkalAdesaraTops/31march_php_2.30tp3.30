<?php 
include('header.php');
include('sidebar.php');
include('db.php');
$sql = "select * from category";
$res = mysqli_query($conn,$sql);
$getSubSql = "select s.*,c.cname from subcategory as s, category as c where c.id = s.cid";
$res_sub =  mysqli_query($conn,$getSubSql);
$id = $_GET['id'];
if($id!=''){
    $getIdwiseData = "select * from subcategory where id = ".$id;
    $query_exc =  mysqli_query($conn,$getIdwiseData);
    $subcatdata = mysqli_fetch_assoc($query_exc);
}
?>
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Subcategory</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Subcategory</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="white-box">
                            <form action="subins.php" method="post" class="form-horizontal form-material">
                                <input type="hidden" name="sid" value="<?php echo (isset($subcatdata))?$subcatdata['id']:''?>" >
                                <div class="form-group">
                                    <label class="col-sm-12">Select Category</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line" name="cid">
                                            <option>--select category--</option>
                                            <?php while($row=mysqli_fetch_assoc($res)) { ?>
                                                <option value="<?php echo $row['id'];?>" <?php echo isset($subcatdata) && ($row['id'] == $subcatdata['cid'])?'selected':'';?>><?php echo $row['cname'];?></option>
                                                <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">SubCategory Name</label>
                                    <div class="col-md-12">
                                        <input type="text" name="sname" placeholder="subcategory" value="<?php echo (isset($subcatdata) ? $subcatdata['sname']:'')?>" class="form-control form-control-line" value="<?php echo (isset($data))?$data['sname']:''?>"> </div>
                                </div>
                                <button class="btn btn-info" type="submit" name="save" value="save">Save Data</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="row">
                            <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Category List</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category</th>
                                            <th>Subcategory</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($row=mysqli_fetch_assoc($res_sub)) { ?>
                                            <tr>
                                                <td><?php echo $row['id'];?></td>
                                                <td><?php echo $row['cname'];?></td>
                                                <td><?php echo $row['sname'];?></td>
                                                <td>
                                                    <a href="subcategory.php?id=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
                                                    <a href="delete.php?sid=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
        </div>
<?php include('footer.php')?>  