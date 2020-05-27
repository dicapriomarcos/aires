<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIRES Burger Bar</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/lux/bootstrap.min.css" rel="stylesheet" integrity="sha384-oOs/gFavzADqv3i5nCM+9CzXe3e5vXLXZ5LZ7PplpsWpTCufB7kqkTlC9FtZ5nJo" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('carta/style.css') }}">
</head>
<body>
    <!--<header class="shadow">
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
            <a class="navbar-brand" href="#"><img src="logoaires.png"></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link" href="index.php">Inicio</a>
                <a class="nav-item nav-link" href="cafeteria.php">Cafeteria</a>
                <a class="nav-item nav-link" href="#">Limonadas</a>
                <a class="nav-item nav-link" href="#">Para Picar</a>
                <a class="nav-item nav-link" href="#">Hamburguesas y Sandwiches</a>
                <a class="nav-item nav-link" href="#">Ensaladas</a>
                <a class="nav-item nav-link" href="#">Cocktails/Combinados</a>
              </div>
            </div>
          </nav>
    </header>-->
    <nav id="menu" class="text-center" style="display: none;">
            <img src="airesburgerbar.png" class="text-center">
            <ul>
                <li><a href="#cafeteria">Cafetería</a></li>
                <li><a href="#limonadas">Limonadas</a></li>
                <li><a href="#parapicar">Para Picar</a></li>
                <li><a href="#hamburguesas">Hamburguesas - Sandwiches</a></li>
                <li><a href="#ensaladas">Ensaladas</a></li>
                <li><a href="#cocktail">Cocktail - Combinados</a></li>
                <li><a href="#desayunos">Desayunos</a></li>
                <li><a href="#smothies">Smothies - Granizados</a></li>
                <li><a href="#bebidas">Bebidas</a></li>
                <li><a href="#cervezas">Cervezas</a></li>
            </ul>
        </nav>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 justify-content-center">
                    <div class="site-title justify-content-center text-center">
                        <img src="airesburgerbar.png" class="my-4">    
                    </div>
                        <h5 class="text-center">Reservas: 865 886 914</h5>
                    
                </div>
                <div class="col-12">
                    <table id="cafeteria" class="table table-striped table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>CAFETERIA</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Espresso (solo)</td>
                                <td>1.20€</td>
                            </tr>
                            <tr>
                                <td>Espresso Macchiatto (cortado)<img src="lactosa.png"></td>
                                <td>1.30€</td>
                            </tr>
                            <tr>
                                <td>Espresso Doppio (cortado)</td>
                                <td>1.80€</td>
                            </tr>
                            <tr>
                                <td>Cafe con Leche<img src="lactosa.png"></td>
                                <td>1.50€</td>
                            </tr>
                            <tr>
                                <td>Capuccino<img src="lactosa.png"></td>
                                <td>1.80€</td>
                            </tr>
                            <tr>
                                <td>Capuccino Doppio<img src="lactosa.png"></td>
                                <td>2.30€</td>
                            </tr>
                            <tr>
                                <td>Latte Macciatto<img src="lactosa.png"></td>
                                <td>1.80€</td>
                            </tr>
                            <tr>
                                <td>Moccacchino<img src="lactosa.png"></td>
                                <td>3.00€</td>
                            </tr>
                            <tr>
                                <td>Cafe Moka (Frio con chocolate)<img src="lactosa.png"></td>
                                <td>3.00€</td>
                            </tr>
                            <tr>
                                <td>Cafe Baileys</td>
                                <td>3.00€</td>
                            </tr>
                            <tr>
                                <td>Ice Coffee (con helado de vainilla)</td>
                                <td>2.50€</td>
                            </tr>
                            <tr>
                                <td>Chocolate Caliente<img src="lactosa.png"></td>
                                <td>2.00€</td>
                            </tr>
                            <tr>
                                <td>Bombon<img src="lactosa.png"></td>
                                <td>1.40€</td>
                            </tr>
                            <tr>
                                <td>Belmonte (leche condensada, cafe y cognac)<img src="lactosa.png"></td>
                                <td>2.10€</td>
                            </tr>
                            <tr>
                                <td>Carajillo (espresso y cognac)<img src="lactosa.png"></td>
                                <td>1.90€</td>
                            </tr>
                            <tr>
                                <td>Variedad de te</td>
                                <td>1.40€</td>
                            </tr>
                            <tr>
                                <td>Te de menta fresco con jenjibre y limon</td>
                                <td>2.50€</td>
                            </tr>
                            <tr>
                                <td>Te Negro con Naranja y Canela en rama</td>
                                <td>2.00€</td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="limonadas" class="table table-striped table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>LIMONADAS</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lima (menta, jengibre, azucar moreno)</td>
                                <td>2.80€</td>
                            </tr>
                            <tr>
                                <td>Mango, frambuesa, limon</td>
                                <td>2.80€</td>
                            </tr>
                            <tr>
                                <td>Maracuja, menta, jengibre, limon</td>
                                <td>2.80€</td>
                            </tr>
                            <tr>
                                <td>Piña, coco y naranja</td>
                                <td>3.00€</td>
                            </tr>
                            <tr>
                                <td>Flor de Sauco, engibre y menta</td>
                                <td>3.00€</td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="parapicar" class="table table-striped table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>PARA PICAR</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Patatas con cheddar y Bacon <img src="lactosa.png"></td>
                                <td>5.50€</td>
                            </tr>
                            <tr>
                                <td>Patatas ali-oli</td>
                                <td>4.00€</td>
                            </tr>
                            <tr>
                                <td>Nachos con cheddar y guacamole <img src="lactosa.png"></td>
                                <td>4.50€</td>
                            </tr>
                            <tr>
                                <td>Huevos rotos Aires (cheddar, mozzarella y chorizo) <img src="lactosa.png"></td>
                                <td>6.00€</td>
                            </tr>
                            <tr>
                                <td>Berenjenas Buenos Aires (Vegan)</td>
                                <td>3.50€</td>
                            </tr>
                            <tr>
                                <td>Conejo del abuelo (tapa)</td>
                                <td>4.00€</td>
                            </tr>
                            <tr>
                                <td>Queso a la plancha con tomates secos <img src="lactosa.png"></td>
                                <td>4.00€</td>
                            </tr>
                            <tr>
                                <td>Empanadas argentinas</td>
                                <td>1.50€</td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="hamburguesas" class="table table-striped table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>HAMBURGUESAS Y SANDWICHES</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>de Jamon Serrano, mozarella y tomate <img src="lactosa.png"> <img src="gluten.png"></td>
                                <td>5.50€</td>
                            </tr>
                            <tr>
                                <td>de atún, queso, tomate y mayonesa <img src="lactosa.png"> <img src="gluten.png"></td>
                                <td>5.50€</td>
                            </tr>
                            <tr>
                                <td>de queso brie, canonigos, nueces y tomate <img src="lactosa.png"> <img src="nueces.png"> <img src="gluten.png"></td>
                                <td>4.50€</td>
                            </tr>
                            <tr>
                                <td>de salmón ahumado, queso crema, tomates y canonigos <img src="pescado.png"> <img src="gluten.png"></td>
                                <td>5.00€</td>
                            </tr>
                            <tr>
                                <td>de verduras asadas, tomate y humus de pimientos (vegan) <img src="gluten.png"></td>
                                <td>5.00€</td>
                            </tr>
                            <tr>
                                <td>Chesse Burger (200grs carne vacuna Angus) <img src="lactosa.png"> <img src="gluten.png"></td>
                                <td>6.90€</td>
                            </tr>
                            <tr>
                                <td>Hamburguesa La Negra (Angus 200grs, queso plancha, bacon, cebolla, pimientos, tomate y guacamole en pan integral) <img src="lactosa.png"> <img src="gluten.png"></td>
                                <td>10.00€</td>
                            </tr>
                            <tr>
                                <td>Aires Burger (200grs Angus, queso brie, canonigos, tomate, bacon y cebolla) <img src="lactosa.png"> <img src="gluten.png"></td>
                                <td>8.90€</td>
                            </tr>
                            <tr>
                                <td>Lomito bonaerense (carne de ternera en sandwich con queso, jamon york, huevo y tomate) <img src="lactosa.png"> <img src="gluten.png"> <img src="huevos.png"></td>
                                <td>8.50€</td>
                            </tr>
                            <tr>
                                <td>Hamburguesa 7 pecados (200grs Angus, queso gorgonzola, huevo, guacamole, bacon,
                                    tomate, canonigos) <img src="lactosa.png"> <img src="gluten.png"> <img src="huevos.png"></td>
                                <td>9.50€</td>
                            </tr>
                            <tr>
                                <td>Hamburguesa La Mari (Angus 200grs, huevo, queso cheddar, bacon, cebolla y baño de
                                    queso cheddar por encima) <img src="lactosa.png"> <img src="gluten.png"> <img src="huevos.png"></td>
                                <td>12.00€</td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="ensaladas" class="table table-striped table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>ENSALADAS</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Con verduras asadas (Vegan)</td>
                                <td>5.90€</td>
                            </tr>
                            <tr>
                                <td>Manchego, aceitunas, pimientos y nueces <img src="lactosa.png"> <img src="nueces.png"></td>
                                <td>6.90€</td>
                            </tr>
                            <tr>
                                <td>Jamon Serrano, Tomates secos, parmesano <img src="lactosa.png"></td>
                                <td>6.90€</td>
                            </tr>
                            <tr>
                                <td>Salmon, nueces, aguacate, queso <img src="lactosa.png"> <img src="pescado.png"> <img src="nueces.png"></td>
                                <td>7.50€</td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="cocktail" class="table table-striped table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>COCKTAILS / COMBINADOS</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Gin Tonic Bombay</td>
                                <td>6.50€</td>
                            </tr>
                            <tr>
                                <td>Gin Tonic London 3</td>
                                <td>7.80€</td>
                            </tr>
                            <tr>
                                <td>Gin Mare</td>
                                <td>7.50€</td>
                            </tr>
                            <tr>
                                <td>Mojito</td>
                                <td>5.00€</td>
                            </tr>
                            <tr>
                                <td>Caipirinha</td>
                                <td>5.00€</td>
                            </tr>
                            <tr>
                                <td>Cuba Libre</td>
                                <td>5.00€</td>
                            </tr>
                            <tr>
                                <td>Piña Colada</td>
                                <td>5.00€</td>
                            </tr>
                            <tr>
                                <td>Margarita</td>
                                <td>5.00€</td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="desayunos" class="table table-striped table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>DESAYUNOS</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tostada clásica (aceite o manteca-mermelada o tomate) <img src="gluten.png"></td>
                                <td>1.20€</td>
                            </tr>
                            <tr>
                                <td>PROMO media tostada clásica + cafe</td>
                                <td>2.00€</td>
                            </tr>
                            <tr>
                                <td>PROMO media tostada clásica + cafe + zumo exprimido</td>
                                <td>2.50€</td>
                            </tr>
                            <tr>
                                <td>PROMO huevos + cafe + zumo + pan</td>
                                <td>3.50€</td>
                            </tr>
                            <tr>
                                <td>Ingredientes extras</td>
                                <td>0.30€</td>
                            </tr>
                            <tr>
                                <td>Aguacate extra</td>
                                <td>0.80€</td>
                            </tr>
                            <tr>
                                <td>Atún extra</td>
                                <td>0.80€</td>
                            </tr>
                            <tr>
                                <td>Salmon extra</td>
                                <td>1.20€</td>
                            </tr>
                            <tr>
                                <td>Bocata con café o caña</td>
                                <td>5.00€</td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="smothies" class="table table-striped table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>SMOTHIES / GRANIZADOS</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fresa <img src="lactosa.png"></td>
                                <td>3.00€/2.50€</td>
                            </tr>
                            <tr>
                                <td>Piña <img src="lactosa.png"></td>
                                <td>3.00€/2.50€</td>
                            </tr>
                            <tr>
                                <td>Mango <img src="lactosa.png"></td>
                                <td>3.00€/2.50€</td>
                            </tr>
                            <tr>
                                <td>Maracuya <img src="lactosa.png"></td>
                                <td>3.00€/2.50€</td>
                            </tr>
                            <tr>
                                <td>Platano <img src="lactosa.png"></td>
                                <td>3.00€/2.50€</td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="bebidas" class="table table-striped table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>BEBIDAS</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Agua 500ml</td>
                                <td>1.20€</td>
                            </tr>
                            <tr>
                                <td>Agua con gas 330ml</td>
                                <td>1.60€</td>
                            </tr>
                            <tr>
                                <td>Zumo exprimido</td>
                                <td>1.70€</td>
                            </tr>
                            <tr>
                                <td>Coca cola 350ml</td>
                                <td>2.00€</td>
                            </tr>
                            <tr>
                                <td>Fanta 350ml</td>
                                <td>2.00€</td>
                            </tr>
                            <tr>
                                <td>Agua Tonica</td>
                                <td>1.80€</td>
                            </tr>
                            <tr>
                                <td>Agua Tonica saborizadas</td>
                                <td>2.00€</td>
                            </tr>
                            <tr>
                                <td>Zumos 200ml</td>
                                <td>1.30€</td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="cervezas" class="table table-striped table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>CERVEZAS</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Complot</td>
                                <td>3.00€</td>
                            </tr>
                            <tr>
                                <td>Bock Damm</td>
                                <td>2.50€</td>
                            </tr>
                            <tr>
                                <td>0,0</td>
                                <td>2.00€</td>
                            </tr>
                            <tr>
                                <td>Estrella Levante 1,3</td>
                                <td>1.80€</td>
                            </tr>
                            <tr>
                                <td>Voll Damm</td>
                                <td>2.50€</td>
                            </tr>
                            <tr>
                                <td>Pabst blue</td>
                                <td>2.50€</td>
                            </tr>
                            <tr>
                                <td>Verna</td>
                                <td>2.00€</td>
                            </tr>
                            <tr>
                                <td>Jarra Estrella barril</td>
                                <td>1.80€</td>
                            </tr>
                            <tr>
                                <td>Caña Pequeña</td>
                                <td>1.50€</td>
                            </tr>
                            <tr>
                                <td>Tanque</td>
                                <td>2.80€</td>
                            </tr>
                            <tr>
                                <td>Daura singluten</td>
                                <td>2.00€</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <div id="mobile-control">
        <a class="mobile-button" href="https://www.instagram.com/airesburgerbar/" target="blank">
            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
        </a>
        <a class="mobile-button" href="tel:34865886914">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" class="svg-inline--fa fa-phone-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path></svg>
        </a>
        <a class="mobile-button" href="https://api.whatsapp.com/send?phone=34622924203&text=Hola%20Aires%20Burger%20Bar">
        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" class="svg-inline--fa fa-whatsapp fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg>
        </a>
        <a class="mobile-button" id="toggle">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
        </a>
    </div>
    <script src=""></script>
</body>
</html>