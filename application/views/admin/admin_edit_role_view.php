<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Edit Role </h3>
            </div>
        </div>

        <div class="clearfix"></div>
        <?php if ($this->nativesession->get('success')): ?>
            <div  class="alert alert-success">
                <?php echo $this->nativesession->get('success'); $this->nativesession->delete('success');?>
            </div>
        <?php endif; ?>
        <?php
        $encrypted = $this->general->encryptParaID($role['roleid'],'role');
        ?>
        <?php echo form_open_multipart("admin/editRole/".$encrypted);?>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="col-md-12 col-sm-12 col-xs-12 profile_left">
                            <button type="submit" class="btn btn-success set-right"><i class="fa fa-save m-right-xs"></i> Save Changes</button>
                            <br />

                        </div>
                        <input type="hidden" class="form-control set-margin-bottom" name="parentid" value="<?php echo $role['roleid']; ?>"/>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="profile_title">
                                <div class="col-md-12">
                                    <h2>Role Information</h2>
                                </div>
                            </div>
                            <div class="col-md-12">

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="teacher_profile_group">
                                        <div class="teacher_profile_label">Role ID</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="teacher_profile_group">
                                        <div class="teacher_profile_value">
                                            <input type="text" class="form-control set-margin-bottom" name="roleid" value="<?php echo $role['roleid'] ?>" readonly/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="teacher_profile_group">
                                        <div class="teacher_profile_label">Name</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="teacher_profile_group">
                                        <div class="teacher_profile_value">
                                            <input type="text" class="form-control set-margin-bottom" name="rolename" value="<?php echo ucfirst($role['name']) ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="teacher_profile_group">
                                        <div class="teacher_profile_label">Category</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="teacher_profile_group">
                                        <div class="teacher_profile_value">
                                            <select class="form-control set-margin-bottom" name="rolecategory">
                                                <option value='1' <?php echo (($role['category']=='1') ? 'selected' : '') ?>>Teacher</option>
                                                <option value='2' <?php echo (($role['category']=='2') ? 'selected' : '') ?>>Student</option>
                                                <option value='3' <?php echo (($role['category']=='3') ? 'selected' : '') ?>>Administrator</option>
                                                <option value='4' <?php echo (($role['category']=='4') ? 'selected' : '') ?>>Librarian</option>
                                                <option value='5' <?php echo (($role['category']=='5') ? 'selected' : '') ?>>Parents</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
<!-- /page content -->