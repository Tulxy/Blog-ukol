<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Contacts</title>
</head>
<body class="bg-gray-900 text-white">

<?php
require_once __DIR__ . '/components/header.php';
require __DIR__ . '/functions.php';
?>

<section class="max-w-xl mx-auto mt-10">
  <h1 class="text-3xl font-bold mb-6 text-white text-center">Add a Post</h1>

  <form method="POST" class="bg-gray-950/60 border border-gray-800 rounded-xl shadow-lg p-6 space-y-4">
    <div>
      <label for="author" class="block font-semibold mb-1">Author</label>
      <input
        type="text"
        name="author"
        id="author"
        placeholder="Your name"
        class="border border-gray-300 w-full rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-teal-500 transition"
      >
    </div>

    <div>
      <label for="title" class="block font-semibold mb-1">Title</label>
      <input
        type="text"
        name="title"
        id="title"
        placeholder="Post title"
        class="border border-gray-300 w-full rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-teal-500 transition"
      >
    </div>

    <div>
      <label for="content" class="block font-semibold mb-1">Content</label>
      <textarea
        name="content"
        id="content"
        placeholder="Write your post here..."
        class="border border-gray-300 w-full rounded-lg p-2 resize-none h-24 focus:outline-none focus:ring-2 focus:ring-teal-500 transition"
      ></textarea>
    </div>

    <button type="submit" class="bg-teal-600 text-white font-bold rounded-lg p-3 w-full hover:bg-teal-700 transition">
      Add Post
    </button>
  </form>
</section>


<?php
require_once __DIR__ . '/components/footer.php';
?>
</body>
</html>
