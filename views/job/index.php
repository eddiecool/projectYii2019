<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1 class="page-header">Jobs <a class="btn btn-primary pull-right" href="yii/job/web/index.php?r=job/create">Create</a></h1>

<?php
$msg = yii::$app->getSession()->getFlash('success');
if(null !==$msg): ?>
    <div class=""alert alert-success"> <?= $msg; ?></div>
<?php endif; ?>


<?php if (!empty($jobs)) : ?>
<div class="row">

    <?php  foreach ($jobs as $job) : ?>

    <div class="col-sm-6 col-md-3 myjob">
        <h3><?= $job->title; ?></h3>

        <?php
        $description = strip_tags($job->description);
        if (strlen($description) > 80) {
            $formated_des = substr($description, 0, 80);
            $description = substr($formated_des, 0, strrpos($formated_des, ' ')  );
        }
        ?>

        <p><strong>Description:</strong><?= $description ?></p>
        <p><strong>City:</strong><?= $job->city; ?></p>
        <p><strong>Address:</strong><?= $job->address; ?></p>
        <p><strong>List on:</strong><?= $job->create_date; ?></p>
        <a class="btn btn-default pull-right" href="yii/job/web/index.php?r=job/details&id=<?= $job->id; ?>">Read More..</a>
    </div>

    <?php endforeach; ?>

</div>

<?php else : ?>
<p class="lead">No Job to list </p>

<?php endif; ?>

<?= LinkPager::widget(['pagination' => $pagination]); ?>