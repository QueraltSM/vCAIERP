<?php
if ($_SESSION[obtener_nombre_sesion() . "id"] == 0) {
?>
    <div class="col-4">
        <div class="card info-card customers-card" style="background-color:#FFF">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center;color:white;"></h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-journals"></i>
                    </div>
                    <div class="ps-3">
                        <h6 id="n-facturas">
                            <?php if ($_SESSION[obtener_nombre_sesion() . "app"] == "web") {
                                $row = consulta_bd("https://portalcai.es/api/datos", $_SESSION[obtener_nombre_sesion() . "jwt"], "SELECT COUNT(FFACTURAS.NUFACFAC) FROM FFACTURAS", "");
                                echo $row[0]->count;
                            }
                            ?>
                        </h6>
                        <span class="small pt-1 fw-bold" style="color:#003657">Total Facturas</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>