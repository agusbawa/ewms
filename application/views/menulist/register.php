<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Menu List</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Menu Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($menu as $menuKey => $menuVal):
                ?>

                    
                    <tr>
                        <td><?php  echo $menuKey; ?></td>
                        <td><?php echo $menuVal['menu_name']; ?></td>
                        <td>
                            <a href="<?php echo base_url('module/menulist/register'); ?>" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></a>
                        </td>
                    </tr>
                <?php
                    endforeach;
                ?>
                
            </tbody>
        </table>
    </div>
    <div class="col-lg-4"></div>
</div>