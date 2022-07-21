
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
</head>
<body>
<h1><?= $title ?></h1>

<?php foreach($posts as $post):?>
 
<h1 class="title"><?php echo $post['title']; ?></h1>
<large class="post-date">Posted On: <?php echo $post['created_at']; ?></large>
<!-- <ul class=""><li><strong>Categories: <?php echo $post['name']; ?> </strong></ul></li> -->

<div class="card-content"><?php echo word_limiter($post['body'], 60); ?>
<br><br></div>

<p><a class="btn btn-default" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
<br><br>

<?php endforeach ?>

<?php echo $this->pagination->create_links(); ?>

</body>
</html>



