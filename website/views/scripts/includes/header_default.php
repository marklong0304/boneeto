<!-- header -->
<?php $uri = $_SERVER[REQUEST_URI]; ?>
    <div class="row">
        <div class="medium-4 column text-left logo"><a href=""><img src="/website/static/default/img/logo.png"></a></div>
        <div class="medium-8 column text-right">
            <div class="top-bar-section">
                <ul class="bonetto-menu-top desktop">
                    <li class="<?php if($uri=="/susu-bubuk"||$uri=="/susu-cair")echo "active"; ?>">
                        <a data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" data-options="is_hover:true">Produk</a>
                        <ul id="drop1" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
                            <li style="text-align:center;"><a href="susu-bubuk"><img src="/website/static/default/img/susububukmenu.png"><br>SUSU BUBUK</a></li>
                            <li style="text-align:center;"><a href="susu-cair"><img src="/website/static/default/img/susucairmenu.png"><br>SUSU CAIR</a></li>
                        </ul>
                    </li>
                    <li><a href="">Promo</a></li>
                    <li><a href="">B-Friends</a></li>
                    <li><a href="">Kontak</a></li>
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
                </ul>
            </div>
        </div>
    </div>
    <?php if($_SERVER[REQUEST_URI]=="/susu-bubuk"){ ?>
    <div class="row" style="height:0px !important;">
        <div class="medium-12 column text-right submenususububuk">
            <ul class="submenu">
            <li class="submenucoklat"><img src="/website/static/default/img/submenucoklat.png"><br>Chocolate</li>  
            <li class="submenuvanila"><img src="/website/static/default/img/submenuvanila.png"><br>Vanila</li> 
            <li class="submenuhoney"><img src="/website/static/default/img/submenuhoney.png"><br>Honey</li>    
            <li class="submenuinstant"><img src="/website/static/default/img/submenuhoney.png"><br>Instant</li>    
            </ul>
        </div>
     </div> 
    <?php }elseif($_SERVER[REQUEST_URI]=="/susu-cair"){?>
    <div class="row" style="height:0px !important;">
        <div class="medium-12 column text-right submenususucair">
            <ul class="submenu">
            <li class="submenucoklat"><img src="/website/static/default/img/submenucoklatcair.png"><br>Choco<br>Choc</li>  
            <li class="submenuvanila"><img src="/website/static/default/img/submenuvanilacair.png"><br>Vanila<br>Twister</li>  
            <li class="submenustrawberry"><img src="/website/static/default/img/submenustrawberrycair.png"><br>Strawberry</li> 
            <li class="submenuchocoberry"><img src="/website/static/default/img/submenuchocoberrycair.png"><br>Choco<br><span class="color-berry">Berry</span></li>    
            </ul>
            
        </div>
     </div> 
    <?php } ?>
<!-- end header -->