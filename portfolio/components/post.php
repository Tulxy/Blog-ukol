<?php
global $title, $content, $author, $postIndex;
?>

<a href="show-post.php?id=<?= $postIndex ?>" class="block border border-gray-200 rounded-xl shadow hover:shadow-lg transition p-6 m-4 bg-white hover:bg-gray-50">
    <div class="flex justify-between items-center mb-3">
        <h3 class="text-gray-500 font-medium"><?= htmlspecialchars($author) ?></h3>
        <span class="text-sm text-gray-400"><?= date('M d, Y') ?></span>
    </div>
    <h2 class="text-2xl font-bold text-gray-900 mb-2"><?= htmlspecialchars($title) ?></h2>
    <p class="text-gray-700 text-lg line-clamp-3"><?= htmlspecialchars($content) ?></p>
</a>
