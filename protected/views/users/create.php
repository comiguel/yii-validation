<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>
<h1>Create Users</h1>
<script>$(document).ready(function() {validar("#form-create")});</script>
<!--<?php //$this->renderPartial('_form', array('model'=>$model)); ?> -->
<div class="container">
    <hr>
    <div class="row">
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
          Launch demo modal
        </button>
    </div>
    <div id="myModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">Create User</h4>
          </div>
          <div class="modal-body">
        	<div class="row">
        		<div class="col-xs-12">
        			<div class="panel panel-primary">
        		  		<!-- <div class="panel-heading">
        		  			<h4>New User</h4>
        		  		</div> -->

        		  		<div class="panel-body">
        		  			<form id="form-create" method="post" action="store" class="form-horizontal" role="form">
        						<div class="form-group">
                                    <label class="text-left control-label col-xs-4" for="">Name</label>
                                    <div class="col-xs-7">
        							     <input type="text" name="name" placeholder="Name" class="form-control" required>
                                    </div>
        						</div>
        						<div class="form-group">
                                    <label class="text-left control-label col-xs-4" for="">Last Name</label>
                                    <div class="col-xs-7">
        							     <input type="text" name="lastname" placeholder="LastName" class="form-control" required>
                                    </div>
        						</div>
        						<div class="form-group">
                                    <label class="text-left control-label col-xs-4" for="">E-mail</label>
                                    <div class="col-xs-7">
        							     <input type="email" name="email" placeholder="E-mail" class="form-control" required>
                                    </div>
        						</div>
        					    <!-- Password-->
        					    <div class="form-group">
                                    <label class="text-left control-label col-xs-4" for="">Password</label>
                                    <div class="col-xs-7">
                                            <input type="password" name="password" placeholder="Password" class="form-control" required>
                                    </div>
        					    </div>
        					    <div class="form-group">
                                    <label class="text-left control-label col-xs-4" for="">Confirm Password</label>
                                    <div class="col-xs-7">
                                            <input type="password" name="confirmpassword" placeholder="Retype Password" class="form-control" required>
                                    </div>
        					    </div>
                                <br>
        						<div class="col-xs-12 text-right">
        							<input type="submit" value="Registrar" class="btn btn-success">
        							<a href="<?=Yii::app()->user->returnUrl?>" class="btn btn-primary">Regresar</a>
                                    <!-- <button action="index" class="btn btn-primary">Regresar</button> -->
                                    <!-- <input type="button" action="index" class="btn btn-primary" value="Regresar"> -->
                                </div>
                                <br>
        						
        					</form>
        				</div>
        			</div>
        		</div>
        	</div>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
