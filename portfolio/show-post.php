<?php
$posts = array_reverse(require __DIR__ . '/components/posts-db.php');

$id = $_GET['id'] ?? null;

if ($id === null || !isset($posts[$id])) {
  echo "Post not found";
  exit;
}

$post = $posts[$id];


global $title, $content, $author, $postIndex;

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title><?= $title ?></title>
</head>
<body class="bg-gray-900">

<?php require_once __DIR__ . '/components/header.php' ?>

<div class="max-w-4xl h-100 mx-auto mt-20 bg-gray-950/60 border border-gray-800 rounded-xl shadow-lg p-6">
  <span class="text-sm text-gray-400"><?= date('M d, Y') ?></span>
  <h1 class="text-3xl font-bold mb-2 text-white"><?= htmlspecialchars($post['title']) ?></h1>
  <h3 class="text-gray-500 mb-4">By <strong class="text-gray-300"><?= htmlspecialchars($post['author']) ?></strong></h3>
  <p class="text-gray-400 leading-relaxed"><?= nl2br(htmlspecialchars($post['content'])) ?></p>
</div>

<?php require_once __DIR__ . '/components/footer.php' ?>

</body>
</html>


