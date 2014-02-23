<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Phalcon-skeleton</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo $this->url->get(array('for' => 'admin')); ?>"><?php echo $this->helper->translate('Admin panel'); ?></a></li>
                <li><a href="/admin/admin-user"><?php echo $this->helper->translate('Administrators'); ?></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/admin/index/logout"><?php echo $this->helper->translate('Logout'); ?></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>