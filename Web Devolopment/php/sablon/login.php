
<style type="text/css">
    #myModal{
		height:0px;
	}
    body {
		font-family: 'Varela Round', sans-serif;
	}
	.modal-login {
		width: 100px;
	}
	.modal-login .modal-content {
		
	}
	.modal-login .modal-header {
       
		justify-content: center;
        background: #f2f2f2;
	}
    .modal-login .modal-body {
        height:250px;
    }
    .modal-login .modal-footer {
        background: #f2f2f2;
    }
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
	}
    .modal-login label {
        font-weight: normal;
        font-size: 13px;
    }
	.modal-login .form-control, .modal-login .btn {
		min-height: 18px;
		border-radius: 2px; 
	}
	.modal-login .hint-text {
		text-align: center;
	}
	.modal-login .close {
        position: absolute;
		top: 15px;
		right: 15px;
	}
    .modal-login .checkbox-inline {
        margin-top: 12px;
    }
    .modal-login input[type="checkbox"]{
        margin-top: 2px;
    }
	.modal-login .btn {
        
		background: #3498db;
		border: none;
		
	}
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #248bd0;
	}
	.modal-login .hint-text a {
		color: #999;
	}
	.trigger-btn {
		display: inline-block;
		margin: 10px auto;
	}
</style>


<?php
include "header.php";
include "menu.php";
?>
<!-- buraya orta kısımda yapılacaklarr eklenecek-->
<section>
    <body>


<!-- Modal HTML -->

	<div class="modal-dialog modal-login">
		<div class="modal-content">	
			<form action="giris.php" method="post">
				<div>				
					<h4 class="modal-title">Giriş</h4>
				</div>
				<div class="modal-body">				
					<div class="form-group">
						<label>Öğrenci Numarası</label>
						<input type="text" name="no" class="form-control" required="required">
					</div>
					<div class="form-group">
						<div class="clearfix">
							<label>Şifre</label>
							<input type="password" name="sifr" class="form-control"><br>
							<input type="submit" class="btn btn-primary pull-right" value="Giriş">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>    
</body>
</section>
<!-- orta kısmın sonu-->
<?php
include "alt.php";
?>

   