<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
    <h2 class="text-center">My Contacts</h2>
    <table class="table table-striped table-condensed table-bordered table-hover">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Adress</th>
            <th>Postalcode</th>
            <th>City</th>
            <th>Cellphone</th>
            <th></th>
        </thead>
        <tbody>
            <?php foreach($this->contacts as $contact) : ?>
                <tr>
                    <td><a href="<?=PROOT?>/contacts/details/<?=$contact->id?>"><?= $contact->displayName(); ?></a></td>
                    <td><?= $contact->email; ?></td>
                    <td><?= $contact->address; ?></td>
                    <td><?= $contact->postalcode ?></td>
                    <td><?= $contact->city ?></td>
                    <td><?= $contact->cell_phone; ?></td>
                    <td>
                        <a href="<?=PROOT?>contacts/edit/<?=$contact->id?>" class="btn btn-xs btn-info">
                            <i class="glyphicin glyphicon-pencil"></i> Edit
                        </a>
                        <a href="<?=PROOT?>contacts/delete/<?=$contact->id?>" class="btn btn-xs btn-danger" onclick="if(!confirm('Are you Sure?')){return false}">
                            <i class="glyphicon glyphicon-remove"></i> Delete
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php $this->end(); ?>