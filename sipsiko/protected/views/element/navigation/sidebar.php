<div id="sidebar">
    <div class="sidebar-scroll">
        <div class="sidebar-content">
            <a href="<?php echo Yii::app()->baseUrl . '/admin/dashboard'; ?>" class="sidebar-brand">
                <i class="gi gi-charts"></i><strong>SIP</strong>SIKO
            </a>
            <div class="sidebar-section sidebar-user clearfix">
                <div class="sidebar-user-avatar">
                    <a href="<?php echo Yii::app()->baseUrl . '/admin/userprofile/change'; ?>">
                        <img src="<?php echo $themeBaseUrl; ?>/img/placeholders/avatars/avatar2.jpg" alt="avatar" />
                    </a>
                </div>
                <div class="sidebar-user-name"><?php echo Yii::app()->user->getState('username'); ?></div>
                <div class="sidebar-user-links">
                    <?php
                    echo CHtml::link('<i class="gi gi-user"></i>', array('admin/userprofile/change'), array('title' => 'Profile'));
                    echo CHtml::link('<i class="gi gi-cogwheel"></i>', array('admin/user/changepassword'), array('title' => 'Setting'));
                    echo CHtml::link('<i class="gi gi-exit"></i>', array('user/logout'), array('title' => 'Logout'));
                    ?>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li><?php echo CHtml::link('<i class="gi gi-stopwatch sidebar-nav-icon"></i>Dashboard</a>', array('admin/dashboard')); ?></li>

                <?php if (Yii::app()->user->checkAccess(RolePrivilege::COMPANY)) { ?>
                    <li class="sidebar-header"><span class="sidebar-header-title">Company</span></li>
                    <li><?php echo CHtml::link('<i class="gi gi-user sidebar-nav-icon"></i> Member of Company</a>', array('admin/usertest/index')); ?></li>
                    <li><?php echo CHtml::link('<i class="hi hi-list sidebar-nav-icon"></i> Tests of Company</a>', array('admin/test/company')); ?></li>
                    <li><?php echo CHtml::link('<i class="gi gi-charts sidebar-nav-icon"></i> Test Results</a>', array('admin/usertest/result')); ?></li>
                <?php } ?>

                <?php if (Yii::app()->user->checkAccess(RolePrivilege::EXPERT)) { ?>
                    <li class="sidebar-header"><span class="sidebar-header-title">Expert</span></li>
                    <li><?php echo CHtml::link('<i class="hi hi-list sidebar-nav-icon"></i> Management Tests</a>', array('admin/test')); ?></li>
                    <li><?php echo CHtml::link('<i class="gi gi-charts sidebar-nav-icon"></i> Test Type</a>', array('admin/type')); ?></li>
                    <li><?php echo CHtml::link('<i class="gi gi-charts sidebar-nav-icon"></i> Variable</a>', array('admin/variable')); ?></li>
                    <li><?php echo CHtml::link('<i class="gi gi-charts sidebar-nav-icon"></i> Variable Detail</a>', array('admin/variabledetail')); ?></li>
                    <li><?php echo CHtml::link('<i class="hi hi-tags sidebar-nav-icon"></i> Tag</a>', array('admin/tag')); ?></li>
                <?php } ?>

                <?php if (Yii::app()->user->checkAccess(RolePrivilege::MEMBER)) { ?>
                    <li class="sidebar-header"><span class="sidebar-header-title">Member</span></li>
                    <li><?php echo CHtml::link('<i class="gi gi-certificate sidebar-nav-icon"></i> Tests</a>', array('admin/usertest/member')); ?></li>
                    <li><?php echo CHtml::link('<i class="gi gi-charts sidebar-nav-icon"></i> Tests Result</a>', array('admin/usertest/memberresult')); ?></li>
                    <li><?php echo CHtml::link('<i class="gi gi-certificate sidebar-nav-icon"></i> Generate Public Tests</a>', array('admin/test/public')); ?></li>
                <?php } ?>

                <?php if (Yii::app()->user->checkAccess(RolePrivilege::ADMIN)) { ?>
                    <li class="sidebar-header"><span class="sidebar-header-title">Master Data</span></li>
                    <li><?php echo CHtml::link('<i class="gi gi-charts sidebar-nav-icon"></i> Roles Management</a>', array('admin/type')); ?></li>
                    <li><?php echo CHtml::link('<i class="gi gi-user sidebar-nav-icon"></i> Users Management</a>', array('admin/user')); ?></li>
                    <li><?php echo CHtml::link('<i class="gi gi-user sidebar-nav-icon"></i> Member Management</a>', array('admin/userprofile/member')); ?></li>
                    <li><?php echo CHtml::link('<i class="gi gi-user sidebar-nav-icon"></i> Company Management</a>', array('admin/userprofile/company')); ?></li>
                    <li><?php echo CHtml::link('<i class="gi gi-user sidebar-nav-icon"></i> Expert Management</a>', array('admin/userprofile/expert')); ?></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>