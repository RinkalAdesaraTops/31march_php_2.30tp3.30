<?php 
include('header.php');
include('sidebar.php');
include('db.php');
$sql = "select * from category";
$res = mysqli_query($conn,$sql);
?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Product</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Product</li>
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
                                            <option value="">--Select Category--</option>
                                            <?php while($row=mysqli_fetch_assoc($res)) { ?>
                                                <option value="<?php echo $row['id'];?>" <?php echo isset($subcatdata) && ($row['id'] == $subcatdata['cid'])?'selected':'';?>><?php echo $row['cname'];?></option>
                                                <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Select Subcategory</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line" name="sid">
                                            <option value="">--Select Subcategory--</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Product Name</label>
                                    <div class="col-md-12">
                                        <input type="text" name="sname" placeholder="Enter Product" value="<?php echo (isset($subcatdata) ? $subcatdata['sname']:'')?>" class="form-control form-control-line" value="<?php echo (isset($data))?$data['sname']:''?>"> </div>
                                </div>
                                <button class="btn btn-info" type="submit" name="save" value="save">Save Data</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="row">
                            <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Product List</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category</th>
                                            <th>Subcategory</th>
                                            <th>Product</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
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