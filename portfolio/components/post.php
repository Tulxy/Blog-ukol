<?php
global $title, $content, $author;
?>

<article class="border-b border-b-gray-600 m-4 p-6">
  <h3><?= $author ?> </h3>
  <h2 class="text-2xl text-black"><?= $title ?> </h2>
  <p class="text-lg text-gray-700 truncate"><?= $content?> </p>
</article>
