<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Boneeto - Tumbuh Tinggi Emang Seru</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/foundation.css" />
     <link rel="stylesheet" href="<?= base_url(); ?>assets/css/normalize.css" />
    <script src="<?= base_url(); ?>assets/js/vendor/modernizr.js"></script>
    <script src="<?= base_url(); ?>assets/js/vendor/jquery.js"></script>
	<script src="<?= base_url(); ?>assets/js/foundation/foundation.js"></script>
         <script src="https://apis.google.com/js/platform.js" async defer>
    </script>

     <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slicknav.css" />    
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/extra.css?<?= time();?>"/>
		<link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/logo.png" />
		<script src="<?= base_url(); ?>assets/js/jquery.slicknav.js"></script>
       
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61372384-1', 'auto');
  ga('send', 'pageview');

</script>
  
  
</head>

<body id="promo">
	<div id="fb-root"></div>
	<script>
  window.fbAsyncInit = function() {
    FB.init({
    	<?php
	if ($_SERVER['SERVER_NAME'] == 'localhost')
{ ?>
	appId      : '1376010926059566', //for offline
	<?php } else { ?>
	appId      : '1376007122726613', //for online
	<?php } ?>
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<div class="wrapper" style="margin: 0 auto;">
 <div class="row header">
 	<div class="medium-4 column text-left logo"><a href="<?= site_url('/'); ?>"><img src="<?= base_url(); ?>assets/img/logo.png"></a></div>
 	<div class="medium-8 column text-right">
 		<section class="top-bar-section">
 		<ul class="bonetto-menu-top desktop">
 		<li>
 			<a data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" data-options="is_hover:true">Produk</a>
<ul id="drop1" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
  <li style="text-align:center;"><a href="<?= site_url('powder'); ?>"><img src="<?= base_url(); ?>assets/img/susububukmenu.png"><br>SUSU BUBUK</a></li>
  <li style="text-align:center;"><a href="<?= site_url('uht'); ?>"><img src="<?= base_url(); ?>assets/img/susucairmenu.png"><br>SUSU CAIR</a></li>
</ul>
 			</li>
 		<li class="active"><a href="<?= site_url('promodetil/4'); ?>">Promo</a></li>
 		<li><a href="<?= site_url('bfriends'); ?>">B-Friends</a></li>
 		<li><a href="<?= site_url('contact'); ?>">Kontak</a></li>
 		</ul>
 		
 		<ul id="menu">
	<li>Produk
        <ul>
            <li><a href="<?= site_url('powder'); ?>">Susu Bubuk</a></li>
            <li><a href="<?= site_url('uht'); ?>">Susu Cair</a></li>
        </ul>
    </li>
	<li><a href="<?= site_url('promodetil/4'); ?>">Promo</a></li>
 		<li><a href="<?= site_url('bfriends'); ?>">B-Friends</a></li>
 		<li><a href="<?= site_url('contact'); ?>">Kontak</a></li>
</ul>
 		
 	
 	</section>
 	</div>
 </div>
 
 
 <!--
 <div class="row push-top2">
 	<div class="large-12 column text-left promo-big push-top2">
 	<span class="promo-back-button font-PoetsenOne size-16 color-kuning text-shadow bgtitle"><a href="<?= site_url('promodetil/4'); ?>" class="color-kuning">Lihat promo lainnya</a></span>
	</div>
 </div>
 -->
 <?php foreach($promodetil_data->result() AS $promodetil): ?>
 <div class="row push-top">
 	<div class="large-12 column text-left  push-top2">
 	<span class="font-PoetsenOne size-45 color-kuning text-shadow"><?= $promodetil->judul_promo; ?></span>
	</div>
 </div> 
 
 <div class="row">
 	<div class="large-12 column text-left">
 <ul class="socialicon">
 	<a href="javascript:;" onClick="shareboneeto();" ><li class="fbicon"></li></a>
 	<a href="https://plus.google.com/share?url=http://bit.ly/1Isexca" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
<li class="googleicon"></li></a>
 	<a href="javascript:;" onClick="
							  window.open(
		 					'https://twitter.com/intent/tweet?url=http://bit.ly/1MGbq6I&text=Yuk menangkan liburan ke Disneyland Jepang & temui langsung tokoh Disney favorite kamu!','twitter-share-dialog','width=626,height=436'); return false;"><li class="twittericon"></li></a>
 	<a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site http://bit.ly/1HmSeo4"
 title="Share by Email"><li class="emailicon"></li></a>
	</ul> 	
	</div>
 </div> 
 
 <div class="row push-top2">
 	<div class="medium-6 column text-left">
 <img src="<?= base_url(); ?><?= $promodetil->image; ?>">
	</div>
	
	<div class="medium-6 column text-left descpromo">
 	
 	<?= $promodetil->desc_promo; ?>
 	
	</div>
	
 </div> 
 
 <?php endforeach; ?>
 
 
 
 
 


<div class="footer">
	<div class="row">
	<div class="medium-6 column text-left">
	<ul>
		<li>&copy; 2014 Boneeto Indonesia. All rights reserved.</li>
	</ul>
	</div>
	<div class="medium-6 column text-right">
	<ul>
		<li><a href="">Privacy Policy</a></li>
		<li><a href="">Terms of Use</a></li>
		<li><a href="<?= site_url('contact'); ?>">Contact Us</a></li>
	</ul>
	</div>
	</div>
</div>
 
 
</div>

  <script src="<?= base_url(); ?>assets/js/foundation/foundation.dropdown.js"></script>
  <script src="<?= base_url(); ?>assets/js/foundation/foundation.orbit.js"></script>
<script>
   $(document).foundation({
  dropdown: {
    // specify the class used for active dropdowns
    active_class: 'opssen'
  }
});

    
  </script>
	<script>
	function shareboneeto() {
		FB.ui(
		{
				method: 'feed',
				name: 'Anmum - Boneeto - <?= $promodetil->judul_promo; ?>',
				link: 'http://bit.ly/1CeSXmj',
			
				picture: '<?= base_url(); ?><?= $promodetil->thumb; ?>',
				description: 'Yuk main di tempat yang paling bahagia di dunia dan temui langsung tokoh Disney favorite kamu! Foto serunya tumbuh tinggimu dan menangkan liburan gratis ke Disneyland Jepang!'
				},
				function(response) {
					if (response && response.post_id) {
						ga('send', 'event', 'Button', 'ShareBoneeto', 'Facebook');
						return false;
					}
					else
					{
						ga('send', 'event', 'Button', 'ShareBoneeto', 'Facebook');
						return false;
					}
				}
			);
		}
	</script>
	<script>
	$(function(){
		$('#menu').slicknav();
	});
</script>  
</body>

</html>