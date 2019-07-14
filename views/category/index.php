<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
<h1 class="page-header">Category</h1>

<ul class="list-group">
    <?php  foreach ($categories as $category) : ?>

    <li class="list-group-item">
        <a href="/index.php?r=job&category=<?= $category->id; ?>"><?= $category->name; ?></a>
    </li>

    <?php endforeach; ?>

</ul>


<?= LinkPager::widget(['pagination' => $pagination]); ?>