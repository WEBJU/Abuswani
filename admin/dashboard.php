<?php require_once('./controller/Dashboard.php');
require_once('./Model/DashboardModel.php'); ?>
<?php
  $Dashboard = new Dashboard();
  $active = $Dashboard->active;
  $DashboardModel=new DashboardModel();
  $Cats = $Dashboard->getCategory();

?>
<?php require('./nav.php'); ?>
  <main role="main">
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-6 col-lg-6 center-align center-block">

          <?php

            if ($_POST) {
            $DashboardModel->category_id=$_POST['category_dropdown'];
            $DashboardModel->subcategory_id=$_POST['subcategory_dropdown'];
            $DashboardModel->name=$_POST['name'];
            $DashboardModel->description=$_POST['description'];
            $DashboardModel->price=$_POST['price'];
            $DashboardModel->quantity=$_POST['quantity'];
            $image_name=$_FILES['product_image']['name'];
            $tmp_dir=$_FILES['product_image']['tmp_name'];
            $imgSize=$_FILES['product_image']['size'];
            $upload_dir='images/';
            $imgExt=strtolower(pathinfo($image_name,PATHINFO_EXTENSION));
            $valid_extensions=array('jpeg','jpg','png','gif');
            $DashboardModel->img=rand(1000,1000000).".".$imgExt;

            if (in_array($imgExt,$valid_extensions)) {
              // check if file size is less than 5m
              if ($imgSize < 5000000) {
                move_uploaded_file($tmp_dir,$upload_dir.$DashboardModel->img);
              }else {
                echo "<div class='alert alert-danger'>image is too big!!</div>";
              }
            }else {
              echo "<div class='alert alert-danger'>image format not allowed!!</div>";
            }

            if ($DashboardModel->createProduct()) {
                  echo "<div class='alert alert-success'>New product added successfully!!</div>";
            }else {
                  echo "<div class='alert alert-danger'>Could not create new product!!</div>";
              }
            }
           ?>
          <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">

            <h4 class="h3 mb-3 font-weight-normal text-center">Add New Product</h4>
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
            <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
              <button class="btn btn-md btn-primary btn-block" type="submit">Upload</button>
            </div>
            <p class="mt-5 text-center mb-3 text-muted">&copy; Abuswani <?php echo date('Y'); ?></p>
          </form>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>


<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
  // detect change of dropdown
$("#category_dropdown").change(function(){

    // get id of selected team
    var category_id=$(this).find(':selected').val();
    // set json url
    // var json_url="category_json.php?category_id=" + category_id;

    // get json data
    // jQuery.getJSON(json_url, function(data){
    //   // empty contents of sub categories dropdown
    //  $("#subcategory_dropdown").html("");
    //  $("#subcategory_dropdown").append("<option value='0'>Select subcategory...</option>");
    //
    //  // put new dropdown values to players dropdown
    //  jQuery.each(data, function(key, val){
    //    console.log(val.subcategory_name);
    //      $("#subcategory_dropdown").append("<option value='" + val.id + "'>" + val.subcategory_name + "</option>")
    //  });
    // });
    if (category_id) {

      $.ajax({
        url:"category_json.php",
        datatype:"json",
        data:{'category_id':category_id},
        success:function(){
          console.log("success");
          $("#subcategory_dropdown").empty();
          $.each(data,function(key,value){
            $('#subcategory_dropdown').append('<option value="'+ key +'">'+ value +'</option>');

            // $("#subcategory_dropdown").append('<option value="'+value.id+'">'+value.subcategory_name+'</option>');

          });

        },error:function(){
          console.log("error");
        }
      });
    }else {
        $("#subcategory_dropdown").empty();
    }
  });
});
</script>

</html>
