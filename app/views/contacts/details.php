<?php $this->setSiteTitle($this->contact->displayName()); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="col-md-8 col-md-offset-2 well">
    <a href="<?=PROOT?>/contacts" class="btn btn-xs btn-default">Back</a>
    <h2 class="text-center"><?=$this->contact->displayName()?></h2>
    <div class="col-md-6">
        <p><span><strong>Email: </strong></span><?=$this->contact->email;?></p>
        <p><span><strong>Cell Phone: </strong></span><?=$this->contact->cell_phone;?></p>
        <p><span><strong>Home Phone: </strong></span><?=$this->contact->home_phone;?></p>
        <p><span><strong>Work Phone: </strong></span><?=$this->contact->work_phone;?></p>
    </div>
    <div class="col-md-6">
        <?= $this->contact->displayAddressLabel(); ?>
    </div>
</div>
<?php $this->end(); ?>