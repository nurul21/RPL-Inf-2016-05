<!DOCTYPE html>
<?php
	require_once 'DB.php';
	session_start();
	$kode=$_SESSION['kode'];
	if(!isset($_SESSION['kode'])){
		header("location:index.php");
	}
	
	$sql = "SELECT * FROM pesan WHERE kode='$kode'";
    $hasil = $db->query($sql);
    $baris = $hasil->fetch_assoc();
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
<link href="styles/timeline.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.uniform.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>	
	<script type="text/javascript" src="js/html2canvas.js"></script>
	<script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>
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
            <a href="index.html" class="buses active" >Mobil L300</a>
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
                <div class="col-xs-3 bs-wizard-step complete" style="width: 23%;">
                  <div class="text-center bs-wizard-stepnum">Step 1</div>
                  <div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"><span class=""></span></a>
					<center>
					<span class="fa fa-user"></span>
					</center>
                  <div class="bs-wizard-info text-center" style="padding-right: 10px;padding-left: 10px;">Mengisi Data diri Anda Seperti nama,no ktp,email dan memilih Rute perjalanan</div>
                </div>
                <div class="col-xs-3 bs-wizard-step complete" style="width: 23%;"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum">Step 2</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
					<center>
					<span class="fa fa-credit-card"></span>
					</center>
                  <div class="bs-wizard-info text-center" style="padding-right: 10px;padding-left: 10px;">Simpan Kode Referensi anda sebagai proses pembayaran melalui Rek CV kami</div>
                </div>
                <div class="col-xs-3 bs-wizard-step complete" style="width: 23%;"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum">Step 3</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
					<center>
					<span class="fa fa-ticket"></span>
					</center>
                  <div class="bs-wizard-info text-center" style="padding-right: 10px;padding-left: 10px;">Cek Proses pembayaran Anda menggunakan Kode ref yang telah anda simpan</div>
                </div>       
                <div class="col-xs-3 bs-wizard-step active" style="width: 23%;"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum">Step 4</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
					<center>
					<span class="fa fa-check"></span>
					</center>
                  <div class="bs-wizard-info text-center" style="padding-right: 10px;padding-left: 10px;">Cetak Tiket Anda disini, atau tampilkan E-ticket tersebut ke pada Loket kami</div>
                </div>            
            </div>
	<div class="row">
		<div class="col-md-2">
		</div>
                <div class="col-md-8">
					<div id="target">
                    	<div class="panel panel-default">
						<!-- judul -->
                        <div class="panel-heading">
							<center>
								<i class="fa fa-credit-card"></i> Referensi Code <b><a style="color:#3F84B1"><?php echo $baris['kode'];?> <br><br><a href="index.php" class="btn btn-default">Cetak Tiket</a></a></b>
							</center>
                        </div>  
						<div class="col-md-12" style="background-color:white;">
                        <div class="panel-body">
							
								<center>
									<h1>CV <?php echo $baris['cv'];?></h1>
									<div class="well" style="width: 190px;">
									<div class="container" style="width: 130px;">
									<div>
									<h5><span class="fa fa-user"></span> <?php echo $baris['nama'];?></h5>
									<h5><span><image src="images/chair.png"></image></span> bangku <?php echo $baris['bangku']?></h5>
									<h5><span class="fa fa-car"></span> BL 666 KP</h5>
									</div>
									</div>
									</div>
								</center>
						
							<ul class="timeline">
								<li>
                                    <div class="timeline-badge"><i class="fa fa-car"></i>
                                    </div>
                                    <div class="timeline-panel" >
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title"><?php echo $baris['date'];?></h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> <?php echo $baris['jam'];?></small>
												<br>
                                            </p>
                                        </div>
                                    </div>
								
									<div class="timeline-panel" style="padding-left: 10px;margin-left: 40px;padding-right: 0px; ">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Banda Aceh</h4>
											<p>Terminal Lueng Bata Batoh</p>
											<p>Dijemput di <?php echo $baris['alamat'];?></p>
											<small>Lama perjalanan Di perkirakan....</small>
                                        </div>
                                    </div>
									
                                </li>
								
								<li class="timeline-inverted" style="padding-top: 20px;padding-bottom:20px;">
                                    <div class="timeline-badge " style="width:25px;height:25px;margin-left:-12px"><i class="" ></i>
                                    </div>
                                </li>
								<li class="timeline-inverted"style="padding-top: 20px;padding-bottom:20px;">
                                    <div class="timeline-badge " style="width:25px;height:25px;margin-left:-12px"><i class="" ></i>
                                    </div>
                                </li>
								<li class="timeline-inverted" style="padding-top: 20px;padding-bottom:20px;">
                                    <div class="timeline-badge " style="width:25px;height:25px;margin-left:-12px"><i class="" ></i>
                                    </div>
                                </li>
								<li class="timeline-inverted" style="padding-top: 20px;padding-bottom:20px;">
                                    <div class="timeline-badge " style="width:25px;height:25px;margin-left:-12px"><i class=""></i>
                                    </div>
                                </li>
								<li>
                                    <div class="timeline-badge"><i class="fa fa-car"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">	
                                            <h4 class="timeline-title"><?php echo $baris['date'];?></h4>
											<p><small class="text-muted"><i class="fa fa-clock-o"></i> Calculating...</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
                                        </div>
                                    </div>
									<div class="timeline-panel" style="padding-left: 10px;margin-left: 40px;padding-right: 0px; ">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title"><?php echo $baris['tujuan'];?></h4>
											<p>Terminal Bus kota <?php echo $baris['tujuan'];?></p>
											<p></p>
                                        </div>
                                    </div>
                                </li>
								<!-- time order-->
                                </ul>
						</div>
						
                        <!-- /.panel-body -->
                    </div>
					</div>
					</div>
                </div>
          
			</div>
	<br>
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

 </body>
</html>