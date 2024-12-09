<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo X</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/problemas.css">
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
    <section class="wrapper">
        <header>
            <h1 class="logo"><a href="index.php">StemPhp</a></h1>
            <nav>
                <ul>
                    <li><a href="index.php" class="current">Inicio</a></li>
                </ul>
            </nav>
        </header>
        
        <section id="contenedor">
            <section class="problema">
                <h2>Problema</h2>
                <p>Descripción:</p>
                <p>
                    Determina la energía producida (en MWh) en una central hidroeléctrica de turbina Pelton con rendimiento de 90%, en el mes 
                    de marzo, si el salto de agua es de 120 m y el caudal es de 2,75 m³/s.
                </p>
                <section class="formulas">
                    <h2>Fórmulas</h2>
                    <ul>
                        <li><strong>P<sub>t</sub> = 1000 × Q × g × h</strong> (Potencia teórica en W)</li>
                        <li><strong>P<sub>r</sub> = η × P<sub>t</sub></strong> (Potencia real, considerando el rendimiento)</li>
                        <li><strong>E = P<sub>r</sub> × t</strong> (Energía generada en un periodo de tiempo)</li>
                        <li><strong>Q = K × t × S × r</strong> (Conversión a energía térmica en Kcal)</li>
                        <li><strong>1 Kcal = 4.18 J</strong> (Relación entre calorías y joules)</li>
                        <li><strong>1 KWh = 3.6 × 10⁶ J</strong> (Relación entre energía y kilowatts-hora)</li>
                        <li><strong>Para convertir de Kcal a KWh:</strong></li>
                        <li><strong>KWh = (Q × 4.18) / 3,600,000</strong> (Conversión de calorías a kilowatts-hora)</li>
                    </ul>
                </section>


                <section class="datos">
                    <h2>Datos Utilizados</h2>
                    <ul>
                        <li><strong>Rendimiento (η):</strong> 90% (0.90)</li>
                        <li><strong>Caudal (Q):</strong> 2.75 m³/s</li>
                        <li><strong>Gravedad (g):</strong> 9.8 m/s²</li>
                        <li><strong>Altura (h):</strong> 120 m</li>
                        <li><strong>Días en marzo:</strong> 31 días</li>
                        <li><strong>Horas al día:</strong> 24 horas</li>
                    </ul>
                </section>
                <section class="calculos">
                    <h2>Solución</h2>
                    <div id="resultadoA">
                        <?php
                        
                        $rendimiento = 0.90; 
                        $caudal = 2.75; 
                        $gravedad = 9.8; 
                        $altura = 120;
                        $dias_marzo = 31; 
                        $horas_dia = 24; 

                       
                        $tiempo_horas_marzo = $dias_marzo * $horas_dia;
                        $potencia_teorica = 1000 * $caudal * $gravedad * $altura; 
                        $potencia_teorica_kw = $potencia_teorica / 1000; 
                        $potencia_real = $rendimiento * $potencia_teorica_kw; 
                        $potencia_real_mw = $potencia_real / 1000;
                        $energia_generada = $potencia_real_mw * $tiempo_horas_marzo; 

                        echo "<p><strong>Potencia teórica (Pt):</strong> " . round($potencia_teorica_kw, 2) . " kW</p>";
                        echo "<p><strong>Potencia real (Pr):</strong> " . round($potencia_real_mw, 2) . " MW</p>";
                        echo "<p><strong>Tiempo total en marzo:</strong> " . $tiempo_horas_marzo . " horas</p>";
                        echo "<p><strong>Energía generada en marzo:</strong> " . round($energia_generada, 2) . " MWh</p>";
                        ?>
                    </div>
                </section>

        </section>

        <footer class="pie">
            Piedra Fiscal Alejandro
        </footer>
    </section>
</body>
</html>
