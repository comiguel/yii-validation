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
<script>
	$(document).ready(function() {
    $('#form-create').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        	name: {
                validators: {
                	notEmpty: {
                        message: 'The name is required'
                    },
                    stringLength: {
                    	min: 4,
                        max: 10,
                        message: 'The Name must be more than 4 and less than 10 characters'
                    }
                }
            },
            email: {
                validators: {
                	notEmpty: {
                        message: 'The email is required'
                    },
                    emailAddress: {
                        message: 'The value is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                	notEmpty: {
                        message: 'The password is required'
                    },
                    stringLength: {
                    	min: 4,
                        max: 12,
                        message: 'The full name must be more than 4 and less than 12 characters'
                    },
                    different: {
                        field: 'name',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }
        }
    });
});
</script>
<h1>Create Users</h1>

<!--<?php //$this->renderPartial('_form', array('model'=>$model)); ?> -->
<div class="container">
	<div class="row">
		<div class="col-xs-6 col-xs-offset-3">
			<div class="panel panel-success">
		  		<div class="panel-heading">
		  			<h4>New User</h4>
		  		</div>

		  		<div class="panel-body">
		  			<form id="form-create" method="post" action="store">
						<p>
							<input type="text" name="name" placeholder="Name" class="form-control" required>
						</p>
						<p>
							<input type="text" name="lastname" placeholder="LastName" class="form-control" required>
						</p>
						<p>
							<input type="email" name="email" placeholder="E-mail" class="form-control" required>
						</p>
					    <!-- Password-->
					    <div class="controls">
					      <input type="password" name="password" placeholder="Password" class="form-control" required>
					      <p class="help-block">Password should be at least 4 characters</p>
					    </div>
					    <div class="controls">
					      <input type="password" name="confirmpassword" placeholder="Retype Password" class="form-control" required>
					      <p class="help-block">Password should be at least 4 characters</p>
					    </div>
						<p>
							<input type="submit" value="Registrar" class="btn btn-success">
							<a href="index" class="btn btn-primary">Regresar</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
