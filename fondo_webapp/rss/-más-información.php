<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="col-12">
    <?php
    $rss = simplexml_load_file("https://www.caisistemas.es/docs/caifac/Mas-informacion-dashboard-local.xml");
    if ($_SESSION[obtener_nombre_sesion() . 'app'] == "web") $rss = simplexml_load_file("https://portalcai.es/caifac/Novedades/Mas-informacion-dashboard-web.xml");
    if ($rss->channel->item->count() == 0) echo "<script>$('#li-tab-mas-informacion').css('display', 'none');</script>";
    for ($i = 0; $i < 5; $i++) {
        $item = $rss->channel->item[$i];
        if ($item != null) {
    ?>
            <p style="font-size:14px;text-align:justify;">
                <span class="badge"><i class="bi bi-calendar"></i>&nbsp;&nbsp;<?php echo parse_rss_fecha($item->pubDate); ?></span><br>
                <?php echo $item->title; ?>
                <?php
                if (!empty($item->link)) { ?>
                    <a class="vermas" <?php if ($_SESSION[obtener_nombre_sesion() . 'app'] == 'web') echo "href=" . $item->link; ?> onclick=<?php if ($_SESSION[obtener_nombre_sesion() . 'app'] == 'local') echo abrir_url($item->link); ?> target="_blank">
                        <u>Ver más</u>
                    </a>
            </p>
<?php
                }
            }
        }
?>
</div>