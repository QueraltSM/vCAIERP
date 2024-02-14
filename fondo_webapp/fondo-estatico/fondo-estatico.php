 <?php include_once("../../../fondo_webapp/funciones.php"); ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8" />
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
     <link href="bootstrap.min.css" rel="stylesheet" />
     <link href="style.css" rel="stylesheet" />
 </head>

 <body style="background-image:url('fondo.png');background-size: cover;">
     <main>
         <section class="justify-content-center" style="color:#FFF;">
             <div style="display:inline-block;text-align:center;width:100%;  margin: 0;position: absolute;top: 40%;transform: translateY(-50%);">
                 <span style="font-family:Iconos;color:#FFF;font-size: 1000%;">G</span>
                 <h1 style="font-size:46px;"><strong>Software facturación</strong></h1>
                 <div style="display:inline-block;text-align:center;">
                     <h5 text-center><a href="mailto:caifac@caisoft.es" style="color:#FFF;font-size:22px;">caifac@caisoft.es</a></h5>
                 </div>
                 <?php if (isset($_GET['error'])) { ?>
                     <div style="color:white;width:30%;text-align:center;margin:0 auto;background: rgba(255, 255, 255, 0.3);padding:30px;border-radius:20px;">
                         <span style="font-size:20px;"><?php echo $_GET['error']; ?></span>
                         <?php if (isset($_GET['version'])) { ?>
                             <span style="font-size:20px;">Versión <?php echo $_GET['version']; ?></span>
                         <?php } ?>
                     </div>
                 <?php } ?>
             </div>
             <div style="display:inline-block;text-align:center;width:100%;position: absolute;bottom: 20px;left: 0;right: 0;">
                 <div style="float:left;padding-left:50px">
                     <a href="https://caisoft.es/" target="_blank" style="color:#FFF"><img src="logo-caisoft.png" width="250" />
                         <h5 text-center>caisoft.es</h5>
                     </a>
                 </div>
                 <img src="logotipo.png" style="float:right;padding-right:50px" />
             </div>
         </section>
     </main>
 </body>

 </html>