<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
   <header class="header">

    <div class="menu container">

        <a href="#" class="logo">CM</a>
        <input type="checkbox" id="menu">
        <label for="menu">
            <img src="imagen/menu.png" class="menu-icono" alt="menu">
         
        </label>
        
        <nav class="navbar">
            <ul>
                <li><a href="#">inicio</a></li>
                <li><a href="#">nosotros</a></li>
                <li><a href="#">servicios</a></li>
                <li><a href="#">inicio</a></li>
            </ul>

        </nav>


    </div >

  <div class="header-content container">
    <div class="header-txt">
        <h1>Clínica Familiar</h1>
        <p>
        La Clínica Familiar es un centro de atención médica diseñado para ofrecer servicios de salud integral a pacientes de todas las edades, desde recién nacidos hasta adultos mayores. Nuestro enfoque se centra en la atención primaria, lo que significa que nos ocupamos de una amplia variedad de problemas de salud, promoviendo la prevención, el diagnóstico temprano y el tratamiento adecuado de enfermedades.

Misión y Visión: Nuestra misión es proporcionar atención médica accesible, de calidad y centrada en el paciente, fomentando un ambiente de confianza y respeto. Creemos en la importancia de la salud familiar y comunitaria, y trabajamos para mejorar la calidad de vida de nuestros pacientes a través de un enfoque holístico que considera no solo la enfermedad, sino también el contexto social y emocional de cada individuo.
        </p>
        <a href="#" class="btn-1">informacion</a>

    </div>
<div class="header-img">
    <img src="imagen/qrar.jpg" alt="">

</div>
  </div>
   </header> 


   <section class="about container">
    <div class="about-img">
        <img src="imagen/sks.jpg" alt="">
        <div class="about-txt">

            <h2>Nosotros</h2>
            <p> 
            Tu salud, nuestra prioridad. Atención médica integral y personalizada para 
            ti y tus seres queridos. Prevención, tratamiento y bienestar en un ambiente cálido y confiable.
            </p>
            <br>
            <p>En la Clínica Familiar, nos dedicamos a cuidar de la salud de
                 toda la familia. Ofrecemos atención médica integral, enfocada en la prevención y 
                 el tratamiento de enfermedades, con un equipo de profesionales comprometidos a brindar
                  un servicio cercano y de calidad. Tu bienestar es nuestra misión.






            </p>

        </div>

    </div>

   </section>

   <main class="servicios">

    <h2>Servicios</h2>

    <div class="servicio-1">

        <i class="fa-sharp fa-solid fa-hospital-user"></i>
        <h3>pediatria</h3>
    </div>
    

    <div class="servicio-1">
        <i class="fa-sharp fa-solid fa-hospital"></i>
    <h3>dermatologia</h3>

    </div>
 


    <div class="servicio-1">
        <i class="fa-sharp fa-solid fa-hospital"></i>
    <h3>ginecologia</h3>

    </div>
 
      
       

           <div class="servicio-1">
            <i class="fa-sharp fa-solid fa-hospital"></i>
        <h3>cardiologia</h3>

        </div>
     
    </div>


   </main>
   <section class="formulario container">
    <form method="post" autocomplete="off">

        <h2>agenda consulta</h2>

        <div class="input-group">

            <div class="input-container">
                <input type="text" name="name" placeholder="Nombre y apellido">
<i class="fa-solid fa-user"></i>
            </div>
            <div class="input-group">

                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono Celular">
    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="input-group">

                    <div class="input-container">
                        <input type="email" name="email" placeholder="correo">
        <i class="fa-solid fa-envelope"></i>
                    </div>
                    
                    <div class="input-container">
                        <textarea name="message" placeholder="Detalles de la consulta"></textarea>
       
                    </div>

                    <input type="submit" name="send" class="btn" onclick="myfunction()">



        </div>
    </form>
   </section>

   <footer class="footer">
    <div class="footer-conent container">

        <div class="link">
            <a href="#" class="logo">logo</a>
        </div>

        <div class="link">
            <ul>
                <li><a href="#">inicio</a></li>
                <li><a href="#">nosotros</a></li>
                <li><a href="#">sevicios</a></li>
                <li><a href="#">contacto</a></li>

            </ul>
        </div>


    </div>

   </footer>
   <?php
   include("send.php");
   ?>
   <script>
    function myfunction(){
        window.location.href="http://localhost/pagina"
    }
   </script>
</body>
</html>