<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Posts</title>
</head>
<body class="bg-white">

<?php require __DIR__ . '/functions.php'; ?>

<?php
require_once __DIR__ . '/components/header.php';
?>

<section class="m-4">
  <form method="POST" class="bg-gray-100 flex flex-col p-4 rounded-lg shadow-xl">
    <label for="author">Author</label>
    <input class="border border-black rounded-lg p-2" type="text" name="author" id="author">

    <label for="title">Title</label>
    <input class="border border-black rounded-lg p-2" type="text" name="title" id="title">

    <label for="content">Content</label>
    <input class="border border-black rounded-lg p-2" type="text" name="content" id="content">

    <button class="bg-teal-600 rounded-lg p-2 mt-2" type="submit">Add Post</button>
  </form>
</section>

<section class="mx-4">
  <?php
  $posts = array_reverse(require __DIR__ . '/components/posts-db.php');

  if (!empty($posts)) {
    foreach ($posts as $post) {
      $author = $post['author'];
      $title = $post['title'];
      $content = $post['content'];

      require __DIR__ . '/components/post.php';
    }
  } else {
    echo '<h1 class="text-black">No posts found.</h1>';
  }
  ?>

</section>


<?php
require_once __DIR__ . '/components/footer.php';
?>
</body>
</html>
