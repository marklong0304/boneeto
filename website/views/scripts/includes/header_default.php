<!-- header -->
<?php $uri = $_SERVER[REQUEST_URI]; ?>
    <div class="row">
        <div class="medium-4 column text-left logo"><a href="../"><img src="/website/static/default/img/logo.png"></a></div>
        <div class="medium-8 column text-right">
            <div class="top-bar-section">
                <ul class="bonetto-menu-top desktop">
                    <li class="<?php if($uri=="/susu-bubuk"||$uri=="/susu-cair")echo "active"; ?>">
                        <a data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" data-options="is_hover:true">Produk</a>
                        <ul id="drop1" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
                            <?php 
                                foreach ($this->menuProduk as $key) {
                                    $menu = $key[nama];
                                    $img = $key[img];
                                    echo '<li style="text-align:center;"><a href="'.$key[link].'"><img 
                                    style="padding-top: 10px;height: 77px;" src="'.$img.'"><br>'.strtoupper($menu).'</a></li>';
                                } ?>
                        </ul>
                    </li>
                    <li><a href="promodetil">Promo</a></li>
                    <li><a href="bfriends">B-Friends</a></li>
                    <li><a href="contact">Kontak</a></li>
                    <li><a href="event">Events</a></li>
                </ul>
                <ul id="menu">
                    <li>Produk
                        <ul>
                            <li><a href="">Susu Bubuk</a></li>
                            <li><a href="">Susu Cair</a></li>
                        </ul>
                    </li>
                    <li><a href="">Promo</a></li>
                    <li><a href="">B-Friends</a></li>
                    <li><a href="">Kontak</a></li>
                    <li><a href="">Events</a></li>
                </ul>
            </div>
        </div>
    </div>
    <span id="external"></span>
<!-- end header -->