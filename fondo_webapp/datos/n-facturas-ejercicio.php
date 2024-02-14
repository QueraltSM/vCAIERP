<?php
if ($_SESSION[obtener_nombre_sesion()."id"] > 0) {
?>
    <div class="col-4">
        <div class="card info-card customers-card" style="background-color:#FFF">
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;color:white;"></h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people" ></i>
                    </div>
                    <div class="ps-3">
                        <h6 id="n-facturas-ejercicio-total">
                        <?php if ($_SESSION[obtener_nombre_sesion()."app"] == "web") {
                                $row = consulta_bd("https://portalcai.es/api/datos", $_SESSION[obtener_nombre_sesion()."jwt"], "SELECT COUNT(FFACTURAS.NUFACFAC) TOTAL, EXTRACT(YEAR FROM (SELECT MAX(FECHAFAC) FROM FFACTURAS T2 WHERE T2.NUMEMP= :EMPRESA)) EJERCICIO FROM FFACTURAS WHERE NUMEMP= :EMPRESA
                                AND  EXTRACT(YEAR FROM FFACTURAS.FECHAFAC) = EXTRACT(YEAR FROM (SELECT MAX(FECHAFAC) FROM FFACTURAS T2 WHERE T2.NUMEMP= :EMPRESA))", "EMPRESA=".$_SESSION[obtener_nombre_sesion()."id"]);
                                echo $row[0]->total;
                            }
                            ?>
                        </h6>
                        <span class="small pt-1 fw-bold" style="color:#003657"  id="n-facturas-ejercicio"><?php
                        if ($_SESSION[obtener_nombre_sesion()."app"] == "web") {
                            echo "Facturas Ejercicio ".$row[0]->ejercicio; 
                        } ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>