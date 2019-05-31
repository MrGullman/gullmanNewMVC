<form class="form" action="<?=$this->postAction?>" method="POST">
    <div class="bg-danger form-errors"><?=$this->displayErrors ?></div>
    <?= inputBlock('text', 'First Name', 'fname', $this->contact->fname, ['class'=>'form-control'], ['class'=>'form-group col-md-6']); ?>
    <?= inputBlock('text', 'Last Name', 'lname', $this->contact->lname, ['class'=>'form-control'], ['class'=>'form-group col-md-6']); ?>
    <?= inputBlock('text', 'Address', 'address', $this->contact->address, ['class'=>'form-control'], ['class'=>'form-group col-md-6']); ?>
    <?= inputBlock('text', 'Address2', 'address2', $this->contact->address2, ['class'=>'form-control'], ['class'=>'form-group col-md-6']); ?>
    <?= inputBlock('text', 'City', 'city', $this->contact->city, ['class'=>'form-control'], ['class'=>'form-group col-md-8']); ?>
    <?= inputBlock('text', 'Postalcode', 'postalcode', $this->contact->postalcode, ['class'=>'form-control'], ['class'=>'form-group col-md-4']); ?>
    <?= inputBlock('text', 'Home Phone', 'home_phone', $this->contact->home_phone, ['class'=>'form-control'], ['class'=>'form-group col-md-4']); ?>
    <?= inputBlock('text', 'Cell Phone', 'cell_phone', $this->contact->cell_phone, ['class'=>'form-control'], ['class'=>'form-group col-md-4']); ?>
    <?= inputBlock('text', 'Work Phone', 'work_phone', $this->contact->work_phone, ['class'=>'form-control'], ['class'=>'form-group col-md-4']); ?>
    <?= inputBlock('email', 'Email', 'email', $this->contact->email, ['class'=>'form-control'], ['class'=>'form-group col-md-6']); ?>
    <div class="col-md-12 text-right">
        <a href="<?=PROOT?>contacts" class="btn btn-default">Cancel</a>
        <?= submitTag('Save', ['class'=>'btn btn-primary']); ?>
    </div>
</form>