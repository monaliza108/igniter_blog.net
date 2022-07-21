 <?php echo validation_errors(); ?>

<?php 
//open current page name:
form_open('posts/create');
?>

<form method="post" action="<?php echo site_url('Posts/insert_data') ?> " >
  <div class="form-group">
    <label><b>Title</b></label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
</div>

<div class="form-group">
    <label><b>Input Post Type</b></label>
    <textarea class="form-control" name="slug" placeholder="Add Post Type"></textarea>
</div>

<div class="form-group">
    <label><b>Body</b></label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add body"></textarea>
</div>

<div class="form-group">

  <label>Categories</label>  
  <select name="category_id"  class="form-control">   
    <?php  foreach($category_id as $category): ?>   
   <option value="<?php echo $category['id']; ?>" > <?php echo $category['name'];?> </option> 
   <?php endforeach; ?> 
 </select>

</div>

<br><br>
    <button type="submit" class="btn btn-default">Submit</button>
  
</form>




