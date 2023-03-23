<!--
ITESI
PROGRAMACION WEB
Competencia 2.3
MAESTRO: RAFAEL RAMIREZ ROSILLO
ALUMNO: JUAN PABLO PÉREZ MENDOZA
Nro. CONTROL: TS19110036
CARRERA: ING. SISTEMAS COMPUTACIONALES
TARIMORO                    16/09/2022

 -->
 <?php session_start();

if (isset($_SESSION['id_usuario'])) {
    require 'about.php';;
} else {
    header('Location: login.php');
}


?>
 <!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
   <link rel="stylesheet" type="text/css" href="css/formulario.css">
</head>
<body>
    <div class="contact_form">
       <div class="formulario">
          <h1>Formulario de contacto</h1>
          <h3>Escribenos y en breve nos pondremos en contacto contigo</h3>
          <form action="formulario.php" method="post">
             <p><!--Parrafo-->
                <label for="nombre" class="colocar_nombre">
                   Nombre
                   <!--
                     El span se utiliza-->
                   <span class="obligatorio">*</span>
                   <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tú Nombre">
                </label>
             </p>
             <p><!--Parrafo-->
                <label for="email" class="colocar_correo">
                   Correo:
                   <!--
                     El span se utiliza-->
                   <span class="obligatorio">*</span>
                   <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tú Correo">
                </label>
             </p>
             <p><!--Parrafo-->
                <label for="telefone" class="colocar_telefono">
                   Télefono:
                   <!--
                     El span se utiliza-->
                   <span class="obligatorio">*</span>
                   <input type="tel" name="introducir_tel" id="telefone" required="obligatorio" placeholder="Escribe tú número de Télefono">
                </label>
             </p>
             <p><!--Parrafo-->
                <label for="website" class="colocar_website">
                   Sitio WEB:
                   <!--
                     El span se utiliza-->
                   <input type="url" name="introducir_url" id="website" required="obligatorio" placeholder="Escribe la URL de tu sitio">
                </label>
             </p>
             <p><!--Parrafo-->
                <label for="asunto" class="colocar_asunto">
                   Asunto:
                   <!--
                     El span se utiliza-->
                   <span class="obligatorio">*</span>
                   <input type="text" name="introducir_asunto" id="asunto" required="obligatorio" placeholder="Escribe un asunto">
                </label>
             </p>
             <p><!--Parrafo-->
                <label for="asunto" class="colocar_asunto">
                   Mensaje:
                   <!--
                     El span se utiliza-->
                   <span class="obligatorio">*</span>
                   <textarea name="introducir_mensaje" id="mensaje" cols="30" rows="10" placeholder="Deja tu mensaje"></textarea> 
                </label>
             </p>
             <button type="submit" name="enviar_formulario" id="enviar">
               <p>Enviar</p>
             </button>
             <p class="abiso">
                <span class="obligatorio">*</span>
                Los campos son obligatorios
             </p>
          </form>
       </div>
    </div>
</body>
</html>