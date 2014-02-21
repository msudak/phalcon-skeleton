<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $this->helper->title()->append('Phalcon Skeleton'); ?><?php echo $this->helper->title()->get(); ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php echo $this->helper->meta()->get('description'); ?>
        <?php echo $this->helper->meta()->get('keywords'); ?>
    </head>
    <body>
        <?php echo $this->getContent(); ?>
    </body>
</html>