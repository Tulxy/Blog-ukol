<?php
global $title, $content, $author, $date, $postIndex;
?>

<a href="show-post.php?id=<?= $postIndex ?>" class="block bg-gray-950/60 border border-gray-800 rounded-xl shadow hover:shadow-lg transition p-6 m-4 hover:bg-gray-800">
    <div class="flex justify-between items-center mb-3">
        <h3 class="text-gray-300 font-medium">By <strong class="text-gray-200"><?= htmlspecialchars($author) ?></strong></h3>
        <span class="text-sm text-gray-400"><?= $date ?></span>
    </div>
    <h2 class="text-2xl font-bold text-gray-200 mb-2"><?= htmlspecialchars($title) ?></h2>
    <p class="text-gray-400 text-lg line-clamp-3"><?= htmlspecialchars($content) ?></p>
</a>
