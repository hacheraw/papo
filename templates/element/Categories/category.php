<?php
$h ??= 2;
?>
<div style="margin-left: <?= $h-2 ?>em">
<?= "<h$h>" ?><?= h($category->name) ?><?= "</h$h>" ?>
<?php foreach ($category->tasks as $task) : ?>
  <div><?= $this->element('Tasks/task', compact('task')) ?></div>
<?php endforeach; ?>
<?php
foreach ($category->children as $children) {
  echo $this->element('Categories/category', ['category' => $children, 'h' => min(++$h, 6) ]); // ! RECURSIVIDAD FTW!
}
?>
</div>