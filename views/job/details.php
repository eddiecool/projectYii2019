<a href="index.php?r=job" class="btn btn-primary"> Back to Job</a>


<div class=""row>
    <h2 class="page-header">
        <?= $job->title; ?>
        <small>In <?= $job->city; ?>, <?= $job->address; ?> </small>
    </h2>
    <?php if(!empty($job->description)) : ?>
    <div class="well">

        <h4> Job Description: </h4>
        <p> <?= $job->description; ?></p>

    </div>
    <?php endif; ?>

    <ul class="list-group">
        <?php
        if(!empty($job->create_date)) :
        $mydate = strtotime($job->create_date);
        $dtformat = date("F j,Y", $mydate );
        ?>
        <li class="list-group-item">
            <strong>Listing date: </strong><?= $dtformat; ?>
        </li>
        <?php endif; ?>
    </ul>
</div>