<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$session_data = $this->session->userdata('logged_in');
?>
<div class="inbox-view-info">
    <div class="row">
        <div class="col-md-7">
            <img src="<?=get_user_avatar($message->picture,'small');?>" class="img-circle" height="30px" width="30px">
            <span class="bold">
                <?= $message->first_name . " " . $message->last_name; ?></span>

            to 
            <img  src="<?= base_url() . $session_data['picture']; ?>" class="img-circle" height="30px" width="30px">
            <span class="bold"> me </span>
            on <?= $message->date_time; ?>
        </div>

    </div>
</div>
<div class="inbox-view">
    <p><?= strip_tags($message->message); ?> </p>
</div>

<?php
die();
?>