
<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css">

        <!--<script src="<?php //echo base_url();  ?>js/bootstrap.min.js"></script>-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>

    <body>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url(); ?>UserController/admin">Login</a></li>
                        <?php
                        if (null != $this->session->userdata('email')) {
                            ?>
                            <li class="active"><a href="<?php echo base_url(); ?>UserController/insertshow">Insert<span class="sr-only">(current)</span></a></li>
                            <li><a href="<?php echo base_url(); ?>UserController/ShowData">show data</a></li>


                            <li><a href="<?php echo base_url(); ?>UserController/Upload">Upload file</a></li>
                        <?php } ?>

                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                        <?php
                        if (null != $this->session->userdata('email')) {
                            ?>
                            <li><a href="<?php echo base_url(); ?>UserController/logout">Logout</a></li>
                        <?php } ?>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <?php
        //echo $this->load->view($content);
        echo $content;
        ?>
    </body>

</html>