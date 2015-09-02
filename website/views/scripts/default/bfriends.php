<link href='/website/static/default/css/onepage-scroll.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="/website/static/default/js/jquery.onepage-scroll.js"></script>
<style type="text/css">
	.pimcore_area_banner-slider.pimcore_area_content{
	
	    margin-top: -30px;
		padding-top: 113px;
	}
	.main.onepage-wrapper{
		margin-top: -115px;
	}
	/*navigasi nambah event*/
	.medium-8.column.text-right{
	    float: left;
	    width: 100%;
	    margin-left: 310px;
	}
	body {
		background: url("/website/static/default/img/bgheader.jpg") center top repeat-x;
	}
	a{
		color:white;
	}
	 html {
      height: 100%;
    }

    .wrapper {
		background: #00a2ff url("../img/bgheader.jpg") center top repeat-x;	
        height: 100% !important;
        height: 100%;
        margin: 0 auto; 
        overflow: hidden;
    }
    .main {
      float: left;
      width: 100%;
      margin: 0 auto;
    }
	 .header {
		margin-top : 12px;
		
	}
	.footer {
		position:fixed !important;
		bottom:30px;
	}
	@media only screen and (max-width : 40em) {
		.js .slicknav_menu {
		
		margin-top:-60px;
		
	}
		html {
			  margin-top: -55px
		}
		.footer {
			bottom:0;
		}
		.main.onepage-wrapper{
		margin-top: -115px;
		}
		.header {
			margin-top : 0;
		}
		.push-top2 {
			margin-top:20px;
		}
	}
	p{
		color:#00305c;
	}
</style>
<div class="main">
	<section>
	
		<div class="row">
			<!--<div class="small-12 column text-center push-top2 bfriendstop">
				<div class="small-4 column text-right boxshadow push-top2"><img id="calcinmap" src="/website/static/default/img/calcin-bf.png"></div>
				<div class="small-4 column text-center boxshadow"><img id="femurmap" src="/website/static/default/img/femur-bf.png"><img id="dentinamap" src="/website/static/default/img/dentina-bf.png"></div>
				<div class="small-4 column text-left boxshadow push-top2"><img id="lelamap" src="/website/static/default/img/lela-bf.png"></div>
			
			</div>-->
			<div class="small-12 column text-center push-top2 bfriendstop">
				<div class="small-4 column text-right boxshadow push-top2"><?= $this->image("img", array("thumbnail" => "myThumbnail","title"=>"600x400")) ?></div>
				<div class="small-4 column text-center boxshadow"><?= $this->image("img1", array("thumbnail" => "myThumbnail","title"=>"600x400")) ?><?= $this->image("img2", array("thumbnail" => "myThumbnail","title"=>"600x400")) ?></div>
				<div class="small-4 column text-left boxshadow push-top2"><?= $this->image("img3", array("thumbnail" => "myThumbnail","title"=>"600x400")) ?></div>
			
			</div>
		</div>
	</section>
	<section>
		<div class="calcinpage" id="calcinpage" style="background-size:cover !important;">
			<div class="row">
			<!--<div class="medium-5 small-offset-1 column"><img src="/website/static/default/img/calcindetil.png" width="430"></div>--->
			<div class="medium-5 small-offset-1 column"><?= $this->image("image", array("thumbnail" => "myThumbnail","title"=>"600x400")) ?></div>
			<div class="medium-5 column text-right">
				<span class="calcintitle font-PoetsenOne size-80 color-biru text-shadow"><?php echo $this->input('title', array("width" => 600))?></span><br>
				<!--<p class="color-biru">Calcin  adalah gang leader B-Friends yang paling berani, memiliki rasa ingin tahu yang besar, humoris dan selalu ceria. Calcin punya cara seru untuk tumbuh tinggi yaitu dengan main basket dan minum Boneeto. 
		Saat beraktivitas diluar rumah, Calcin sangat suka minum Boneeto rasa coklat.  Nutrisi yang terkandung dalam susu Boneeto membuat tubuhnya berenergi dan daya tahan tubuhnya kuat. Biasanya Calcin minum susu Boneeto setelah main basket bersama Femur. </p>-->
				<?php echo $this->wysiwyg('description', array("width" => 900))?>
				
				</div>
			<div class="medium-1 column">
			</div>
			</div>
		<a href="#" class="go-top" style="display: inline;">Back to top</a>	
		</div>
	</section>	 
	<section>
		<div class="dentinapage" id="dentinapage" style="background-size:cover !important;">
			<div class="row">
			
			<div class="medium-5 small-offset-1 column push-top2">
				<span class="dentinatitle font-PoetsenOne size-80 color-biru text-shadow"><?php echo $this->input('title2', array("width" => 600))?></span><br>
				<!--<p class="color-biru">
					Dentina sangat pintar dan sering membantu Calcin untuk memecahkan masalah. Ia selalu  memperhatikan penampilannya  dan jadi yang paling fashionable di B-Friends. Dentina adalah gadis  ceria yang suka menyemangati teman-temannya. 
					Agar selalu bermain dengan ceria, Dentina suka minum Boneeto rasa strawberry yang mendukung  pertumbuhan tingginya. 
					Dentina juga punya teman perempuan di gang B-Friends yang seru untuk diajak main,
				</p>-->
				<?php echo $this->wysiwyg('description2', array("width" => 900))?>
			</div>
			<!--<div class="medium-5 column"><img src="/website/static/default/img/dentinadetil.png" width="450"></div>-->
			<div class="medium-5 column"><?= $this->image("image2", array("thumbnail" => "myThumbnail","title"=>"600x400")) ?></div>
			<div class="small-1 column">
			</div>
			</div>
			<div class="row">
				<div class="small-11 column text-left"></div>
				<div class="small-1 column"></div>
			</div>
			<a href="#" class="go-top" style="display: inline;">Back to top</a>
		</div>
	</section>	 
	<section>	
		<div class="femurpage" id="femurpage" style="background-size:cover !important;">
			<div class="row">
			<!--<div class="medium-5 small-offset-1 column"><img src="/website/static/default/img/femurdetil.png"></div>-->
			<div class="medium-5 small-offset-1 column"><?= $this->image("image3", array("thumbnail" => "myThumbnail","title"=>"600x400")) ?></div>
			<div class="medium-5 column text-right push-top2">
				<span class="dentinatitle font-PoetsenOne size-80 color-biru text-shadow"><?php echo $this->input('title3', array("width" => 600))?></span><br>
				<!--<p class="color-biru">
					Femur yang paling sporty dan akrab dengan Calcin. Skateboard adalah olahraga seru yang paling disukai Femur.  Saat Femur main skateboard, ia tidak akan memperhatikan hal lain selain papan skateboardnya. Walaupun begitu Femur selalu menolong teman-temannya.Agar lebih bersemangat main skateboard, Femur suka minum Boneeto rasa vanilla yang enak.
					Ketika bermain bersama B-Friends, Femur suka jahil terutama sama Dentina. 
				</p>-->
			<?php echo $this->wysiwyg('description3', array("width" => 900))?>
			
			</div>
			
			<div class="small-1 column">
			</div>
			</div>
		<a href="#" class="go-top" style="display: inline;">Back to top</a>	
		</div>
	</section>	 	
	<section>	
		<div class="lelapage" id="lelapage" style="background-size:cover !important;">
			<div class="row">
			
			<div class="medium-5 column push-top2">
				<span class="lelatitle font-PoetsenOne size-80 color-biru text-shadow"><?php echo $this->input('title4', array("width" => 600))?></span><br>
				<!--<p class="color-biru">
					Lela Tibia sangat suka bermain lompat tali dan berpetualang bersama B-Friends. Sifatnya yang sporty,ramah, dan santai membuat tibia dekat dengan Calcin dan Femur.
		 Setelah main lompat tali, Tibia suka minum Boneeto rasa Chocoberry untuk membuatnya lebih aktif dan  berenergi.
					</p>-->
			<?php echo $this->wysiwyg('description4', array("width" => 900))?>
			
			</div>
			<!--<div class="medium-5 small-offset-1 column"><img src="/website/static/default/img/leladetil.png"></div>-->
			<div class="medium-5 small-offset-1 column"><?= $this->image("image4", array("thumbnail" => "myThumbnail","title"=>"600x400")) ?></div>
			<div class="small-1 column">
			</div>
			</div>
			<div class="row">
				<div class="small-11 column text-left"></div>
				<div class="small-1 column"></div>
			</div>
		<a href="#" class="go-top" style="display: inline;">Back to top</a>	
		</div>
</section>	 
</div>

<script>
    $(document).ready(function(){
        $(".main").onepage_scroll({
        sectionContainer: "section",
        responsiveFallback: false,
        loop: false,
        pagination : false
        });
    });
    
</script>