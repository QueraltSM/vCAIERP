<?php
if ($_SESSION[obtener_nombre_sesion() . "id"] > 0) {
?>
    <div class="col-7">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center" id="titulo_importes"></h5>
                <canvas id="grafico"></canvas>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    var myChart = new Chart(document.getElementById('grafico'), {
                        type: 'bar',
                        options: {
                            plugins: {
                                legend: {
                                    labels: {
                                        usePointStyle: true,
                                        pointStyle: 'rect',
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    stacked: false,
                                    ticks: {
                                        autoSkip: false
                                    }
                                },
                                y: {
                                    stacked: false,
                                    beginAtZero: true
                                },
                            },
                        }
                    });
                </script>
            </div>
        </div>
    </div>
<?php
    if ($_SESSION[obtener_nombre_sesion() . 'app'] == "web") {
        include "sqls.php";
        $datos = consulta_bd("https://portalcai.es/api/datos", $_SESSION[obtener_nombre_sesion() . "jwt"], $sql_grafica_filtrada_empresa_web , "EMPRESA=" .  $_SESSION[obtener_nombre_sesion() . "id"]);
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><script>' . PHP_EOL .
            'var datos=' . json_encode($datos) . ';' . PHP_EOL .
            $js_importes . PHP_EOL .
            '</script>';
    }
} ?>