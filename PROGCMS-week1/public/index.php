<?php include "../private/init.php"?>
<?php include SHARED_PATH . "/header.php"; phpinfo() ?>

<h1>
  Home
</h1>

<br>
<a href="<?php echo url_path("contentbeheer/index.php") ?>">Beheer</a>
<br>
<a href="<?php echo url_path("contentbeheer/blogs.php") ?>">Blogs</a>
<br>

<?php include SHARED_PATH . "/footer.php"; ?>