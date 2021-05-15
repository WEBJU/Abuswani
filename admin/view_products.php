<?php require_once('./controller/Dashboard.php');
require_once('./Model/DashboardModel.php'); ?>
<?php
  $Dashboard = new Dashboard();
  $active = $Dashboard->active;
  $DashboardModel=new DashboardModel();
  $Arts = $DashboardModel->fetchArt();

?>
<?php require('./nav.php'); ?>
<main role="main">
  <div class="container-fluid">
  	<div class="row p-4 mt-5">
          <div class="col-md-12">
          <h4>Product details</h4>
          <div class="float-right mt-2 mb-4">
            <a  class="btn btn-info"href="dashboard.php">Add New Art</a>
          </div>
          <div class="table-responsive">
                <table id="mytable" class="table table-bordred table-striped">
                     <thead>
                        <th><input type="checkbox" id="checkall" /></th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th colspan="2">Action</th>

                     </thead>
                    <tbody>
                      <?php if ($Arts['status']): ?>
                        <?php foreach ($Arts['data'] as $cat): ?>
                          <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td><?php echo $cat['category_name'] ?></td>
                            <td><?php echo $cat['subcategory_name'] ?></td>
                            <td><?php echo $cat['name'] ?></td>
                            <td><?php echo $cat['description'] ?></td>
                            <td><?php echo $cat['price'] ?></td>
                            <td>+<?php echo $cat['quantity'] ?></td>
                            <td> <img src="images/<?php echo $cat['img'] ?>" alt="" height="50px" width="50px;"> </td>
                            <td><button class="btn btn-primary btn-xs bn-edit" data-title="Edit" data-toggle="modal" data-target="#edit" id="<?php echo $cat['id']; ?>">Edit</button>
                            <button class="btn btn-danger btn-xs bn-delete" data-title="Delete" data-toggle="modal"  id="<?php echo $cat['id']; ?>">Delete</button></td>
                          </tr>
                        <?php endforeach; ?>
                      <?php endif; ?>

                    </tbody>
                  </table>

            <div class="clearfix"></div>
              <ul class="pagination float-right">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</span></a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</span></a></li>
              </ul>
            </div>
          </div>
  	</div>
 </div>

    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fas fa-minus-octagon" aria-hidden="true"></span></button>
            <h4 class="modal-title custom_align" id="Heading">Edit Art Details</h4>
          </div>
              <div class="modal-body">
                <form method="post" id="#frmEdit" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">

                <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 mt-4">
                  <div class="form-group">
                    <label for="inputName" class="sr-only">Product Category</label>
                    <select class="form-control" id="category_dropdown" name="category_dropdown">
                      <option value="0">Select Category...</option>
                      <?php if($Cats['status']): ?>
                        <?php foreach ($Cats['data'] as $cat):  ?>
                          <option value="<?php echo $cat['id']; ?>"><?php echo $cat['category_name']; ?></option>
                        <?php endforeach; ?>
                      <?php endif; ?>

                    </select>

                  </div>
                  <div class="form-group">
                    <label for="subcategory_dropdown" class="sr-only">Product Sub Category</label>
                    <select class="form-control" id="subcategory_dropdown" name="subcategory_dropdown">
                      <option value="0">Select subcategory...</option>
                      <option value="1">Artworks</option>
                    </select>

                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 mt-4">
                  <div class="form-group">
                    <label for="name" class="sr-only">Product Name</label>
                    <input type="text" id="name" class="form-control" placeholder="Product Name" name="name" required autofocus value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">

                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 mt-4">
                  <div class="form-group">
                    <label for="inputPhone" class="sr-only">Product Description</label>
                    <textarea rows="3" type="text" id="description" class="form-control" placeholder="Product Description" name="description" required autofocus value="<?php if (isset($_POST['description'])) echo $_POST['description'] ?>"></textarea>

                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 mt-4">
                  <div class="form-group">
                    <label for="inputPhone" class="sr-only">Price</label>
                    <input type="text" id="price" class="form-control" placeholder="Price" name="price" required autofocus value="<?php if (isset($_POST['phone'])) echo $_POST['phone'] ?>">

                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 mt-4">
                  <div class="form-group">
                    <label for="inputPhone" class="sr-only">Quantity</label>
                    <input type="text" id="quantity" class="form-control" placeholder="Quantity" name="quantity" required autofocus value="<?php if (isset($_POST['quantity'])) echo $_POST['quantity'] ?>">

                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 mt-4">
                  <div class="form-group">
                    <label for="product_image">Upload Product Image</label><br>
                    <input type="file" id="product_image"   name="product_image" required autofocus value="<?php if (isset($_POST['product_image'])) echo $_POST['product_image'] ?>">

                  </div>
                </div>


              </div>
              <div class="modal-footer ">
                <button id="update" type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
              </form>
            <p class="mt-5 text-center mb-3 text-muted">&copy; Abuswani <?php echo date('Y'); ?></p>
          </div>
            </div>
        <!-- /.modal-content -->
      </div>
          <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
          </div>
              <div class="modal-body">

           <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

          </div>
            <div class="modal-footer ">
            <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
          </div>
            </div>
        <!-- /.modal-content -->
           </div>
          <!-- /.modal-dialog -->
          </div>


              <!-- Modal for message-->
              <div class="modal fade" id="messageModal" tabindex="-1"
                  role="dialog" data-backdrop="static"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                              <button type="button" class="close"
                                  data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <h4 class="text-center" id="msg"></h4>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary"
                                  data-dismiss="modal">Close</button>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- Modals ends here -->
    </main>
  </body>
</html>
