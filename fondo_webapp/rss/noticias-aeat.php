<?php
$rss = simplexml_load_file("https://sede.agenciatributaria.gob.es/Sede/todas-noticias.xml");
$textos_no_incluidos = array_map('trim', (array) simplexml_load_file('https://portalcai.es/caiconta/Novedades/Filtrado-eliminar-rss-dashboard.xml')->contenido);
$count = 0;

foreach ($rss->channel->item as $item) {

    $title_lower = strtolower((string)$item->title);
    $description_lower = strtolower((string)$item->description);

    $matches_eliminar = array_filter($textos_no_incluidos, function ($element) use ($title_lower, $description_lower) {
        $element_lower = strtolower($element);
        return strpos($title_lower, $element_lower) !== false || strpos($description_lower, $element_lower) !== false;
    });

    if (count($matches_eliminar) == 0 && $count < 3) { // && count($matches_aceptar) > 0 
?>
        <p style="font-size:14px;text-align:justify;">
            <span class="badge"><i class="bi bi-calendar"></i>&nbsp;&nbsp;<?php echo parse_rss_fecha($item->pubDate); ?></span><br>
            <?php
            echo implode(' ', array_slice(explode(' ', $item->title), 0, 25));
            if (str_word_count($item->title) > 25) {
            ?>&nbsp;(...)
        <?php };
            if (!empty($item->link)) { ?>
            <a class="vermas" <?php if ($_SESSION[obtener_nombre_sesion() . 'app'] == 'web') echo "href=" . $item->link; ?> onclick=<?php if ($_SESSION[obtener_nombre_sesion() . 'app'] == 'local') echo abrir_url($item->link); ?> target="_blank">
                <u>Ver más</u>
            </a>
        <?php
            }
        ?>
        </p>
<?php
        $count++;
    }
}
?>
</div>