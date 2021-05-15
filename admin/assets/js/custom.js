$(document).ready(function(){
  $(document).on('click','.bn-edit',function(){

    var id=this.id;
    $.ajax({
      url:'read.php',
      type:'POST',
      dataType:'JSON',
      data:{"id":id},
      success:function(response){
        // $("#edit").modal('show');
        $("category_dropdown").val(response.category_name);
        $("subcategory_dropdown").val(response.subcategory_name);
        $("name").val(response.name);
        $("description").val(response.description);
        $("price").val(response.price);
        $("quantity").val(response.quantity);
        $("img").val(response.img);
      }
    });
  });

  $(document).on('click' , '#update' ,function(){

      $.ajax({
          url: 'edit.php',
          type: 'POST',
          dataType: 'JSON',
          data: $("#frmEdit").serialize(),
          success:function(response){
            $("#messageModal").modal('show');
            $("#msg").html(response);
            $("#edit-modal").modal('hide');
            // loadData();
          }
        });
    });

  $(document).on('click' , '.bn-delete' ,function(){
    if(confirm("Are you sure want to delete the record?")) {
      var id = this.id;
      $.ajax({
        url: 'delete.php',
        type: 'POST',
        dataType: 'JSON',
        data: {"id":id},
        success:function(response){
          // loadData();
          console.log("Yes");
        }
      });
    }
  });
});
// function loadData() {
// 	$.ajax({
// 		url: 'read.php',
// 		type: 'POST',
// 		data: {"type":"all"},
// 		success:function(response){
// 			$("#container").html(response);
// 		}
// 	});
// }
