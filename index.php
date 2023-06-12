<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CL Jewelry - Inscovald</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./icons/css/boxicons.min.css">
</head>

<body>
    <nav class="navbar bg-body-tertiary rounded-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="src/logo2.png" alt="Logo" width="45" height="38"
                    class="d-inline-block align-text-top logo-img">
                <span class="logo-text" id="logo-text"></span>
            </a>
            <a href="./webs/carrito.php">
                <img class="cart"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAATxJREFUSEvNld01BEEQhb8bATJYEbARIAIywCsPbASIgBderQiQARFYESACRHCdOnbmzM5fjzPGUS/z0Lfr69vVVSMGDg2cn78D2PbczQcwlTT5DXe5gwIgy7sl6aEvpHJFto+Bc+Be0s4QgGXgfZ54VdJrH0htkW1Pgd0eiWeSxrG/CbAOPPUAvEkaNQJiwfYMWAP2JYWjZBScn0k6TQH2gGsgt9tGsB21ewHim9eutdFsR08sAWNJ4agxbGcHepS0mQlTgAvgCLiRFAnaANEzG+UrTQGiUGE7YkVSOKqE7Uz3CYyKuuQssn0HbAMTSeGoDhAFPalz2gUQ3XybfELfgsp4SQJKT7aN8ywp+mchOgE6nr5W1glg+xI4AK4kHRYzta2Frisg+1cgaWFPccyX134CGNbB4DX414Avp0yCGadJbQgAAAAASUVORK5CYII=" />
            </a>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle custom-dropdown" type="button" aria-haspopup="true"
                    aria-expanded="false" onclick="toggleDropdown()">
                    Catalogo
                </button>
                <ul class="dropdown-menu bg-light text-muted dropdown-menu-right dropdown-menu-bottom" id="myDropdown">
                    <li><a class="dropdown-item" href="./webs/anillos.php">Anillos</a></li>
                    <li><a class="dropdown-item" href="./webs/aros.php">Aros</a></li>
                    <li><a class="dropdown-item" href="./webs/cadenas.php">Cadenas</a></li>
                    <li><a class="dropdown-item" href="./webs/brazaletes.php">Brazaletes</a></li>
                    <li><a class="dropdown-item" href="./webs/broches.php">Broches</a></li>
                    <li><a class="dropdown-item" href="./webs/contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <h2 class="vendido">¡Los Más Vendidos!</h2>
    <div class="container">
        <div class="indexcards">
        <div class="card">
            <div class="card-image">
                <img src="./src/galeria/p1.png" alt="...">
                <img id="favicon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAgJJREFUSEu1VdF1E0EMlNRATAU4FcRUgFMBUAF2A6vbCggVrOUGEipIOiB0EFeAO8BpQOLp3p7ZnG/vnYHsj5/v3s6MpBkdwisffGV8OItARJ4AwJj53VRhkwm22+3KzG4dGBHXIYS7KSSTCUTkEQDeZ4LHEML1fyNIKS2J6LuZPWeCC1W9jjE66eiZVIGIPADABwD4mtG+AMA3Zl79M0FKaU5EPx1IVd/4LxH9yv8vY4z7MZJjBSmlj0R0ZWYOOPdLZjYDgEUGOCoWER/w5/z8CREPmXCPiHtV3cUYveo/NhURqynx3pvZolPrVSGiA1/U7jBzK/5YQWlD76+quspDjNG9Xz0pJa9wRkQbALjq2/jFkP/G6ymlGSImRPScPBNRU2bkxEUliZndNU2zrsl3cLevzym3cdmveNCmvUpiCMHLPzl5dbgxfEYn4C9m0L8tIg7K7n1mvqkQuEXfjoWuGrRuNajqp85yAyJauyJitcoxgta2Hq4Y48HdQkTtslPVtfc6Z+ceAH4w83KoykGCbvcAwI6ZFyLiLfL1UJ4bVZUi1a2QPkltyI2ZJQDoMtCludxFjuXvPe3zWisHCYrl1gnaqeqqs2Bul/e/DVY+g8tvkGCz2RyKNTDmorJ1e2a+nNSi7G8f5lH1SNh8+O3Xzec1iWBk9Zz9atIH52zU4sJvgsMbKC8XPV0AAAAASUVORK5CYII="/>
            </div>
            <div class="card-content">
                <h3>Cadena Oro Grumet</h3>
                <p>Tamaños: 60cm, 50cm, 40cm, 35cm</p>
                <p>$300.000</p>
                <button class="add-to-cart">
                    Add To Cart
                </button>
            </div>
        </div>


        <div class="card">
            <div class="card-image">
                <img src="./src/galeria/p2.png" alt="...">
                <img id="favicon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAgJJREFUSEu1VdF1E0EMlNRATAU4FcRUgFMBUAF2A6vbCggVrOUGEipIOiB0EFeAO8BpQOLp3p7ZnG/vnYHsj5/v3s6MpBkdwisffGV8OItARJ4AwJj53VRhkwm22+3KzG4dGBHXIYS7KSSTCUTkEQDeZ4LHEML1fyNIKS2J6LuZPWeCC1W9jjE66eiZVIGIPADABwD4mtG+AMA3Zl79M0FKaU5EPx1IVd/4LxH9yv8vY4z7MZJjBSmlj0R0ZWYOOPdLZjYDgEUGOCoWER/w5/z8CREPmXCPiHtV3cUYveo/NhURqynx3pvZolPrVSGiA1/U7jBzK/5YQWlD76+quspDjNG9Xz0pJa9wRkQbALjq2/jFkP/G6ymlGSImRPScPBNRU2bkxEUliZndNU2zrsl3cLevzym3cdmveNCmvUpiCMHLPzl5dbgxfEYn4C9m0L8tIg7K7n1mvqkQuEXfjoWuGrRuNajqp85yAyJauyJitcoxgta2Hq4Y48HdQkTtslPVtfc6Z+ceAH4w83KoykGCbvcAwI6ZFyLiLfL1UJ4bVZUi1a2QPkltyI2ZJQDoMtCludxFjuXvPe3zWisHCYrl1gnaqeqqs2Bul/e/DVY+g8tvkGCz2RyKNTDmorJ1e2a+nNSi7G8f5lH1SNh8+O3Xzec1iWBk9Zz9atIH52zU4sJvgsMbKC8XPV0AAAAASUVORK5CYII="/>
            </div>
            <div class="card-content">
                <h3>Anillo A. Inoxidable</h3>
                <p>Tallas: 18, 19, 20, 21</p><br>
                <p>$2.000</p>
                <button class="add-to-cart">
                    Add To Cart
                </button>
            </div>
        </div>


        <div class="card">
            <div class="card-image">
                <img src="./src/galeria/p3.png" alt="...">
                <img id="favicon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAgJJREFUSEu1VdF1E0EMlNRATAU4FcRUgFMBUAF2A6vbCggVrOUGEipIOiB0EFeAO8BpQOLp3p7ZnG/vnYHsj5/v3s6MpBkdwisffGV8OItARJ4AwJj53VRhkwm22+3KzG4dGBHXIYS7KSSTCUTkEQDeZ4LHEML1fyNIKS2J6LuZPWeCC1W9jjE66eiZVIGIPADABwD4mtG+AMA3Zl79M0FKaU5EPx1IVd/4LxH9yv8vY4z7MZJjBSmlj0R0ZWYOOPdLZjYDgEUGOCoWER/w5/z8CREPmXCPiHtV3cUYveo/NhURqynx3pvZolPrVSGiA1/U7jBzK/5YQWlD76+quspDjNG9Xz0pJa9wRkQbALjq2/jFkP/G6ymlGSImRPScPBNRU2bkxEUliZndNU2zrsl3cLevzym3cdmveNCmvUpiCMHLPzl5dbgxfEYn4C9m0L8tIg7K7n1mvqkQuEXfjoWuGrRuNajqp85yAyJauyJitcoxgta2Hq4Y48HdQkTtslPVtfc6Z+ceAH4w83KoykGCbvcAwI6ZFyLiLfL1UJ4bVZUi1a2QPkltyI2ZJQDoMtCludxFjuXvPe3zWisHCYrl1gnaqeqqs2Bul/e/DVY+g8tvkGCz2RyKNTDmorJ1e2a+nNSi7G8f5lH1SNh8+O3Xzec1iWBk9Zz9atIH52zU4sJvgsMbKC8XPV0AAAAASUVORK5CYII="/>
            </div>
            <div class="card-content">
                <h3>Cadena Oro Turbillon</h3>
                <p>Tamaños: 60cm, 50cm, 40cm, 35cm</p>
                <p>$300.000</p>
                <button class="add-to-cart">
                    Add To Cart
                </button>
            </div>
        </div>


        <div class="card">
            <div class="card-image">
                <img src="./src/galeria/p4.png" alt="...">
                <img id="favicon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAgJJREFUSEu1VdF1E0EMlNRATAU4FcRUgFMBUAF2A6vbCggVrOUGEipIOiB0EFeAO8BpQOLp3p7ZnG/vnYHsj5/v3s6MpBkdwisffGV8OItARJ4AwJj53VRhkwm22+3KzG4dGBHXIYS7KSSTCUTkEQDeZ4LHEML1fyNIKS2J6LuZPWeCC1W9jjE66eiZVIGIPADABwD4mtG+AMA3Zl79M0FKaU5EPx1IVd/4LxH9yv8vY4z7MZJjBSmlj0R0ZWYOOPdLZjYDgEUGOCoWER/w5/z8CREPmXCPiHtV3cUYveo/NhURqynx3pvZolPrVSGiA1/U7jBzK/5YQWlD76+quspDjNG9Xz0pJa9wRkQbALjq2/jFkP/G6ymlGSImRPScPBNRU2bkxEUliZndNU2zrsl3cLevzym3cdmveNCmvUpiCMHLPzl5dbgxfEYn4C9m0L8tIg7K7n1mvqkQuEXfjoWuGrRuNajqp85yAyJauyJitcoxgta2Hq4Y48HdQkTtslPVtfc6Z+ceAH4w83KoykGCbvcAwI6ZFyLiLfL1UJ4bVZUi1a2QPkltyI2ZJQDoMtCludxFjuXvPe3zWisHCYrl1gnaqeqqs2Bul/e/DVY+g8tvkGCz2RyKNTDmorJ1e2a+nNSi7G8f5lH1SNh8+O3Xzec1iWBk9Zz9atIH52zU4sJvgsMbKC8XPV0AAAAASUVORK5CYII="/>
            </div>
            <div class="card-content">
                <h3>Brazalete Plata</h3>
                <p>Tamaños: 16cm, 14cm, 10cm, 8cm</p>
                <p>$30.000</p>
                <button class="add-to-cart">
                    Add To Cart
                </button>
            </div>
        </div>


        <div class="card">
            <div class="card-image">
                <img src="./src/galeria/p5.png" alt="...">
                <img id="favicon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAgJJREFUSEu1VdF1E0EMlNRATAU4FcRUgFMBUAF2A6vbCggVrOUGEipIOiB0EFeAO8BpQOLp3p7ZnG/vnYHsj5/v3s6MpBkdwisffGV8OItARJ4AwJj53VRhkwm22+3KzG4dGBHXIYS7KSSTCUTkEQDeZ4LHEML1fyNIKS2J6LuZPWeCC1W9jjE66eiZVIGIPADABwD4mtG+AMA3Zl79M0FKaU5EPx1IVd/4LxH9yv8vY4z7MZJjBSmlj0R0ZWYOOPdLZjYDgEUGOCoWER/w5/z8CREPmXCPiHtV3cUYveo/NhURqynx3pvZolPrVSGiA1/U7jBzK/5YQWlD76+quspDjNG9Xz0pJa9wRkQbALjq2/jFkP/G6ymlGSImRPScPBNRU2bkxEUliZndNU2zrsl3cLevzym3cdmveNCmvUpiCMHLPzl5dbgxfEYn4C9m0L8tIg7K7n1mvqkQuEXfjoWuGrRuNajqp85yAyJauyJitcoxgta2Hq4Y48HdQkTtslPVtfc6Z+ceAH4w83KoykGCbvcAwI6ZFyLiLfL1UJ4bVZUi1a2QPkltyI2ZJQDoMtCludxFjuXvPe3zWisHCYrl1gnaqeqqs2Bul/e/DVY+g8tvkGCz2RyKNTDmorJ1e2a+nNSi7G8f5lH1SNh8+O3Xzec1iWBk9Zz9atIH52zU4sJvgsMbKC8XPV0AAAAASUVORK5CYII="/>
            </div>
            <div class="card-content">
                <h3>Broche Flor Plata</h3>
                <p>Tamaños: 8cm<br><br></p>
                <p>$8.000</p>
                <button class="add-to-cart">
                    Add To Cart
                </button>
            </div>
        </div>
    </div>
    </div>


    <footer class="footer">

        <div class="row">
            <div class="col">
                <a href="#">Instagram</a>
                <a href="#">Facebook</a>
                <a href="#">WhatsApp</a>
                <a href="#">Twitter</a>
            </div>
            <div class="col">
                <a href="./webs/faq.php">FAQ</a>
                <a href="./webs/rpedido.php">Rastrear Pedido</a>
                <a href="#">Rodrigo Inostroza</a>
                <a href="#">Alvey Silvestre</a>
                <a href="https://www.inscovald.cl/web/">Institucion</a>
            </div>
        </div>

    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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

        var dropdownItems = document.querySelectorAll(".dropdown-item");

        dropdownItems.forEach(function (item) {
            item.addEventListener("click", function () {
                dropdownItems.forEach(function (item) {
                    item.classList.remove("active");
                });
                this.classList.add("active");
            });
        });

        var logoText = document.getElementById("logo-text");
        var text = "CL Jewelry";
        var index = 0;

        function typeEffect() {
            if (index < text.length) {
                logoText.innerHTML += text.charAt(index);
                index++;
                setTimeout(typeEffect, 80);
            }
        }

        typeEffect();

    </script>
</body>

</html>