<?php if (validation_errors()): ?>
<div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?=validation_errors()?>
            </div>
        </div>
    </div>          
<?php endif ?>

<?php if ($this->session->flashdata('info')): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info" role="alert">
                <button type="button" class="close" data-dismiss="alert"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?=$this->session->flashdata('info')?>
            </div>
        </div>
    </div>
<?php elseif ($this->session->flashdata('warning')): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning" role="alert">
                <button type="button" class="close" data-dismiss="alert"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?=$this->session->flashdata('warning')?>
            </div>
        </div>
    </div>
<?php elseif ($this->session->flashdata('success')): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?=$this->session->flashdata('success')?>
            </div>
        </div>
    </div>
<?php endif ?>