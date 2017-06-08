<main>
<?php foreach ($events as $e){ ?>
<div class="col-md-4 col-sm-12">
    <div class="card post-card">
        <img src="<?= get_image_url($e['org_img']); ?>" class="pull-xs-right" />
        <span><?= $e['o_first_name'] . ' ' . $e['o_last_name']; ?></span>
        <h4 class="media-heading"><?= $e['event_title']; ?></h4>
        <p><?= $e['event_desc']; ?></p>
        <div class="card-action">
            <a href="<?= base_url(); ?>user/detail/<?= $e['event_id']; ?>" class="btn-flat waves-effect">View</a>
        </div>
    </div>
</div>
<?php } ?>
<div class="col-md-4 col-sm-12">
    <div class="card post-card">
        <img src="<?= get_image_url('cover.jpg'); ?>" class="pull-xs-right" />
        <span>posted by:</span>
        <h4 class="media-heading">My Title</h4>
        <p class="block-with-text">Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor</p>
        <div class="card-action">
            <a class="btn-flat waves-effect">View</a>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-12">
    <div class="card post-card">
        <img src="<?= get_image_url('cover.jpg'); ?>" class="pull-xs-right" />
        <span>posted by:</span>
        <h4 class="media-heading">My Title</h4>
        <p class="block-with-text">Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor</p>
        <div class="card-action">
            <a class="btn-flat waves-effect">View</a>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-12">
    <div class="card post-card">
        <img src="<?= get_image_url('cover.jpg'); ?>" class="pull-xs-right" />
        <span>posted by:</span>
        <h4 class="media-heading">My Title</h4>
        <p class="block-with-text">Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor Lorem ipsum idolor</p>
        <div class="card-action">
            <a class="btn-flat waves-effect">View</a>
        </div>
    </div>
</div></main>