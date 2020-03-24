<!doctype html>
<html lang="en">
  <head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="cssIndex.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
	  
	<div class="container-fluid ">
		<br>
		<form action="index.php" method="post">
			<div class="row">	
				<div class="col-10 offset-1 mt-3 frmPrincipal">
					<br>
					<h3>Informações:</h3>
					<br>
					<div class="row">
						<div class="col-5 name offset-1">
							<span>Nome:</span>
							<input type="text" class="form-control nome" name="nome" id="nome" 
							placeholder="insira o seu nome aqui">
						</div>
						<div class="col-5 last-name">
						<span>Sobrenome:</span>
							<input type="text" class="form-control last-name" name="last-name" id="last-name" 
							placeholder="insira o seu sobrenome aqui">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-2 offset-1 age">
						<span>Idade:</span>
							<input type="number" class="form-control age" name="age" id="age" 
							placeholder="insira sua idade">
						</div>
						<div class="col-8">
						<span>Email:</span>
							<input type="email" class="form-control email" name="email" id="email" 
							placeholder="insira seu email">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-7 offset-1 phone">
						<span>Telefone:</span>
							<input type="phone" class="form-control phone" name="phone" id="phone" 
							placeholder="insira seu telefone">
						</div>
						<div class="col-3 nationality">
						<span>Nacionalidade:</span>
							<input type="text" class="form-control nationality" name="nationality" id="nationality" 
							placeholder="insira sua naconalidade">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-3 offset-1 sex">
							<span>Sexo:</span>
							<select class="form-control" id="sex" name="sex">
								<option value="masc" id="masc" name="masc">Masculino</option>
								<option value="fem" id="fem" name="fem">Feminino</option>
							</select>
						</div>
						<div class="col-7 adress">
						<span>Endereço:</span>
							<input type="text" class="form-control adress" name="adress" id="adress" 
							placeholder="insira seu endereco">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-10 offset-1">
							<span>Sua descriçao:</span>
							<textarea type="text" class="form-control descr" name="descr" id="descr" 
							placeholder="insira aq"></textarea>
						</div>
					</div>
					<br><hr><br>
					<div class="row">
						<div class="col-2 offset-3">
							<span>HTML:</span>
							<input type="number" class="form-control HTML" name="HTML" id="HTML" 
							placeholder="insira sua habld">
						</div>
						<div class="col-2">
							<span>CSS:</span>
							<input type="number" class="form-control CSS" name="CSS" id="CSS" 
							placeholder="insira sua habld">
						</div>
						<div class="col-2">
							<span>Javascript:</span>
							<input type="number" class="form-control JS" name="JS" id="JS" 
							placeholder="insira sua habld">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-2 offset-3">
							<span>Motivador:</span>
							<input type="number" class="form-control motivator" name="motivator" id="motivator" 
							placeholder="insira sua habld">
						</div>
						<div class="col-2">
							<span>Inglês:</span>
							<input type="number" class="form-control english" name="english" id="english" 
							placeholder="insira sua habld">
						</div>
						<div class="col-2">
							<span>Excel:</span>
							<input type="number" class="form-control excel" name="excel" id="excel" 
							placeholder="insira sua habld">
						</div>
					</div>

					<br><hr><br>

					<div class="row">
						<div class="col-5 offset-1">
							<span>Nome da instituição de estudo:</span>
							<input type="text" class="form-control study1" name="study1" id="study1" 
							placeholder="insira aqui">
						</div>
						<div class="col-5">
							<span>Ano que frequentou:</span>
							<input type="number" class="form-control year1" name="year1" id="year1" 
							placeholder="insira aqui">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-10 offset-1">
							<span>Descrição da formação</span>
							<textarea type="text" class="form-control description1" name="description1" id="description1" 
							placeholder="insira aqui"></textarea>
						</div>
					</div>
					<br><hr><br>
					<div class="row">
						<div class="col-5 offset-1">
							<span>Nome da instituição de estudo:</span>
							<input type="text" class="form-control study1" name="study2" id="study2" 
							placeholder="insira aqui">
						</div>
						<div class="col-5">
							<span>Ano que frequentou:</span>
							<input type="number" class="form-control year2" name="year2" id="year2" 
							placeholder="insira aqui">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-10 offset-1">
							<span>Descrição da formação</span>
							<textarea type="text" class="form-control description2" name="description2" id="description2" 
							placeholder="insira aqui"></textarea>
						</div>
					</div>
					<br><hr><br>
					<div class="row">
						<div class="col-5 offset-1">
							<span>Nome da instituição de estudo:</span>
							<input type="text" class="form-control study3" name="study3" id="study3" 
							placeholder="insira aqui">
						</div>
						<div class="col-5">
							<span>Ano que frequentou:</span>
							<input type="number" class="form-control year3" name="year3" id="year3" 
							placeholder="insira aqui">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-10 offset-1">
							<span>Descrição da formação</span>
							<textarea type="text" class="form-control description3" name="description3" id="description3" 
							placeholder="insira aqui"></textarea>
						</div>
					</div>
					<br><hr><br>
					<div class="row">
						<div class="col-5 offset-1">
							<span>Nome da instituição de estudo:</span>
							<input type="text" class="form-control study4" name="study4" id="study4" 
							placeholder="insira aqui">
						</div>
						<div class="col-5">
							<span>Ano que frequentou:</span>
							<input type="number" class="form-control year4" name="year4" id="year4" 
							placeholder="insira aqui">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-10 offset-1">
							<span>Descrição da formação</span>
							<textarea type="text" class="form-control description4" name="description4" id="description4" 
							placeholder="insira aqui"></textarea>
						</div>
					</div>
					<br><hr><br>
					<div class="row">
						<div class="col-8 offset-2">
							<span>Facebook:</span>
							<input type="text" class="form-control face" name="face" id="face" 
							placeholder="insira aqui o link do seu face">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-8 offset-2">
							<span>Twitter:</span>
							<input type="text" class="form-control tt" name="tt" id="tt" 
							placeholder="insira aqui o link do seu twitter">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-8 offset-2">
							<span>Instagram:</span>
							<input type="text" class="form-control insta" name="insta" id="insta" 
							placeholder="insira aqui o link do seu insta">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-8 offset-2">
							<span>Youtube:</span>
							<input type="text" class="form-control yt" name="yt" id="yt" 
							placeholder="insira aqui o link do seu yt">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-8 offset-2">
							<span>Linkedin:</span>
							<input type="text" class="form-control linkd" name="linkd" id="linkd" 
							placeholder="insira aqui o link do seu linkedin">
						</div>
					</div>
					<br>
					<button type="submit" class="btn btn-success">Enviar</button>
				</div>
			</div>
		</form>
	</div>

<?php

	if($_POST){
		$nome = $_POST['nome'];
		$lastname = $_POST['last-name'];
		$age = $_POST['age'];
		$email = $_POST['email'];
		$phone = $_POST ['phone'];
		$nationality = $_POST ['nationality'];
		$sexo = $_POST ['sex'];
		$adress = $_POST ['adress'];
		$html = $_POST ['HTML'];
		$css = $_POST ['CSS'];
		$js = $_POST ['JS'];
		$motivator = $_POST ['motivator'];
		$english = $_POST ['english'];
		$excel = $_POST ['excel'];
		$study1 = $_POST ['study1'];
		$year1 = $_POST ['year1'];
		$description1 = $_POST ['description1'];
		$study2 = $_POST ['study2'];
		$year2 = $_POST ['year2'];
		$description2 = $_POST ['description2'];
		$study3 = $_POST ['study3'];
		$year3 = $_POST ['year3'];
		$description3 = $_POST ['description3'];
		$study4 = $_POST ['study4'];
		$year4 = $_POST ['year4'];
		$description4 = $_POST ['description4'];
		$face = $_POST ['face'];
		$twitter = $_POST ['tt'];
		$insta = $_POST ['insta'];
		$youtube = $_POST ['yt'];
		$linkedin = $_POST ['linkd'];
		$descr = $_POST ['descr'];
		
		$textCSS = '
		html { font-family: sans-serif; text-size-adjust: 100%; background-color: rgba(238, 238, 238, 0.842); }
		body { margin: 0px;}
		.container-fluid{
			height: 420vh;
			background-color: rgba(238, 238, 238, 0.842);
		}
		#topBtn{
			position: fixed;
			bottom: 40px;
			right: 40px;
			font-size: 22px;
			width: 50px;
			height: 50px;
			background: rgb(0, 98, 255);
			color: white;
			border: none;
			cursor: pointer;
			display: none;
			z-index: 100;
		}
		.profile{
			margin-top: 7vh;
			height: 80vh;
			width: 180vh;
			background-color: #fff;
			box-shadow: rgba(0, 0, 0, 0.4) 0px 0px 14px;
			animation: move 1s ease-out forwards;
			margin-left: 13vh;
		}
		.profile1{
			/* margin-top: 10vh; */
			margin-left: 6vh;
			height: 80vh;
			background-color: #fff;
		  }
		  /* .img-profile{
			margin-left: 0vh;
			margin-top: 10vh;
			width: 47vh;
			height: 47vh;
			margin-bottom: 20px;
		}
		.img-profile img{ 
			width: 100%;
			height: 100%;
			box-shadow: rgba(0, 0, 0, 0.4) 0px 0px 9px; 
		}
		n descobri como envia foto pro site ;--;
		por isso to comentando essa parte do cogd
		*/
		.fa-user-circle{
			margin-top: 10vh;
			font-size: 300px;
		}
		.availability{
			margin-top: 5vh;
		}
		.fa-check{
			margin-left: 6vh;
			text-align: center;
			font-size: 15px;
			color: rgba(7, 155, 7, 0.856);
		}
		.text-availability{
			font-size: 18px;
		}
		.resum{
			/* margin-top: 10vh; */
			height: 50vh;
			background-color: #fff; 
		}
		.txtName{
			margin-top: 10vh;
			color: rgb(0, 98, 255);
		}
		.txtSubT{
			margin-top: -1vh;
			color: gray;
		}
		.txtP{
			margin-top: 3vh;    
		}
		.info{
			margin-top: 2vh;
		}
		.tstaa{
			margin-top: 10vh;
		}
		/* **************************** */
		/* .skills:hover{
			animation: move 1s ease-out forwards;
		} */
		.h2Skilll{
			text-align: center;
			margin-top: 20vh;
			color: rgb(0, 98, 255);
		}
		.tableSkill{
			background-color: #fff;
			flex: 1;
			margin-left: 6vh;
			text-transform: uppercase;
			box-shadow: rgba(0, 0, 0, 0.4) 0px 0px 14px;
		}
		  
		.header{
			color: #fff;
			position: relative;
			margin-bottom: 20px;
		}
		.title{
			position: absolute;
			bottom: 0;
			left: 50%;
			transform: translate(-50%,50%);
			width: 80%;
			max-width: 360px;
			text-align: center;
			padding: 8px 0;
			font-size: 14px;  
		}
		.table1 .title{
			background: rgb(0,35,93);
			background: linear-gradient(160deg, rgba(0,35,93,1) 0%, rgba(0,98,255,1) 55%, rgba(0,36,93,1) 100%);
		}
		/* ************************************* */
		.countainerSkill{
			padding: 0 20px;
			height: 55vh;
		  }
		  
		  .skill-name{
			font-size: 18px;
			font-weight: 700;
			text-transform: uppercase;
			margin: 20px 0;
			margin-top: 8vh;
		  }
		  
		  .skill-bar{
			height: 20px;
			background: #cacaca;
			border-radius: 8px;
		  }
		  
		  .skill-per{
			height: 20px;
			background-color: rgb(0, 98, 255);
			border-radius: 8px;
			width: 0;
			transition: 1s linear;
			position: relative;
		  }
		  
		  .skill-per::before{
			content: attr(per);
			position: absolute;
			padding: 4px 6px;
			background-color: #000;
			color: #fff;
			font-size: 12px;
			border-radius: 4px;
			top: -35px;
			right: 0;
			transform: translateX(50%);
		  }
		  
		  .skill-per::after{
			content: "";
			position: absolute;
			width: 10px;
			height: 10px;
			background-color: #000;
			top: -16px;
			right: 0;
			transform: translateX(50%) rotate(45deg);
			border-radius: 2px;
		  }
		  
		/* ************************************** */
		  .tableCircle{
			  background-color: #fff;
			  box-shadow: rgba(0, 0, 0, 0.4) 0px 0px 14px;
		  }
		
		 .tableCircle .title{
			background: rgb(0,35,93);
			background: linear-gradient(160deg, rgba(0,35,93,1) 0%, rgba(0,98,255,1) 55%, rgba(0,36,93,1) 100%);
		} 
		.container{
			position: relative;
		
			display: flex;
			justify-content: space-around;
		}
		.container .card{
			margin-top: 5vh;
			position: relative;
			width: 250px;
			background: #fff;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 300px;
			border-radius: 4px;
			text-align: center;
			overflow: hidden;
			transition: 0.5s;
		}
		.container .card:hover{
			transform: translateY(-10px);
			box-shadow: 0 15px 35px rgba(0,0,0,.5);
		}
		.container .card:before{
			content: "";
			position: absolute;
			top: 0;
			left: -50%;
			width: 100%;
			height: 100%;
			background: rgba(0,0,0,.03);
			pointer-events: none;
			z-index: 1;
		}
		.percent{
			position: relative;
			width: 150px;
			height: 150px;
			border-radius: 50%;
			box-shadow: inset 0 0 50px #000; 
			background: #222;
			z-index: 1000;
		}
		.percent .number{
			position: absolute;
			top: 0;
			left: 0%;
			width: 100%;
			height: 100%;
			display: grid;
			justify-content: center;
			align-items: center;
			border-radius: 50%;
		
		}
		.percent .number h2{
			color: #777;
			font-weight: 700;
			font-size: 40px;
			transition: 0.5s;
		}
		.card:hover .percent .number h2{
			color: #fff;
			font-size: 60px;
		}
		.percent .number h2 span{
			font-size: 24px;
			color: #777;
			transition: 0.5s;
		}
		.card:hover .percent .number h2 span{
			color: #fff;
		}
		.text{
			position: relative;
			color: #777;
			margin-top: 20px;
			font-weight: 700;
			font-size: 18px;
			letter-spacing: 1px;
			text-transform: uppercase;
			transition: 0.5s;
		}
		.card:hover .text{
			color: rgb(0, 0, 0);
		}
		svg{
			position: relative;
			width: 150px;
			height: 150px;
			z-index: 1000;
		}
		svg circle{
			width: 100%;
			height: 100%;
			fill: none;
			stroke: #191919;
			stroke-width: 10;
			stroke-linecap: round;
			transform: translate(5px, 5px);
		}
		svg circle:nth-child(2){
			stroke-dasharray: 440;
			stroke-dashoffset: 440;
		}
		.card:nth-child(1) svg circle:nth-child(2){
			stroke-dashoffset: calc(440 - (440 * '.$motivator.') / 100);
			stroke: rgb(0, 98, 255);
		}
		.card:nth-child(2) svg circle:nth-child(2){
			stroke-dashoffset: calc(440 - (440 * '.$english.') / 100);
			stroke: rgb(0, 98, 255);
		}
		.card:nth-child(3) svg circle:nth-child(2){
			stroke-dashoffset: calc(440 - (440 * '.$excel.') / 100);
			stroke: rgb(0, 98, 255);
		}
		/* *************************************** */
		.timeline{
			position: relative;
			margin: 50px auto;
			width: 1000px;
			padding: 40px 0;
			box-sizing: border-box;
		}
		.timeline::before{
			content: "";
			position: absolute;
			left: 50%;
			width: 2px;
			height: 100%;
			background: #c5c5c5;
		}
		.timeline ul{
			margin: 0;
			padding: 0;
		}
		.timeline ul li{
			list-style: none;
			position: relative;
			width: 50%;
			padding: 20px 40px;
			box-sizing: border-box;
		}
		.timeline ul li:nth-child(odd){
			float: left;
			text-align: right;
			clear: both;
		}
		.timeline ul li:nth-child(even){
			float: right;
			text-align: left;
			clear: both;
		}
		.content{
			padding-bottom: 20px;
		}
		.timeline ul li:nth-child(odd):before{
			content: "";
			position: absolute;
			top: 24px;
			right: -6px;
			width: 10px;
			height: 10px;
			background: rgba(233, 33, 99, 1);
			border-radius: 50%;
			box-shadow: 0 0 0 3px rgba(233, 33, 99, 1);
		}
		.timeline ul li:nth-child(even):before{
			content: "";
			position: absolute;
			top: 24px;
			left: -4px;
			width: 10px;
			height: 10px;
			background: rgba(0, 98, 255, 1);
			border-radius: 50%;
			box-shadow: 0 0 0 3px rgba(0, 98, 255, 0.3);
		}
		.timeline ul li h3{
			margin: 0;
			padding: 0;
			font-weight: 600;
			color: rgba(0, 98, 255, 1);
		}
		.timeline ul li p{
			margin: 10px 0 0;
			padding: 0;
		}
		.timeline ul li .time h4{
			margin: 0;
			padding: 0;
		}
		.timeline ul li:nth-child(odd) .time{
			position: absolute;
			top: 12px;
			right: -165px;
			margin: 0;
			padding: 8px 16px;
			background: rgba(0, 98, 255, 1);
			color: #fff;
			border-radius: 18px;
			box-shadow: 0 0 0 3px rgba(0, 98, 255, 0.3);
		}
		.timeline ul li:nth-child(even) .time{
			position: absolute;
			top: 12px;
			left: -165px;
			margin: 0;
			padding: 8px 16px;
			background: rgba(0, 98, 255, 1);
			color: #fff;
			border-radius: 18px;
			box-shadow: 0 0 0 3px rgba(0, 98, 255, 0.3);
		}
		/* *************************************** */
		.buttonsEnd{
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.social-buttons{
			margin-top: 20vh;
		}
		
		.social-buttons a{
			display: inline-flex;
			text-decoration: none;
			font-size: 25px;
			width: 20px;
			height: 20px;
			color: #fff;
			justify-content: center;
			align-items: center;
			position: relative;
			margin: 0 25px;
		  }
		  
		  .social-buttons a::before{
			content: "";
			position: absolute;
			width: 60px;
			height: 60px;
			background: linear-gradient(45deg,rgb(0, 98, 255),#30336b);
			border-radius: 50%;
			z-index: -1;
			transition: 0.3s ease-in;
		  }
		  
		  .social-buttons a:hover::before{
			transform: scale(0);
		  }
		  
		  .social-buttons a i{
			transition: 0.3s ease-in;
		  }
		  
		  .social-buttons a:hover i{
			background: linear-gradient(45deg,#22a6b3,#30336b);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			transform: scale(2.2);
		  }
		/* *************************************** */
		@keyframes move{
			0%{
				transform: translateY(500px);
				opacity: 0%;
			}  
		}';

		$textHTML = '<!doctype html>
		<html>
		  <head>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Curriculo</title>
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<!-- Link Style Css -->
			<link rel="stylesheet" href="style.css">
			<!-- Bootstrap CSS -->    
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		  </head>
		  <body>
			<div class="container-fluid">
				<button id="topBtn"><i class="fas fa-arrow-up"></i></button>
				<div class="profile">
					<div class="row">
						<div class="col-sm-3 profile1">
							<div class="row">
								<div class="img-profile">
									<!-- <img src="profile.jpg" alt="imagem de profile"> -->
									<i class="fa fa-user-circle" aria-hidden="true"></i>
								</div>
							</div>
							<div class="row">
								<div class="availability">
									<i class="fas fa-check"></i>
									<span class="text-availability">Disponível para freelance</span>
								</div>
							</div>
						</div>            
						<div class="col-sm-8 resum">
							<h2>
								<br><br>
								<span class="txtName">'.$nome." ".$lastname.'</span>
							</h2>
							<h4 class="txtSubT">web developer</h4>
							<p class="txtP">
								'.$descr.'
							</p>
							<div class="row">
								<div class="col-sm-6">
									<ul class="info">
										<li>
											<span class="title-info">Idade: </span>
											<span class="info">'.$age.'</span>
										</li>
										<li>
											<span class="title-info">Endereço: </span>
											<span class="info">'.$adress.'</span>
										</li>
										<li>
											<span class="title-info">Email: </span>
											<span class="info">'.$email.'</span>
										</li>
									</ul>
								</div>
								<div class="col-sm-6">
									<ul class="info">
										<li>
											<span class="title-info">Telefone: </span>
											<span class="info">'.$phone.'</span>
										</li>
										<li>
											<span class="title-info">Sexo: </span>
											<span class="info">'.$sexo.'</span>
										</li>
										<li>
											<span class="title-info">Nacionalidade: </span>
											<span class="info">'.$nationality.'</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>     
				<section id="skills" class="skills" style="animation: move 1s ease-out forwards;">
					<div class="titleSection">
						<h2 class="h2Skilll">Habilidades</h2>
					</div>
					<div class="row tstaa">
						<div class="col-4 tableSkill table1">
							<div class="header">
							  <div class="title">Habilidades Profissionais</div>
							</div>
							<div class="countainerSkill">
								<div class="skill">
									<div class="skill-name"><i class="fab fa-html5"></i> HTML</div>
									<div class="skill-bar">
										<div class="skill-per" per='.$html.'></div>
									</div>
								</div>
								<div class="skill">
									<div class="skill-name"><i class="fab fa-css3-alt"></i> CSS</i></div>
									<div class="skill-bar">
										<div class="skill-per" per='.$css.'></div>
									</div>
								</div>
								<div class="skill">
									<div class="skill-name"><i class="fab fa-js"></i> JavaScript</div>
									<div class="skill-bar">
										<div class="skill-per" per='.$js.'></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-7 tableCircle ml-4">
							<div class="header">
								<div class="title">HABILIDADES ADICIONAIS</div>
							</div>
							<div class="container">
								<div class="card">
									<div class="box">
										<div class="percent">
											<svg>
												<circle cx="70" cy="70" r="70"></circle>
												<circle cx="70" cy="70" r="70"></circle>
											</svg>
											<div class="number">
												<h2>'.$motivator.' <span>%</span></h2>
											</div>
										</div>
										<h2 class="text">Motivador</h2>
									</div>
								</div>
								
								<div class="card">
									<div class="box">
										<div class="percent">
											<svg>
												<circle cx="70" cy="70" r="70"></circle>
												<circle cx="70" cy="70" r="70"></circle>
											</svg>
											<div class="number">
												<h2>'.$english.' <span>%</span></h2>
											</div>
										</div>
										<h2 class="text">Inglês</h2>
									</div>
								</div>
								
								<div class="card">
									<div class="box">
										<div class="percent">
											<svg>
												<circle cx="70" cy="70" r="70"></circle>
												<circle cx="70" cy="70" r="70"></circle>
											</svg>
											<div class="number">
												<h2>'.$excel.' <span>%</span></h2>
											</div>
										</div>
										<h2 class="text">Excel</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
		
				<section id="educationTimeLine" class="educationTimeLine" style="animation: move 1s ease-out forwards;">
					<div class="titleSection">
						<h2 class="h2Skilll">Formação</h2>
					</div>
					<div class="row">
						<div class="col-10 offset-1 mt-3">
							
							<div class="timeline">
								<ul>
									<li>
										<div class="content">
											<h3>'.$study1.'</h3>
											<p>
												'.$description1.'
											</p>
										</div>
										<div class="time">
											<h4>'.$year1.'</h4>
										</div>
									</li>
									<li>
										<div class="content">
											<h3>'.$study2.'</h3>
											<p>
												'.$description2.'
											</p>
										</div>
										<div class="time">
											<h4>'.$year2.'</h4>
										</div>
									</li>
									<li>
										<div class="content">
											<h3>'.$study3.'</h3>
											<p>
											'.$description3.'
											</p>
										</div>
										<div class="time">
											<h4>'.$year3.'</h4>
										</div>
									</li>
									<li>
										<div class="content">
											<h3>'.$study4.'</h3>
											<p>
											'.$description4.'
											</p>
										</div>
										<div class="time">
											<h4>'.$year4.'</h4>
										</div>
									</li>
									<div style="clear: both;"></div>
								</ul>
							</div>
		
						</div>
					</div>
		
				</section>
		
				<section id="buttonSocial" class="buttonSocial" style="animation: move 1s ease-out forwards;">
					<div class="row">
						<div class="col-12 mt-3 buttonsEnd">
							<div class="social-buttons">
								<a href="'.$face.'"><i class="fab fa-facebook-f"></i></a>
								<a href="'.$twitter.'"><i class="fab fa-twitter"></i></a>
								<a href="'.$insta.'"><i class="fab fa-instagram"></i></a>
								<a href="'.$youtube.'"><i class="fab fa-youtube"></i></a>
								<a href="'.$linkedin.'"><i class="fab fa-linkedin-in"></i></a>
							</div>
						</div>
					</div>
				</section>
			</div>
			<!-- jQuery first, then Popper.js, then FontAwesome -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
			
			<script src="skill.js"></script>
			<script src="btn.js></script>
			</body>
		</html>';

		$arqvHTML = fopen("resume.html", "a++");
		fwrite($arqvHTML, "$textHTML");
		fclose($arqvHTML);

		$arqvCSS = fopen("style.css", "a++");
		fwrite($arqvCSS, "$textCSS");
		fclose($arqvCSS);
	}

?>


</body>
</html>