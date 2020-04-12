<?php require APPROOT . '/views/inc/header.php'; ?>
<h1><?php echo $data['title'] ?></h1>
<!-- example access to model data -->
<ul>
    <?php foreach($data['posts'] as $post) : ?>
        <li><?php echo $post->title; ?></li>
    <?php endforeach; ?>
</ul>
<!-- end example -->
<?php require APPROOT . '/views/inc/footer.php'; ?>