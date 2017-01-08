<?php if($this->session->flashdata('iteminserted')): ?>
<div class="alert alert-success">
<?php echo  $this->session->flashdata('iteminserted') ;?>
</div>

<?php endif;?>
<?php if($this->session->flashdata('donoradded')): ?>
<div class="alert alert-success">
<?php echo  $this->session->flashdata('donoradded') ;?>
</div>

<?php endif;?>
<?php if($this->session->flashdata('memberadded')): ?>
<div class="alert alert-success">
<?php echo  $this->session->flashdata('memberadded') ;?>
</div>

<?php endif;?>
<?php if($this->session->userdata('logged_in')) : ?>
<h2>logged in as admin</h2>
<table class="table table-striped">
  
  <tr>
  <th>Full Name</th>
  <th>Person Type</th>

  <th>Date of Donation</th>
  <th>Brand</th>
  <th>Size</th>
  <th>Selling Price</th>
  <th>Category</th>
  </tr>
 <?php foreach(($this->Donor_model->displaydetails()) as $row) : ?> 
  <tr>
  
   <td><?php echo $row->fullname ?></td>
   <td><?php echo $row->persontype ?></td>
   
   <td><?php echo $row->date_of_donation ?></td>
   <td><?php echo $row->brand ?></td>
   <td><?php echo $row->size ?></td>
   <td><?php echo $row->selling_price?></td>
   
   <td><a href="<?php echo base_url()?>admin/editcategory/<?php echo $row->i_id?>"><?php echo $row->category ?></a></td>
   
   </tr>
<?php endforeach ?>
</table>
<?php else : ?>  
       <h2>Please login as an Admin to access</h2>	
	   
	  <?php endif;?>