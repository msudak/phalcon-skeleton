<p><a href="/admin/admin-user" class="btn btn-default"><i class="glyphicon glyphicon-arrow-left"></i> <?php echo $this->helper->translate('Back'); ?></a></p>

<form method="post" action="">
    <?php echo $form->renderDecorated('login'); ?>
    <?php echo $form->renderDecorated('email'); ?>
    <?php echo $form->renderDecorated('password'); ?>
    <?php echo $form->renderDecorated('active'); ?>
    <?php echo $form->renderDecorated('submit'); ?>
</form>