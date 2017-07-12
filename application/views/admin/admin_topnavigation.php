<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo base_url() ?>assets/img/admin/<?php echo $admin['photo']?>" alt=""><?php echo ucfirst($admin['firstname']).' '.ucfirst($admin['lastname'])?>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <?php
                        $encrypted = $this->general->encryptParaID($this->nativesession->get('id'),'student');
                        ?>
                        <li><a href="<?php echo base_url() ?>index.php/admin/admin_profile/<?php echo $encrypted ?>"> Profile</a></li>
                        <!--                        <li><a href="--><?php //echo base_url() ?><!--index.php/teacher/teacher_settings">Settings</a></li>-->
                        <!--                        <li><a href="--><?php //echo base_url() ?><!--index.php/teacher/teacher_Help">Help</a></li>-->
                        <li><a href="<?php echo base_url() ?>index.php/admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->