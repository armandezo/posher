<?php
session_start();
if ($_SESSION['acceso'] <> true) {
    header("Location: ./auth/auth");
}

header('Content-Type: text/html; charset=UTF-8');

// funciones
require '../backend/Medoo/vendor/autoload.php';
require '../backend/api/routes/string/string.php';
require '../backend/api/routes/function/function.php';
require '../backend/api/routes/config/config.php';
require '../backend/api/routes/conexion/conexion.php';
require '../backend/api/routes/tables/tables.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php
        include '../frontend/include/head.php';
        ?>
    </head>

    <body>

        <?php
        include '../frontend/include/navbar.php';
        ?>

        <header class="header header--mobile" data-sticky="true">
            <div class="header__top">
                <div class="header__left">
                    <p>Bienvenido a tu tienda online favorita!</p>
                </div>
                <div class="header__right">
                    <ul class="navigation__extra">
                        <li><a href="#">Vender</a></li>
                        <li><a href="#">Tus Pedidos</a></li>
                        <li>
                            <div class="ps-dropdown"><a href="#">Tipo de Moneda</a>
                                <ul class="ps-dropdown-menu">
                                    <li><a href="#">Us Dollar</a></li>
                                    <li><a href="#">Pen Soles</a></li>
                                    <li><a href="#">Euro</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="ps-dropdown language"><a href="#"><img src="img/flag/en.png" alt="">English</a>
                                <ul class="ps-dropdown-menu">
                                    <li><a href="#"><img src="img/flag/germany.png" alt=""> Germany</a></li>
                                    <li><a href="#"><img src="img/flag/fr.png" alt=""> France</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navigation--mobile">
                <div class="navigation__left"><a class="ps-logo" href="index.html"><img src="img/logo_light.png" alt=""></a></div>
                <div class="navigation__right">
                    <div class="header__actions">
                        <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>0</i></span></a>
                            <div class="ps-cart__content">
                                <div class="ps-cart__items">
                                    <div class="ps-product--cart-mobile">
                                        <div class="ps-product__thumbnail"><a href="#"><img src="img/products/clothing/7.jpg" alt=""></a></div>
                                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                        </div>
                                    </div>
                                    <div class="ps-product--cart-mobile">
                                        <div class="ps-product__thumbnail"><a href="#"><img src="img/products/clothing/5.jpg" alt=""></a></div>
                                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-cart__footer">
                                    <h3>Sub Total:<strong>$59.99</strong></h3>
                                    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                                </div>
                            </div>
                        </div>
                        <div class="ps-block--user-header">
                            <div class="ps-block__left"><i class="icon-user"></i></div>
                            <div class="ps-block__right"><a href="my-account.html">Login</a><a href="my-account.html">Register</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-search--mobile">
                <form class="ps-form--search-mobile" action="index.html" method="get">
                    <div class="form-group--nest">
                        <input class="form-control" type="text" placeholder="Search something...">
                        <button><i class="icon-magnifier"></i></button>
                    </div>
                </form>
            </div>
        </header>
        <div class="ps-panel--sidebar" id="cart-mobile">
            <div class="ps-panel__header">
                <h3>Shopping Cart</h3>
            </div>
            <div class="navigation__content">
                <div class="ps-cart--mobile">
                    <div class="ps-cart__content">
                        <div class="ps-product--cart-mobile">
                            <div class="ps-product__thumbnail"><a href="#"><img src="img/products/clothing/7.jpg" alt=""></a></div>
                            <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                            </div>
                        </div>
                    </div>
                    <div class="ps-cart__footer">
                        <h3>Sub Total:<strong>$59.99</strong></h3>
                        <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-panel--sidebar" id="navigation-mobile">
            <div class="ps-panel__header">
                <h3>Categories</h3>
            </div>
            <div class="ps-panel__content">
                <ul class="menu--mobile">
                    <li class="current-menu-item "><a href="#">Hot Promotions</a>
                    </li>
                    <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#">Consumer Electronic</a><span class="sub-toggle"></span>
                        <div class="mega-menu">
                            <div class="mega-menu__column">
                                <h4>Electronic<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list">
                                    <li class="current-menu-item "><a href="#">Home Audio &amp; Theathers</a>
                                    </li>
                                    <li class="current-menu-item "><a href="#">TV &amp; Videos</a>
                                    </li>
                                    <li class="current-menu-item "><a href="#">Camera, Photos &amp; Videos</a>
                                    </li>
                                    <li class="current-menu-item "><a href="#">Cellphones &amp; Accessories</a>
                                    </li>
                                    <li class="current-menu-item "><a href="#">Headphones</a>
                                    </li>
                                    <li class="current-menu-item "><a href="#">Videosgames</a>
                                    </li>
                                    <li class="current-menu-item "><a href="#">Wireless Speakers</a>
                                    </li>
                                    <li class="current-menu-item "><a href="#">Office Electronic</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list">
                                    <li class="current-menu-item "><a href="#">Digital Cables</a>
                                    </li>
                                    <li class="current-menu-item "><a href="#">Audio &amp; Video Cables</a>
                                    </li>
                                    <li class="current-menu-item "><a href="#">Batteries</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="current-menu-item "><a href="#">Clothing &amp; Apparel</a>
                    </li>
                    <li class="current-menu-item "><a href="#">Home, Garden &amp; Kitchen</a>
                    </li>
                    <li class="current-menu-item "><a href="#">Health &amp; Beauty</a>
                    </li>
                    <li class="current-menu-item "><a href="#">Yewelry &amp; Watches</a>
                    </li>
                    <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#">Computer &amp; Technology</a><span class="sub-toggle"></span>
                        <div class="mega-menu">
                            <div class="mega-menu__column">
                                <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list">
                                    <li class="current-menu-item "><a href="#">Computer &amp; Tablets</a>
                                    </li>
                                    <li class="current-menu-item "><a href="#">Laptop</a>
                                    </li>
                                    <li class="current-menu-item "><a href="#">Monitors</a>
                                    </li>
                                    <li class="current-menu-item "><a href="#">Networking</a>
                                    </li>
                                    <li class="current-menu-item "><a href="#">Drive &amp; Storages</a>
                                    </li>
                                    <li class="current-menu-item "><a href="#">Computer Components</a>
                                    </li>
                                    <li class="current-menu-item "><a href="#">Security &amp; Protection</a>
                                    </li>
                                    <li class="current-menu-item "><a href="#">Gaming Laptop</a>
                                    </li>
                                    <li class="current-menu-item "><a href="#">Accessories</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="current-menu-item "><a href="#">Babies &amp; Moms</a>
                    </li>
                    <li class="current-menu-item "><a href="#">Sport &amp; Outdoor</a>
                    </li>
                    <li class="current-menu-item "><a href="#">Phones &amp; Accessories</a>
                    </li>
                    <li class="current-menu-item "><a href="#">Books &amp; Office</a>
                    </li>
                    <li class="current-menu-item "><a href="#">Cars &amp; Motocycles</a>
                    </li>
                    <li class="current-menu-item "><a href="#">Home Improments</a>
                    </li>
                    <li class="current-menu-item "><a href="#">Vouchers &amp; Services</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navigation--list">
            <div class="navigation__content"><a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> Menu</span></a><a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> Categories</span></a><a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> Search</span></a><a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="icon-bag2"></i><span> Cart</span></a></div>
        </div>
        <div class="ps-panel--sidebar" id="search-sidebar">
            <div class="ps-panel__header">
                <form class="ps-form--search-mobile" action="index.html" method="get">
                    <div class="form-group--nest">
                        <input class="form-control" type="text" placeholder="Search something...">
                        <button><i class="icon-magnifier"></i></button>
                    </div>
                </form>
            </div>
            <div class="navigation__content"></div>
        </div>
        <div class="ps-panel--sidebar" id="menu-mobile">
            <div class="ps-panel__header">
                <h3>Menu</h3>
            </div>
            <div class="ps-panel__content">
                <ul class="menu--mobile">
                    <li class="menu-item-has-children"><a href="index.html">Home</a><span class="sub-toggle"></span>
                        <ul class="sub-menu">
                            <li class="current-menu-item "><a href="index.html">Marketplace Full Width</a>
                            </li>
                            <li class="current-menu-item "><a href="homepage-2.html">Home Auto Parts</a>
                            </li>
                            <li class="current-menu-item "><a href="homepage-10.html">Home Technology</a>
                            </li>
                            <li class="current-menu-item "><a href="homepage-9.html">Home Organic</a>
                            </li>
                            <li class="current-menu-item "><a href="homepage-3.html">Home Marketplace V1</a>
                            </li>
                            <li class="current-menu-item "><a href="homepage-4.html">Home Marketplace V2</a>
                            </li>
                            <li class="current-menu-item "><a href="homepage-5.html">Home Marketplace V3</a>
                            </li>
                            <li class="current-menu-item "><a href="homepage-6.html">Home Marketplace V4</a>
                            </li>
                            <li class="current-menu-item "><a href="homepage-7.html">Home Electronic</a>
                            </li>
                            <li class="current-menu-item "><a href="homepage-8.html">Home Furniture</a>
                            </li>
                            <li class="current-menu-item "><a href="homepage-kids.html">Home Kids</a>
                            </li>
                            <li class="current-menu-item "><a href="homepage-photo-and-video.html">Home photo and picture</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
                        <div class="mega-menu">
                            <div class="mega-menu__column">
                                <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list">
                                    <li class="current-menu-item "><a href="shop-default.html">Shop Default</a>
                                    </li>
                                    <li class="current-menu-item "><a href="shop-default.html">Shop Fullwidth</a>
                                    </li>
                                    <li class="current-menu-item "><a href="shop-categories.html">Shop Categories</a>
                                    </li>
                                    <li class="current-menu-item "><a href="shop-sidebar.html">Shop Sidebar</a>
                                    </li>
                                    <li class="current-menu-item "><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                                    </li>
                                    <li class="current-menu-item "><a href="shop-carousel.html">Shop Carousel</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Product Layout<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list">
                                    <li class="current-menu-item "><a href="product-default.html">Default</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-extend.html">Extended</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-full-content.html">Full Content</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-box.html">Boxed</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-sidebar.html">Sidebar</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-default.html">Fullwidth</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Product Types<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list">
                                    <li class="current-menu-item "><a href="product-default.html">Simple</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-default.html">Color Swatches</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-image-swatches.html">Images Swatches</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-countdown.html">Countdown</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-multi-vendor.html">Multi-Vendor</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-instagram.html">Instagram</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-affiliate.html">Affiliate</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-on-sale.html">On sale</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-video.html">Video Featured</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-groupped.html">Grouped</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-out-stock.html">Out Of Stock</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Woo Pages<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list">
                                    <li class="current-menu-item "><a href="shopping-cart.html">Shopping Cart</a>
                                    </li>
                                    <li class="current-menu-item "><a href="checkout.html">Checkout</a>
                                    </li>
                                    <li class="current-menu-item "><a href="whishlist.html">Whishlist</a>
                                    </li>
                                    <li class="current-menu-item "><a href="compare.html">Compare</a>
                                    </li>
                                    <li class="current-menu-item "><a href="order-tracking.html">Order Tracking</a>
                                    </li>
                                    <li class="current-menu-item "><a href="my-account.html">My Account</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a href="">Pages</a><span class="sub-toggle"></span>
                        <div class="mega-menu">
                            <div class="mega-menu__column">
                                <h4>Basic Page<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list">
                                    <li class="current-menu-item "><a href="about-us.html">About Us</a>
                                    </li>
                                    <li class="current-menu-item "><a href="contact-us.html">Contact</a>
                                    </li>
                                    <li class="current-menu-item "><a href="faqs.html">Faqs</a>
                                    </li>
                                    <li class="current-menu-item "><a href="comming-soon.html">Comming Soon</a>
                                    </li>
                                    <li class="current-menu-item "><a href="404-page.html">404 Page</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list">
                                    <li class="current-menu-item "><a href="become-a-vendor.html">Become a Vendor</a>
                                    </li>
                                    <li class="current-menu-item "><a href="vendor-store.html">Vendor Store</a>
                                    </li>
                                    <li class="current-menu-item "><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                                    </li>
                                    <li class="current-menu-item "><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a href="">Blogs</a><span class="sub-toggle"></span>
                        <div class="mega-menu">
                            <div class="mega-menu__column">
                                <h4>Blog Layout<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list">
                                    <li class="current-menu-item "><a href="blog-grid.html">Grid</a>
                                    </li>
                                    <li class="current-menu-item "><a href="blog-list.html">Listing</a>
                                    </li>
                                    <li class="current-menu-item "><a href="blog-small-thumb.html">Small Thumb</a>
                                    </li>
                                    <li class="current-menu-item "><a href="blog-left-sidebar.html">Left Sidebar</a>
                                    </li>
                                    <li class="current-menu-item "><a href="blog-right-sidebar.html">Right Sidebar</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Single Blog<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list">
                                    <li class="current-menu-item "><a href="blog-detail.html">Single 1</a>
                                    </li>
                                    <li class="current-menu-item "><a href="blog-detail-2.html">Single 2</a>
                                    </li>
                                    <li class="current-menu-item "><a href="blog-detail-3.html">Single 3</a>
                                    </li>
                                    <li class="current-menu-item "><a href="blog-detail-4.html">Single 4</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <main class="ps-page--my-account">
            <div class="ps-breadcrumb">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="micuenta">Inicio</a></li>
                        <li>Información de Usuario</li>
                    </ul>
                </div>
            </div>
            <section class="ps-section--account">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="ps-section__left">
                                <aside class="ps-widget--account-dashboard">
                                    <div class="ps-widget__header"><img src="img/users/3.jpg" alt="">
                                        <figure>
                                            <figcaption><?php echo $_SESSION['nom_ape']; ?></figcaption>
                                            <p><a href="#"><?php echo $_SESSION['typename']; ?></a></p>
                                        </figure>
                                    </div>
                                    <div class="ps-widget__content">
                                        <ul>
                                            <li class="active"><a href="#"><i class="icon-user"></i> Información De La Cuenta</a></li>
                                            <li><a href="#"><i class="icon-alarm-ringing"></i> Notificaciones</a></li>
                                            <li><a href="#"><i class="icon-papers"></i> Facturas/Boletas</a></li>
                                            <li><a href="#"><i class="icon-map-marker"></i> Address</a></li>
                                            <li><a href="#"><i class="icon-store"></i> Productos Vistos Recientemente</a></li>
                                            <li><a href="#"><i class="icon-heart"></i> Lista De Deseos</a></li>
                                            <li><a href="#"><i class="icon-power-switch"></i> Cerrar Sesión</a></li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="ps-section__right">
                                <form class="ps-form--account-setting" action="index.html" method="get">
                                    <div class="ps-form__header">
                                        <h3>Información de Usuario</h3>
                                    </div>
                                    <div class="ps-form__content">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Nombre Completo</label>
                                                    <input class="form-control" value="<?php echo $_SESSION['name']; ?>" type="text" placeholder="Nombre Completo" id="nombre" name="nombre">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Apellido Completo</label>
                                                    <input class="form-control" value="<?php echo $_SESSION['lastname']; ?>" type="text" placeholder="Apellido Completo" id="apellido" name="apellido">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Número de Celular</label>
                                                    <input class="form-control" value="<?php echo $_SESSION['phone']; ?>" type="text" placeholder="Número de Celular" id="celular" name="celular">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Correo Electrónico</label>
                                                    <input class="form-control" value="<?php echo $_SESSION['email']; ?>" type="text" placeholder="Correo Electrónico" id="correo" name="correo">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Dirección</label>
                                                    <input class="form-control" value="<?php echo $_SESSION['address']; ?>" type="text" placeholder="Dirección" id="direccion" name="direccion">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Cuenta de Usuario</label>
                                                    <input class="form-control" value="<?php echo $_SESSION['user']; ?>" type="text" placeholder="Cuenta de Usuario" id="usuario" name="usuario">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Contraseña</label>
                                                    <label style="float: right;">
                                                        <input type="checkbox" id="mostrar_contrasena" title="Mostrar Contraseña" style="width: 23px;height: 23px;cursor: pointer;border: 1px solid #f9f9f9;">
                                                    </label>
                                                    <input class="form-control" value="<?php echo desencriptar($_SESSION['password']); ?>" type="password" placeholder="Contraseña" id="clave" name="clave">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Tipo de Usuario</label>
                                                    <select class="form-control">
                                                        <option value="2">Comprador</option>
                                                        <option value="3">Vendedor</option>
                                                        <option value="4">Comprador / Vendedor</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group submit">
                                        <button class="ps-btn" style="color: #ffffff !important;">Actualizar Datos</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="ps-newsletter">
                <div class="ps-container">
                    <form class="ps-form--newsletter" action="do_action" method="post">
                        <div class="row">
                            <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <div class="ps-form__left">
                                    <h3>Newsletter</h3>
                                    <p>Subcribe to get information about products and coupons</p>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <div class="ps-form__right">
                                    <div class="form-group--nest">
                                        <input class="form-control" type="email" placeholder="Email address">
                                        <button class="ps-btn">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <footer class="ps-footer ps-footer--2">
            <div class="container">
                <div class="ps-footer__content">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <aside class="widget widget_footer">
                                <h4 class="widget-title">Quick links</h4>
                                <ul class="ps-list--link">
                                    <li><a href="policy.html">Policy</a></li>
                                    <li><a href="term-condition.html">Term & Condition</a></li>
                                    <li><a href="shipping.html">Shipping</a></li>
                                    <li><a href="return.html">Return</a></li>
                                    <li><a href="faqs.html">FAQs</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                            <aside class="widget widget_footer">
                                <h4 class="widget-title">Company</h4>
                                <ul class="ps-list--link">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="affilate.html">Affilate</a></li>
                                    <li><a href="shipping.html">Career</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <aside class="widget widget_footer">
                                <h4 class="widget-title">Bussiness</h4>
                                <ul class="ps-list--link">
                                    <li><a href="our-press.html">Our Press</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="my-account.html">My account</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 ">
                            <aside class="widget widget_newletters">
                                <h4 class="widget-title">Newsletter</h4>
                                <form class="ps-form--newletter" action="#" method="get">
                                    <div class="form-group--nest">
                                        <input class="form-control" type="text" placeholder="Email Address">
                                        <button class="ps-btn">Subscribe</button>
                                    </div>
                                    <ul class="ps-list--social">
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </form>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="ps-footer__copyright">
                    <p>© 2018 Martfury. All Rights Reserved</p>
                    <p><span>We Using Safe Payment For:</span><a href="#"><img src="img/payment-method/1.jpg" alt=""></a><a href="#"><img src="img/payment-method/2.jpg" alt=""></a><a href="#"><img src="img/payment-method/3.jpg" alt=""></a><a href="#"><img src="img/payment-method/4.jpg" alt=""></a><a href="#"><img src="img/payment-method/5.jpg" alt=""></a></p>
                </div>
            </div>
        </footer>
        <div id="back2top"><i class="pe-7s-angle-up"></i></div>
        <div class="ps-site-overlay"></div>
        <div id="loader-wrapper">
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
            <div class="ps-search__content">
                <form class="ps-form--primary-search" action="do_action" method="post">
                    <input class="form-control" type="text" placeholder="Search for...">
                    <button><i class="aroma-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
        <div class="modal fade" id="product-quickview" tabindex="-1" role="dialog" aria-labelledby="product-quickview" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content"><span class="modal-close" data-dismiss="modal"><i class="icon-cross2"></i></span>
                    <article class="ps-product--detail ps-product--fullwidth ps-product--quickview">
                        <div class="ps-product__header">
                            <div class="ps-product__thumbnail" data-vertical="false">
                                <div class="ps-product__images" data-arrow="true">
                                    <div class="item"><img src="img/products/detail/fullwidth/1.jpg" alt=""></div>
                                    <div class="item"><img src="img/products/detail/fullwidth/2.jpg" alt=""></div>
                                    <div class="item"><img src="img/products/detail/fullwidth/3.jpg" alt=""></div>
                                </div>
                            </div>
                            <div class="ps-product__info">
                                <h1>Marshall Kilburn Portable Wireless Speaker</h1>
                                <div class="ps-product__meta">
                                    <p>Brand:<a href="shop-default.html">Sony</a></p>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>(1 review)</span>
                                    </div>
                                </div>
                                <h4 class="ps-product__price">$36.78 – $56.99</h4>
                                <div class="ps-product__desc">
                                    <p>Sold By:<a href="shop-default.html"><strong> Go Pro</strong></a></p>
                                    <ul class="ps-list--dot">
                                        <li> Unrestrained and portable active stereo speaker</li>
                                        <li> Free from the confines of wires and chords</li>
                                        <li> 20 hours of portable capabilities</li>
                                        <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                        <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                    </ul>
                                </div>
                                <div class="ps-product__shopping"><a class="ps-btn ps-btn--black" href="#">Add to cart</a><a class="ps-btn" href="#">Buy Now</a>
                                    <div class="ps-product__actions"><a href="#"><i class="icon-heart"></i></a><a href="#"><i class="icon-chart-bars"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <?php
        include '../frontend/include/scripts.php';
        ?>

        <script>
            $(document).ready(function () {
                $('#mostrar_contrasena').click(function () {
                    if ($('#mostrar_contrasena').is(':checked')) {
                        $('#clave').attr('type', 'text');
                    } else {
                        $('#clave').attr('type', 'password');
                    }
                });
            });
        </script>

    </body>

</html>