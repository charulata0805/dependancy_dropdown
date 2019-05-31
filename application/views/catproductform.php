
<html>
<head>
    <title>Codeigniter Dynamic Dependent Select Box using Ajax</title>
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <style>
 .box
 {
  width:100%;
  max-width: 650px;
  margin:0 auto;
 }
 </style>
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Add Category Product</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Add Form
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<form method="POST" action="<?php echo base_url(); ?>index.php/catproducts/insert">
			<div class="control-group">
             <label>Select Category</label>
			   <select name="category_id" id="category_id" class="form-control input-lg">
				<option value="">Select Country</option>
				<?php
				foreach($cats as $row)
				{
				 echo '<option value="'.$row->id.'">'.$row->category.'</option>';
				}
				?>
			   </select>
          </div>
  <br/>
  
            <div class="control-group">
             <label>Select Sub Category</label>
	           <select name="sub_category_id"  class="form-control"  id="sub_category_id">
			    
			      <option value="" selected>-- Select --</option>
			       		  									
			 </select>	
	        </div>	
  <br/>
  
               <div class="form-group">
					<label>Select Product:</label>
					<select name="product_id"  class="form-control"  id="product_id" >
			     <option value="" selected>-- Select --</option>
			        <?php  foreach($product as $pp){ ?>
			     <option value="<?php echo $pp->id; ?>"><?php echo $pp->product_name; ?></option>
			       <?php } ?>			  									
			 </select>
				</div>
				<div class="form-group">
					<label>Product Prize:</label>
					 <select name="prize"  class="form-control"  id="prize">
			    
			      <option value="" selected>-- Select --</option>
			       		  									
			 </select>	
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</form>
 </div>
</body>
</html>
<script>
$(document).ready(function(){
 $('#category_id').change(function(){
  var category_id = $('#category_id').val();
  
  if(category_id != '')
  {//alert(<?php echo base_url(); ?>catproducts/addnew);
   $.ajax({
    url:"http://localhost/codeigniter_dependancy_task/index.php/catproducts/fetch_subcategory",
    method:"POST",
    data:{category_id:category_id}, 
    success:function(data)
    { //alert(data);
     $('#sub_category_id').html(data);
    
    }
   });
  }
  else
  {
   $('#sub_category_id').html('<option value="">Select Sub Product</option>');
  
  }
 });
 
});
</script>
<script>
$(document).ready(function(){
  $('#product_id').change(function(){
  var product_id = $('#product_id').val();
  
  if(product_id != '')
  {
   $.ajax({
    url:"http://localhost/codeigniter_dependancy_task/index.php/catproducts/fetch_pprize",
    method:"POST",
    data:{product_id:product_id}, 
    success:function(data)
    {
     $('#prize').html(data);
    
    }
   });
  }
  else
  {
   $('#prize').html('<option value="">Select Prize</option>');
  
  }
 });
});
</script>