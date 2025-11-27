<?php



/**
 *
 */

$posts = require __DIR__ . '/components/posts-db.php';

$author = $_POST['author'] ?? null;
$title = $_POST['title'] ?? null;
$content = $_POST['content'] ?? null;
$date = date('Y-m-d H:i:s') ?? null;

$errors = [];

if (!isset($date)) {
  $date = date('d.m.Y H:i');
}

if (isset($title) && isset($content)) {
  if (empty($author)) {
    $author = "anonym";
  }

  if (empty($title) || empty($content)) {
    $errors[] = "Název a obsah jsou povinné.";
  }

  if (!empty($errors)) {
    foreach ($errors as $error) {
      echo "<p class='bg-red-500/60 border border-red-600 p-2'>$error</p>";
    }
    return;
  }

  $posts[] = [
    'author' => $author,
    'title' => $title,
    'content' => $content,
    'date' => $date
  ];

  file_put_contents(
    __DIR__ . '/components/posts-db.php',
    "<?php\nreturn " . var_export($posts, true) . ";\n"
  );

  echo "<p class='bg-green-500/30 border border-green-500 p-4 m-4 rounded-xl'>Příspěvek byl uložen.</p>";

} else {
  return 0;
}


