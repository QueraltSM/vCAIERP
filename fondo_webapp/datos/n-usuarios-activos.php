<?php
if ($_SESSION[obtener_nombre_sesion()."id"] == 0) {
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
                        <h6 id="n-usuarios">
                            <?php if ($_SESSION[obtener_nombre_sesion()."app"] == "web") {
                                 echo numero_usuarios_activos_web('CAIFACWEB');
                            }
                            ?>
                        </h6>
                        <span class="small pt-1 fw-bold" style="color:#003657">Nº usuarios activos <?php echo $_SESSION[obtener_nombre_sesion()."app"];?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>