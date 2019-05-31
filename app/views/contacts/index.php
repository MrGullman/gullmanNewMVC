<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
    <h2 class="text-center">My Contacts</h2>
    <table class="table table-striped table-condensed table-bordered">
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
                    <td><?= $contact->displayName(); ?></td>
                    <td><?= $contact->email; ?></td>
                    <td><?= $contact->address; ?></td>
                    <td><?= $contact->postalcode ?></td>
                    <td><?= $contact->city ?></td>
                    <td><?= $contact->cell_phone; ?></td>
                    <td></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php $this->end(); ?>