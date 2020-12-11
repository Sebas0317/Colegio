<!DOCTYPE html>
<html lang="es ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IE SAN ISIDRO</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="/css/sedes.css">
</head>
<body>
<?php
        include "includes/header.php"
        ?>


<div class="header-sedes">
<h1>Sedes de la IE San Isidro</h1>
</div>
<div class="sedes">
        <div class="lbl-menu">
            <label for="radio1">Sede 1: San Isidro</label>
            <label for="radio2">Sede 2: Granada</label>
            <label for="radio3">Sede 3: Jaime Rooke</label>
            
        </div>
        
        <div class="sedes1">
           
            <input type="radio" name="radio" id="radio1" checked>
            <div class="tab1">
            <img src="img/sede_sanisidro.jpg" >
                <h2>San Isidro</h2>
                <p>La Sede 1 San Isidro o sede principal, ubicada en carrera 23 sur Nº. 17 02  barrio San Isidro. Tiene un área total de 1568 M2, área construida en dos plantas de 1370 M2.</p>
                <br>
                <p>Cuenta con un aula para preescolar, 10 aulas de clase, un laboratorio de ciencias naturales, una sala de informática, cancha múltiple y un patio para preescolar. Áreas administrativas: Secretaría-Rectoría, sala para los docentes y una pequeña tienda escolar. Cuenta además con un gimnasio para sus estudiantes.</p>
                <br>
                <p>Es una construcción moderna, de dos pisos, construida en el 2012. Tiene una capacidad para 400 estudiantes por la mañana y 400 por la tarde.</p>
            </div>
            
            <input type="radio" name="radio" id="radio2">
            <div class="tab2">
            <img src="img/sede_granada.jpg" > 
                <h2>Granada</h2>
                <p>La Sede 2 Granada está ubicada en la carrera 24 sur con calle 18  del barrio Granada, distante 2 kilómetros de la sede principal; es una sede de unos 500 metros cuadrados, con mas de 50 años de antigüedad; tiene 6 aulas de clase, sala de informática, comedor, cocina, batería sanitaria para hombres y otro para mujeres; tiene una pequeña cancha múltiple, y una sala para profesores. Tiene una capacidad para 200 estudiantes.</p>
            </div>
            
            <input type="radio" name="radio" id="radio3">
            <div class="tab3">
                <img src="img/sede_rooke.jpg" >
                <h2>Jaime Rooke</h2>
                <p>Ubicada a 1 kilómetro de la sede principal, es una casa tomada en arrendamiento, ubicada en carrera 23 sur No. 20-35 barrio LLano Largo en el costado norte del batallón Jaime Rooke. Tiene un área de 200 metros cuadrados aproximadamente distribuidos en dos pisos. Es una construcción de mas de 10 años de antigüedad. Cuenta con 6 aulas, pequeñas entre 18 a 20 M2; tiene sala de informática, cocina; no tiene instalaciones deportivas. Tiene una capacidad para 130 estudiantes.</p>
            </div>
            
           
        </div>
    </div>













<div class="footer">
<?php
         include "includes/footer.php"
         ?>
         </div>
</body>
</html>