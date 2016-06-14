<!DOCTYPE html>
<?php
	session_start();
	$_SESSION['cv'] = $_GET['name'];
	if(!isset($_SESSION['cv'])){
		header("location:index.php");
	}
	
?>
<html>
<head>
<meta charset="utf-8">
<title>Formulir Register Data Penumpang</title>
<link rel="stylesheet" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Engagement' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="styles/sb-admin-2.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.uniform.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>	
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

  
	<style>
		.bs-wizard {margin-top: 40px;}
		/*Form Wizard*/
		.bs-wizard {border-bottom: solid 1px #e0e0e0; padding: 20px 0 10px 20px;}
		.bs-wizard > .bs-wizard-step {padding: 0; position: relative;}
		.bs-wizard > .bs-wizard-step + .bs-wizard-step {}
		.bs-wizard > .bs-wizard-step .bs-wizard-stepnum {color: #595959; font-size: 16px; margin-bottom: 5px;}
		.bs-wizard > .bs-wizard-step .bs-wizard-info {color: #999; font-size: 14px;}
		.bs-wizard > .bs-wizard-step > .bs-wizard-dot {position: absolute; width: 30px; height: 30px; display: block; background: #fbe8aa; top: 45px; left: 50%; margin-top: -15px; margin-left: -15px; border-radius: 50%;} 
		.bs-wizard > .bs-wizard-step > .bs-wizard-dot:after {content: ' '; width: 14px; height: 14px; background: #fbbd19; border-radius: 50px; position: absolute; top: 8px; left: 8px; } 
		.bs-wizard > .bs-wizard-step > .progress {position: relative; border-radius: 0px; height: 8px; box-shadow: none; margin: 20px 0;}
		.bs-wizard > .bs-wizard-step > .progress > .progress-bar {width:0px; box-shadow: none; background: #fbe8aa;}
		.bs-wizard > .bs-wizard-step.complete > .progress > .progress-bar {width:100%;}
		.bs-wizard > .bs-wizard-step.active > .progress > .progress-bar {width:50%;}
		.bs-wizard > .bs-wizard-step:first-child.active > .progress > .progress-bar {width:0%;}
		.bs-wizard > .bs-wizard-step:last-child.active > .progress > .progress-bar {width: 100%;}
		.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot {background-color: #f5f5f5;}
		.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot:after {opacity: 0;}
		.bs-wizard > .bs-wizard-step:first-child  > .progress {left: 50%; width: 50%;}
		.bs-wizard > .bs-wizard-step:last-child  > .progress {width: 50%;}
		.bs-wizard > .bs-wizard-step.disabled a.bs-wizard-dot{ pointer-events: none; }
		.btn-input {display: block;}
		.btn-input .btn.form-control {text-align: left;}
		.btn-input .btn.form-control span:first-child {left: 10px;overflow: hidden;position: absolute;right: 25px;}
		.btn-input .btn.form-control .caret {margin-top: -1px;position: absolute;right: 10px;top: 50%;}
		.searchable-container{margin:20px 0 0 0}
		.searchable-container label.btn-default.active{background-color:#3F84B1;color:#FFF}
		.searchable-container label.btn-default{width:90%;border:1px solid #efefef;margin:5px; box-shadow:5px 8px 8px 0 #ccc;}
		.searchable-container label .bizcontent{width:100%;}
		.searchable-container .btn-group{width:90%}
		.searchable-container .btn span.glyphicon{
    opacity: 0;
}
.searchable-container .btn.active span.glyphicon {
    opacity: 1;
}
	</style>
</head>
<body>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft" >
			<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
			<li class="prnt" style="color:white"><a href="#"></a>Home</li>
		</ul>
		<ul class="tp-hd-rgt"> 
			<li class="tol">Call Service : 666-66666</li>				
			<li class="sig"><a href="#" data-toggle="modal" data-target="#admin" >Loket Admin</a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#supir" >/ Supir</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
<div class="header">
	<div class="container">
		<div class="logo" >
			<a href="index.php">E -<span> Service</span></a>	
		</div>
		<div class="bus">
            <a href="index.php" class="buses active" >Mobil L300</a>
        </div>
	
		<div class="lock"> 
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">AMAN &amp; TERPERCAYA<br> PEMBAYARAN ONLINE</div></li>
			<div class="clearfix"></div>
		</div>
	
		<div class="clearfix"></div>
	</div>
</div>
	<div class="container"> 
		<div class="row bs-wizard" style="border-bottom:0; padding-bottom: 50px;" >
                <div class="col-xs-3 bs-wizard-step active" style="width: 23%;">
                  <div class="text-center bs-wizard-stepnum">Step 1</div>
                  <div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"><span class=""></span></a>
					<center>
					<span class="fa fa-user"></span>
					</center>
                  <div class="bs-wizard-info text-center" style="padding-right: 10px;padding-left: 10px;">Mengisi Data diri Anda Seperti nama,no ktp,email dan memilih Rute perjalanan</div>
                </div>
                <div class="col-xs-3 bs-wizard-step disabled" style="width: 23%;"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum">Step 2</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
					<center>
					<span class="fa fa-credit-card"></span>
					</center>
                  <div class="bs-wizard-info text-center" style="padding-right: 10px;padding-left: 10px;">Simpan Kode Referensi anda sebagai proses pembayaran melalui Rek CV kami</div>
                </div>
                <div class="col-xs-3 bs-wizard-step disabled" style="width: 23%;"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum">Step 3</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
					<center>
					<span class="fa fa-ticket"></span>
					</center>
                  <div class="bs-wizard-info text-center" style="padding-right: 10px;padding-left: 10px;">Cek Proses pembayaran Anda menggunakan Kode ref yang telah anda simpan</div>
                </div>
                
                <div class="col-xs-3 bs-wizard-step disabled" style="width: 23%;"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum">Step 4</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
					<center>
					<span class="fa fa-check"></span>
					</center>
                  <div class="bs-wizard-info text-center" style="padding-right: 10px;padding-left: 10px;">Cetak Tiket Anda disini, atau tampilkan E-ticket tersebut ke pada Loket kami</div>
                </div>
			</div>
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		<div class="jumbotron">
        	<form class="form-horizontal" action="proses.php" method="POST">
			  <div class="form-group">
				<label class="control-label col-sm-2" for="email">CV</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="email" placeholder="<?php echo $_SESSION['cv'];?>" disabled="disabled" style="cursor:default" required="required">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" for="email">Nama</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="nama" id="email" placeholder="Nama anda" required="required">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Nomor KTP</label>
				<div class="col-sm-10"> 
				  <input type="text" class="form-control" id="pwd" name="ktp" placeholder="666666" required="required">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Email</label>
				<div class="col-sm-10"> 
				  <input type="email" class="form-control" id="pwd" name="email" placeholder="example@gmail.com" required="required">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Nomor HP</label>
				<div class="col-sm-10"> 
				  <input type="text" class="form-control" id="pwd" name="hp" placeholder="0852-7777-666" required="required">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Tanggal</label >
				<div class="col-sm-10"> 
				  <input type="date" class="form-control" name="tgl" id="pwd" placeholder="Enter password" required="required">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Jam</label>
				<div class="col-sm-10"> 
				  <div class="col-sm-3" style="padding-left: 0;">    
							<div class="panel-body" style="padding: 0;">
							   <div class="btn-group btn-input clearfix" >
								   <!--
								 <button type="button" class="btn btn-default dropdown-toggle form-control" data-toggle="dropdown" style="width: 150%;">
								   <span data-bind="label">Select One</span>&nbsp;<span class="caret"></span>
								 </button>
								 <ul class="dropdown-menu" role="menu">
								   <li style="padding :0px" data-id="08:00"><a href="#">08:00 WIB</a></li>
								   <li style="padding :0px" data-id="08:30"><a href="#">08:30 WIB</a></li>
								   <li style="padding :0px" data-id="09:00"><a href="#">09:00 WIB</a></li>
								   <li style="padding :0px" data-id="09:30"><a href="#">09:30 WIB</a></li>
								   <li style="padding :0px" data-id="12:00"><a href="#">12:00 WIB</a></li>
								   <li style="padding :0px" data-id="12:30"><a href="#">12:30 WIB</a></li>
								   <li style="padding :0px" data-id="13:00"><a href="#">13:00 WIB</a></li>
								   <li style="padding :0px" data-id="19:00"><a href="#">19:00 WIB</a></li>
								   <li style="padding :0px" data-id="20:00"><a href="#">20:00 WIB</a></li>
								 </ul>
									-->
								 <select name="jam" class="form-control">
								  <option value="08:00">08:00</option>
								  <option value="08:30">08:30</option>
								  <option value="09:00">09:00</option>
								  <option value="09:30">09:30</option>
								  <option value="12:00">12:00</option>
								  <option value="12:30">12:30</option>
								  <option value="13:00">13:00</option>
								  <option value="19:00">19:00</option>
								  <option value="20:00">20:00</option>
								</select>
							   </div>
							 </div>
					  </div>
				</div>
			  </div>
			  <div class="form-group"> 
				<label class="control-label col-sm-2" for="pwd">Tujuan </label>
				<div class="col-sm-10">
				  
					  <div class="col-sm-3" style="padding-left: 0;">    
							<div class="panel-body" style="padding: 0;">
							   <div class="btn-group btn-input clearfix" >
								    <!--
								 <button type="button" class="btn btn-default dropdown-toggle form-control" data-toggle="dropdown" style="width: 150%;">
								   <span data-bind="label">Select One</span>&nbsp;<span class="caret"></span>
								 </button>
								 
								 <ul class="dropdown-menu" role="menu">
								   <li style="padding :0px"><a href="#">Siglie</a></li>
								   <li style="padding :0px"><a href="#">Bireun</a></li>
								   <li style="padding :0px"><a href="#">Lhokseumawe</a></li>
								   <li style="padding :0px"><a href="#">Lhoksukon</a></li>
								   <li style="padding :0px"><a href="#">Idi</a></li>
								   <li style="padding :0px"><a href="#">Langsa</a></li>
								   <li style="padding :0px"><a href="#">kuala Simpang</a></li>
								   <li style="padding :0px"><a href="#">Medan</a></li>
								   <li style="padding :0px"><a href="#">Meulaboh</a></li>
								 </ul>
								-->
								<select name="Tujuan" class="form-control">
								  <option value="Siglie">Siglie</option>
								  <option value="Bireun">Bireun</option>
								  <option value="Lhokseumawe">Lhokseumawe</option>
								  <option value="Lhoksukon">Lhoksukon</option>
								  <option value="Idi">Idi</option>
								  <option value="Langsa">Langsa</option>
								  <option value="KualaSimpang">Kuala Simpang</option>
								  <option value="Medan">Medan</option>
								</select>
							   </div>
							 </div>
					  </div>
						 
				</div>
			  </div>
			  <div class="form-group">
				  <label class="control-label col-sm-2" for="pwd" required="required">Alamat </label>
				  <div class="col-sm-10">
				  <textarea class="form-control" name="alamat" rows="5" id="comment"></textarea>
				  </div>
			  </div>
			  <div class="form-group">
				  <label class="control-label col-sm-2" for="pwd">Bangku</label>
				  <div class="col-sm-10">
				  		<div class="col-md-12">
    <div class="row">
        <div class="form-group">
            <div class="searchable-container">
                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div class="square-box pull-left">
                            <span><image src="images/chair.png"></image></span>
                        </div>
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="var_id" autocomplete="off" value="1">
                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                    <h5>Bangku 1</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div class="square-box pull-left">
                            <span><image src="images/chair.png"></image></span>
                        </div>
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="var_id" autocomplete="off" value="2">
                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                    <h5>Bangku 2</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div class="square-box pull-left">
                            <span><image src="images/steering-wheel.png"></image></span>
                        </div>
                        <div data-toggle="" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                  
                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                    <h5>Supir</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<div class="row">
        <div class="form-group">
            <div class="searchable-container">
                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div class="square-box pull-left">
                            <span><image src="images/chair.png"></image></span>
                        </div>
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="var_id" autocomplete="off" value="3">
                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                    <h5>Bangku 3</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div class="square-box pull-left">
                           <span><image src="images/chair.png"></image></span>
                        </div>
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="var_id" autocomplete="off" value="4">
                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                    <h5>Bangku 4</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div class="square-box pull-left">
                           <span><image src="images/chair.png"></image></span>
                        </div>
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="var_id" autocomplete="off" value="5">
                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                    <h5>Bangku 5</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<div class="row">
        <div class="form-group">
            <div class="searchable-container">
                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div class="square-box pull-left">
                            <span><image src="images/chair.png"></image></span>
                        </div>
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="var_id" autocomplete="off" value="6">
                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                    <h5>Bangku 6</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div class="square-box pull-left">
                            <span><image src="images/chair.png"></image></span>
                        </div>
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="var_id" autocomplete="off" value="7">
                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                    <h5>Bangku 7</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div class="square-box pull-left">
                            <span><image src="images/chair.png"></image></span>
                        </div>
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="var_id" autocomplete="off" value="8">
                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                    <h5>Bangku 8</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>


				 
			  	  </div>
				  </div>
			  </div>
			  <div class="form-group"> 
				  <div class="pull-right">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-default">Submit</button>
				</div>
				  </div>
			  </div>
			</form>
        </div><!-- end of .jumbotron -->
		</div>
		<div class="col-md-2">
		</div>
	</div>
<div class="copy-right">
	<div class="container">
	
		<div class="footer-social-icons" >
			<ul>
				<li><a class="fa fa-facebook" href="#" style="color:#3b5998"><span>Facebook</span></a></li>
				<li><a class="fa fa-twitter" href="#" style="color:#0084b4"><span>Twitter</span></a></li>
				<li><a class="fa fa-linkedin" href="#" style="color:#0e76a8"><span>Flickr</span></a></li>
				<li><a class="fa fa-google-plus" href="#" style="color:#d34836"><span>Google+</span></a></li>
				<li><a class="fa fa-github" href="#" style="color:#171515"><span>Dribbble</span></a></li>
			</ul>
		</div>
		<p class="">© 2016 E-Service  | Design by  <a href="#" target="_blank">RPL Team 5</a></p>
	</div>
</div>

<script>
	 $( document.body ).on( 'click', '.dropdown-menu li', function( event ) {

      var $target = $( event.currentTarget );

      $target.closest( '.btn-group' )
         .find( '[data-bind="label"]' ).text( $target.text() )
            .end()
         .children( '.dropdown-toggle' ).dropdown( 'toggle' );

      return false;

   });
	
	</script>

</body>
</html>