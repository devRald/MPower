<br><br>
<div class="row row-event-detail">
    <section id="venue" class="col-md-4">
        <figure class="event-photo">
            <img src="<?= get_image_url('cover.jpg'); ?>" class="img-fluid z-depth-2" />
            <figcaption><h3><?= $detail['event_venue']; ?></h3></figcaption>
        </figure>
        <h4 id="event-date" class="text-xs-center"><?= $detail['start_date']; ?></h4>
        <h6 class="text-xs-center">by <a><strong><?= $detail['o_first_name'] . ' ' . $detail['o_last_name']; ?></strong></a>, 22.06.2016</h6>
        <a href="<?= base_url().'user/attend/'.$detail['event_id']; ?>" id="btn-attend" class="btn btn-primary" role="button">Attend</a>
    </section>
    <section id="details" class="col-md-8"><br>
        <div class="event-details">
            <h5 class="blue-text "><i class="fa fa-map "></i>Travels</h5>
            <hr>
            <h4><?= $detail['event_title']; ?></h4>
            <p><?= $detail['event_desc']; ?></p>
        </div><br>
        <div class="speaker-details">
            <h5 class="blue-text "><i class="fa fa-map "></i>Speakers</h5>
            <hr>
            <?php foreach ($speaker as $s) { ?>
            <div class="col-md-4">
                <div class="avatar">
                    <img src="<?= get_image_url($s['speaker_img']); ?>" class="img-circle center-block">
                    <h4 class="text-xs-center"><?= $s['s_first_name'] . ' ' . $s['s_last_name']; ?></h4>
                    <h5 class="text-xs-center"><?= $s['speaker_title']; ?></h5>
                </div>    
            </div>
            <?php } ?>
        </div>
    </section>
</div>