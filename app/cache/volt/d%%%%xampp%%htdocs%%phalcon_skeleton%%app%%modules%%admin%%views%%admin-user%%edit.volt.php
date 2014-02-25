<p>
    <a href="/admin/admin-user" class="btn btn-default"><i class="glyphicon glyphicon-arrow-left"></i> <?php echo $this->helper->translate('Back'); ?></a>
    <?php if (isset($model)) { ?>
        <a href="/admin/admin-user/delete/<?php echo $model->getId(); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> <?php echo $this->helper->translate('Delete'); ?></a>
    <?php } ?>
</p>

<form method="post" action="">
    <?php echo $form->renderDecorated('login'); ?>
    <?php echo $form->renderDecorated('email'); ?>
    <?php echo $form->renderDecorated('password'); ?>
    <?php echo $form->renderDecorated('active'); ?>
    <?php echo $form->renderDecorated('submit'); ?>
</form>