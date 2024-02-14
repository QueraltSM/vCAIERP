<?php
//if (isset($_GET['id'])) session_destroy();
session_start();
include_once("../../fondo_webapp/funciones.php");
$_SESSION[obtener_nombre_sesion() . 'app'] = "web";

function ejercicio()
{
    return "";
}
function programa()
{
    return "CAIERP";
}
function plantilla()
{
    return "plantilla-fondo.php";
}
function obtener_dominio_programa()
{
    return "";
}

function obtener_logo()
{
    echo "img/dashboard-logo.png";
}
function obtener_email()
{
    return "caifac@caisoft.es";
}
function obtener_telefono()
{
    return  "";
}
function obtener_telefono_extension()
{
    echo  "";
}
function obtener_novedades()
{
    echo "https://www.caisistemas.es/docs/caifac/software-facturacion-novedades-caifac-iframe.html";
}
function nuevas_consultas_inicio_ws(){}

function obtener_ruta_datos()
{
    return "";
}
function obtener_ruta_graficas()
{
    return "";
}
function volver_inicio()
{
    return "";
}
function obtener_ruta_para_empezar()
{
    return  "";
}
function obtener_ruta_rss()
{
    return "../../caierp/fondo_webapp/rss";
}
function obtener_version_licencia()
{
    return "";
}
function obtener_nombre_empresa()
{
    return "";
}
function obtener_denominacion_empresa()
{
    return  "";
}
function nuevas_consultas_graficas_ws(){}

function obtener_sds()
{
    return "";
}

function obtener_sds_mensajes_pendientes()
{
    return "";
}
function get_ruta_alertas_local()
{
    return "https://www.caisistemas.es/docs/caifac/Alertas-dashboard-local.xml";
}
function get_ruta_alertas_web()
{
    return "https://portalcai.es/caifac/Novedades/Alertas-dashboard-web.xml";
}
function obtener_css()
{
    echo "../../fondo_webapp/assets/css/estilos-caifac.css";
}
include_once("../../fondo_webapp/index.php");