<h1><?php echo $post['title'] ?></h1>
<?php echo validation_errors(); ?>

<?php echo form_open('posts/update') ?>

<input type="hidden" class="" name="id" value="<?php echo $post['id']; ?>" >
<div class="form-group">
<input type="text" class="form-control"  name="title" placeholder="Add Title" value="<?php echo $post['title'] ?>" >
</div>

<div class="form-group">
<label><b>Body</b></label>
<textarea id="editor1" class="form-control" name="body" placeholder="Add body"><?php echo $post['body'] ?></textarea>
</div>

<div class="form-group">

  <label>Categories</label>  
  <select name="category_id"  class="form-control">   
    <?php  foreach($category_id as $category): ?>   
   <option value="<?php echo $category['id']; ?>" > <?php echo $category['name'];?> </option> 
   <?php endforeach;  ?> 
 </select>

</div>

        <button type="submit" class="btn btn-default" href="posts/edit/<?php echo $post['id']; ?>">Update</button>
        
<?php echo form_close(); ?>
  





