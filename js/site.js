/**
 * @author Nacho
 */

function comprobar()
{
	var a = document.getElementById("inputmail").value;
	var b = document.getElementById("inputpass").value;
	
	if(a == "" || b == "")
	{
		
		
		document.location.href = "index.php?fallo=1";
		
	}
	else
	{
		document.entrar.submit();
	}
	
	return false;
}


function validacion()
{
	var nombre = document.getElementById("ejemplo_user_1").value;
	var email = document.getElementById("ejemplo_email_1").value;
	var pass1 = document.getElementById("ejemplo_password_1").value;
	var pass2 = document.getElementById("ejemplo_password_2").value;
	
	if(nombre == null || nombre.length == 0)
	{
		document.getElementById("errornombre").innerHTML = "Introduce un nombre de usuario";
		alert("hey");
		return false;
	}
	
	if(email == null || email.length == 0)
	{
		document.getElementById("errormail").innerHTML = "Introduce un email válido";
		return false;
	}
	
	if(pass1 == null || pass1.length == 0)
	{
		document.getElementById("erropass").innerHTML = "Introduce una contraseña";
		return false;
	}
	
	if(pass2 == null || pass2.length == 0)
	{
		document.getElementById("erropass").innerHTML = "Vuelve a introducir la contraseña";
		return false;
	}
	
	if(pass1 != pass2)
	{
		document.getElementById("errorpass").innerHTML = "Las contraseñas no coinciden";
		return false;
	}
	
	//return true;
	return false;
}
