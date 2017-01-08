<form role="form" method="post" action="<?php echo base_url()?>admin/update/<?php echo $products->i_id?>">
  <div class="form-group">
    <label>Brand</label>
    <input name="brand" type="text" class="form-control" placeholder="Enter Category" value="<?php echo $products->brand ;?>">
  </div>
   <div class="form-group">
    <label>Category</label>
    <input name="category" type="text" class="form-control" placeholder="Enter Category" value="<?php echo $products->category ;?>">
  </div>
   <div class="form-group">
    <label>Size</label>
    <input name="size" type="text" class="form-control" placeholder="Enter Category" value="<?php echo $products->size ;?>">
  </div>
   <div class="form-group">
    <label>Selling Price</label>
    <input name="sellingprice" type="text" class="form-control" placeholder="Enter Category" value="<?php echo $products->selling_price ;?>">
  </div>
 <div>
<input name="submit" type="submit" class="btn btn-default" value="Submit"><a href="<?php echo base_url()?>admin" style="float:left;"class="btn btn-default">Cancel</a>
<input name="delete" type="submit" class="btn btn-default" value="Delete">
</div>
  </form>