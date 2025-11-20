<?php

/**
 *
 */
$posts = require __DIR__ . '/components/posts-db.php';

if (!empty($_POST['author']) && !empty($_POST['title']) && !empty($_POST['content'])) {

  $posts[] = [
    'author' => $_POST['author'],
    'title' => $_POST['title'],
    'content' => $_POST['content']
  ];

  file_put_contents(
    __DIR__ . '/components/posts-db.php',
    "<?php\nreturn " . var_export($posts, true) . ";\n"
  );
}
?>
