<p><a href="/admin/admin-user/edit/<?php echo $model->getId(); ?>" class="btn btn-default"><i class="glyphicon glyphicon-arrow-left"></i> <?php echo $this->helper->translate('Back'); ?></a></p>

<div class="well">
    <p><?php echo $this->helper->translate('Are you sure want delete <b>%login%</b>?', array('login' => $model->getLogin())); ?></b></p>
    <form action="" method="post">
        <input type="submit" class="btn btn-danger" value="<?php echo $this->helper->translate('Confirm delete'); ?>">
    </form>
</div>