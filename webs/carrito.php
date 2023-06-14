<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CL Jewelry - Carrito</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/index.css">
</head>

<body>
    <nav class="navbar bg-body-tertiary rounded-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">
                <img src="../src/logo2.png" alt="Logo" width="45" height="38"
                    class="d-inline-block align-text-top logo-img">
                <span class="logo-text" id="logo-text"></span>
            </a>
            <a href="./carrito.php"><img class="cart"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAATxJREFUSEvNld01BEEQhb8bATJYEbARIAIywCsPbASIgBderQiQARFYESACRHCdOnbmzM5fjzPGUS/z0Lfr69vVVSMGDg2cn78D2PbczQcwlTT5DXe5gwIgy7sl6aEvpHJFto+Bc+Be0s4QgGXgfZ54VdJrH0htkW1Pgd0eiWeSxrG/CbAOPPUAvEkaNQJiwfYMWAP2JYWjZBScn0k6TQH2gGsgt9tGsB21ewHim9eutdFsR08sAWNJ4agxbGcHepS0mQlTgAvgCLiRFAnaANEzG+UrTQGiUGE7YkVSOKqE7Uz3CYyKuuQssn0HbAMTSeGoDhAFPalz2gUQ3XybfELfgsp4SQJKT7aN8ywp+mchOgE6nr5W1glg+xI4AK4kHRYzta2Frisg+1cgaWFPccyX134CGNbB4DX414Avp0yCGadJbQgAAAAASUVORK5CYII=" /></a>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle custom-dropdown" type="button" aria-haspopup="true"
                    aria-expanded="false" onclick="toggleDropdown()">
                    Catalogo
                </button>
                <ul class="dropdown-menu bg-light text-muted dropdown-menu-right dropdown-menu-bottom" id="myDropdown">
                    <li><a class="dropdown-item" href="./anillos.php">Anillos</a></li>
                    <li><a class="dropdown-item" href="./aros.php">Aros</a></li>
                    <li><a class="dropdown-item" href="./cadenas.php">Cadenas</a></li>
                    <li><a class="dropdown-item" href="./brazaletes.php">Brazaletes</a></li>
                    <li><a class="dropdown-item" href="./broches.php">Broches</a></li>
                    <li><a class="dropdown-item" href="./contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <section id="carrito" class="container my-5">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Quitar</td>
                        <td>Vista Previa</td>
                        <td>Producto</td>
                        <td>Precio</td>
                        <td>Cantidad</td>
                        <td>Total</td>
                    </tr>
                </thead>

                <tbody>
                    <!--P 1-->
                    <tr>
                        <td><a href="#"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALZJREFUSEvtlc0NwjAMRh0vwgiUTRgBFojxBmxgNQvACGwCbACLOJyKoAqJU7Vc2hwj6z3ny5+DiYebmA9FQQhhF2M8pRpxzu299+dck1mBiDSIeM0BVHXDzLdfNV+Ctm3jGJER0Zv7X8EY3fcZyT0YGtVnNJ1oBoJu2f3YUvODIloExVO0RDSDiGoewJqL9gCAVQ0cAO5E1JheUxHZIuIRANZGyVNVD8x8MQmMUFNZ8dM3UTJFLytZohnGyRG5AAAAAElFTkSuQmCC" /></a>
                        </td>
                        <td><img src="../src/galeria/p1.png" class="imgproductos"></td>
                        <td>
                            <h5>Cadena Oro <br>Grumet</h5>
                        </td>
                        <td>
                            <h5>$300.000</h5>
                        </td>
                        <td><input type="number" class="w-25 pl-1" value="1"></td>
                        <td>
                            <h5>$320.000</h5>
                        </td>
                    </tr>
                    <!--P 2-->
                    <tr>
                        <td><a href="#"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALZJREFUSEvtlc0NwjAMRh0vwgiUTRgBFojxBmxgNQvACGwCbACLOJyKoAqJU7Vc2hwj6z3ny5+DiYebmA9FQQhhF2M8pRpxzu299+dck1mBiDSIeM0BVHXDzLdfNV+Ctm3jGJER0Zv7X8EY3fcZyT0YGtVnNJ1oBoJu2f3YUvODIloExVO0RDSDiGoewJqL9gCAVQ0cAO5E1JheUxHZIuIRANZGyVNVD8x8MQmMUFNZ8dM3UTJFLytZohnGyRG5AAAAAElFTkSuQmCC" /></a>
                        </td>
                        <td><img src="../src/galeria/p2.png" class="imgproductos"></td>
                        <td>
                            <h5>Anillos Acero <br>Inoxidable</h5>
                        </td>
                        <td>
                            <h5>$2.000</h5>
                        </td>
                        <td><input type="number" class="w-25 pl-1" value="1"></td>
                        <td>
                            <h5>$2.500</h5>
                        </td>
                    </tr>
                    <!--P 3-->
                    <tr>
                        <td><a href="#"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALZJREFUSEvtlc0NwjAMRh0vwgiUTRgBFojxBmxgNQvACGwCbACLOJyKoAqJU7Vc2hwj6z3ny5+DiYebmA9FQQhhF2M8pRpxzu299+dck1mBiDSIeM0BVHXDzLdfNV+Ctm3jGJER0Zv7X8EY3fcZyT0YGtVnNJ1oBoJu2f3YUvODIloExVO0RDSDiGoewJqL9gCAVQ0cAO5E1JheUxHZIuIRANZGyVNVD8x8MQmMUFNZ8dM3UTJFLytZohnGyRG5AAAAAElFTkSuQmCC" /></a>
                        </td>
                        <td><img src="../src/galeria/p3.png" class="imgproductos"></td>
                        <td>
                            <h5>Cadena Oro <br>Turbillon</h5>
                        </td>
                        <td>
                            <h5>$300.000</h5>
                        </td>
                        <td><input type="number" class="w-25 pl-1" value="1"></td>
                        <td>
                            <h5>$320.000</h5>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section id="carrito-bottom" class="container">
            <div class="row">
                <div class="cupon col-lg-6 col-md-6 col-12 mb-4">
                    <div>
                        <h5>Cupon</h5>
                        <p>Ingresa tu cupón en caso de tener uno.</p>
                        <input type="text" placeholder="Codigo" id="cuponinput">
                        <button type="button" class="btn btn-outline-secondary">Aplicar</button>
                    </div>
                </div>
                <div class="total col-lg-6 col-md-6 col-12">
                    <div>
                        <h5>Total Carrito</h5>
                        <div class="d-flex justify-content-between">
                            <h6>Subtotal</h6>
                            <p>$642.500</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6>Envios</h6>
                            <p>$50.000</p>
                        </div>
                        <hr class="segundo-hr">
                        <div class="d-flex justify-content-between">
                            <h6>Total</h6>
                            <p>$692.500</p>
                        </div>
                        <button type="button" class="btn btn-outline-secondary ml-auto">Pagar</button>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <footer class="footer">

        <div class="row">
            <div class="col">
                <a href="#">Instagram</a>
                <a href="#">Facebook</a>
                <a href="#">WhatsApp</a>
                <a href="#">Twitter</a>
                <a href="https://github.com/zRdriyw/cljewelry">GitHub</a>
                <a href="#">13/06/23</a>
            </div>
            <div class="col">
                <a href="./faq.php">FAQ</a>
                <a href="./rpedido.php">Rastrear Pedido</a>
                <a href="#">Rodrigo Inostroza</a>
                <a href="#">Alvey Silvestre</a>
                <a href="https://www.inscovald.cl/web/">Institucion</a>
            </div>
        </div>

    </footer>

    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById("myDropdown");
            dropdown.classList.toggle("show");
        }

        window.onclick = function (event) {
            if (!event.target.matches('.dropdown-toggle')) {
                var dropdowns = document.getElementsByClassName("dropdown-menu");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

        var logoText = document.getElementById("logo-text");
        var text = "CL Jewelry - Carrito";
        var index = 0;

        function typeEffect() {
            if (index < text.length) {
                logoText.innerHTML += text.charAt(index);
                index++;
                setTimeout(typeEffect, 50);
            }
        }

        typeEffect();

    </script>
</body>

</html>