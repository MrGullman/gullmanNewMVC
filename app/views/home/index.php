<?php $this->start('body'); ?>
<h1 class="text-center mt-4 coral">Welcome to Gullman MVC Framwork!</h1>
<?= inputBlock('text', 'Favorite Color', 'favorite_color', 'Violet', ['class'=>'form-control'], ['class'=>'form-group']); ?>
<?= submitBlock('Registrera', ['class'=>'btn btn-primary btn-large'], ['class'=>'text-right']); ?>
<?php $this->end(); ?>
