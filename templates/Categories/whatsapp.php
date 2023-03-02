<?php foreach ($categories as $category) : ?>
  <?= $this->element('Categories/category', compact('category')) ?>
<?php endforeach; ?>