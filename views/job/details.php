<a href="index.php?r=job" class="btn btn-primary"> Back to Job</a>


<div class=""row>
    <h2 class="page-header">
        <?= $job->title; ?>
        <small>In <?= $job->city; ?>, <?= $job->address; ?> </small>
    </h2>
    <?php if(!empty($job->description)) : ?>
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


            <?php if(!empty($job->category->name)) :?>
                <li class="list-group-item">
                    <strong>Category Name: </strong><?= $job->category->name; ?>
                </li>
            <?php endif; ?>


            <?php if(!empty($job->type)) :?>
                <li class="list-group-item">
                    <strong>Type: </strong><?= ucwords(str_replace('_', ' ', $job->type)); ?>
                </li>
            <?php endif; ?>


            <?php if(!empty($job->requirements)) :?>
                <li class="list-group-item">
                    <strong>Requiements: </strong><?= $job->requirements; ?>
                </li>
            <?php endif; ?>


            <?php if(!empty($job->salary_range)) :?>
                <li class="list-group-item">
                    <strong>Salary Range: </strong><?= $job->salary_range; ?>
                </li>
            <?php endif; ?>


            <?php if(!empty($job->contact_email)) :?>
                <li class="list-group-item">
                    <strong>Contact Email: </strong><?= $job->contact_email; ?>
                </li>
            <?php endif; ?>


            <?php if(!empty($job->contact_phone)) :?>
                <li class="list-group-item">
                    <strong>Contact Phone: </strong><?= $job->contact_phone; ?>
                </li>
            <?php endif; ?>


        </ul>

    <div class="well text-center">
        <a href="mailto:<?= $job->contact_email; ?>" class="btn btn-success">Contact Employer</a>

    </div>
    <?php endif; ?>

    <div class="well">

        <h4> Job Description: </h4>
        <p> <?= $job->description; ?></p>

    </div>
</div>