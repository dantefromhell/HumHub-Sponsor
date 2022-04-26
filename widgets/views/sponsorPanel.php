<div class="panel">

    <div class="panel panel-default sponsors" id="profile-sponsors-panel">
        <?php echo \humhub\widgets\PanelMenu::widget(['id' => 'profile-sponsors-panel']); ?>


        <div class="panel-heading">
            <strong>Sponsors</strong>
        </div>

<?php if ( ! empty($mySponsor) ) : ?>
        <div class="panel-body">
            Invited by<br>
<?= $mySponsor ?>
        </div>
<?php endif; ?>

<?php if ( ! empty($iSponsor) ) : ?>
        <div class="panel-body">
            I invited...<br>
<?= $iSponsor ?>
        </div>
<?php endif; ?>

    </div>

</div>
