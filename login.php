<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Login</title>
</head>
<body>
	<section id="containerLogin">
	
	
		<div id="bodyLogin" class="opacity0">
		
		
			<div class="divLogo">
				<img src="img/logo.png" class="logoLogin" alt="Logo">
			</div>
			

			<div id="containerLayout">
			
			
				<div id="divEmail" class="">
					<h2>Iniciar sesión</h2>
					<div id="alertEmailLogin" style="display: none;"></div>
					<input type="email" id="emailUser" name="emailUser" placeholder="Correo electrónico" >
					<p>¿No tiene una cuenta?  <a href="#" id="linkCreateAcount" >Cree una.</a></p>
					<div class="divButton divBtnLogin">
						<button type="button" id="btnNextPass" class="btnFormLogin" >Siguiente</button>
					</div>
				</div>


				<div id="divPassword" >
					<div class="divEmailUser">
						<p><button type="button" id="btnPrev" ><i class="fas fa-arrow-left"></i></button><span id="spanEmail">aaaa@aa.aa</span></p>
					</div>
					<h2>Escribir contraseña</h2>
					<div id="alertPass" style="display: none;"></div>
					<input type="password" id="passUser" name="passUser" placeholder="Contraseña">
					<label><input type="checkbox" name="sessionTrue" value="true"> Mantener la sesión iniciada</label>
					<a href="#" id="linkRecoveryPass">¿Olvidó su contraseña?</a>
					<div class="divButton">
						<button type="button" id="btnLogin" class="btnFormLogin">Iniciar sesión</button>
					</div>
				</div>


				<div id="divRegister" class="" >
					<h2>Crear cuenta</h2>
					<div id="alertRegister" style="display: none;"></div>
					<div>
						<input type="text" id="nameUser" name="nameUser" value="" placeholder="Nombre">
					</div>
					<div>
						<input type="email" id="emailNewUser" name="emailNewUser" value="" placeholder="Correo electrónico">
					</div>
					<div>
						<input type="password" id="passNewUser" name="passNewUser" value="" placeholder="Contraseña">
					</div>
					<div class="divBtnAction">
						<button type="button" id="btnNextEmail" class="btnFormLogin" > Atras </button>
						<button type="button" id="btnRegister" class="btnFormLogin">Registrarse</button>
					</div>
				</div>


				<div id="divRecoveryPass" class="" >
					<h2>Recuperar contraseña</h2>
					<p>Se te enviará un correo electrónico con instrucciones para recuperar tu cuenta.</p><br>
					<div id="alertSendEmail" style="display: none;">
						<p>Escribe una dirección de correo electrónico</p>
					</div>
					<input type="email" id="sendEmail" name="sendEmail" placeholder="Correo electrónico" >

					<div class="divBtnAction">
						<button type="button" id="btnCancelar" class="btnFormLogin">Cancelar</button>
						<button type="button" id="btnSendEmail" class="btnFormLogin"> Enviar </button>
					</div>

				</div>
			</div>

		</div>
	</section>
	<!-- <script src="js/jquery.min.js"></script> -->
	<script src="https://kit.fontawesome.com/218659dd37.js" crossorigin="anonymous"></script>
	<script src="js/functions.js"></script>
</body>
</html>