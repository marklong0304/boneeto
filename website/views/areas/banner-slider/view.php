
<style type="text/css">
	.bonetto-orbit ul li a img{
		min-height: 345px;
	}
</style>
	<?php if($this->editmode) { ?>
	    <div class="alert alert-info" style="height: 75px">
	        <div class="col-xs-6">
	            How many slides you want to show?
	
	            <?php
	                // prepare the store
	                $selectStore = [];
	                for($i=2; $i<30; $i++) {
	                    $selectStore[] = [$i, $i];
	                }
	            ?>
	            <?php echo $this->select("slides",[
	                "store" => $selectStore,
	                "reload" => true
	            ]); ?>
	        </div>
	    </div>
	<?php } ?>

<div class="row push-top" style="padding-bottom:20px;">
    <div class="large-12 column text-center">
	    <ul class="bonetto-orbit" data-orbit data-options="slide_number: false;orbit-timer:false;">
	    	<?php 
	    		$id = "banner-slider-".uniqid();
	    		$slides = 2;
				if(!$this->select("slides")->isEmpty()){
			        $slides = (int) $this->select("slides")->getData();
			    }
			    for($n=1;$n<=$slides;$n++){
	    	 ?>
	        <li>
	        	<?php //if($this->editmode){ ?>
	            <a href="">
	            	<?php echo $this->image("image_".$n, ["thumbnail" => "bannerslider", "dropClass" => $id . "-" . $n, "title" => "Image Size 1000x346"]);?>
	            	<!-- <img src="/website/static/default/img/disneylandbanner.png" alt="slide 1" /> -->
	            </a>
	            <?php //} ?>
	        </li> 
	        <?php } ?>
	        <!-- <li class="active"> 
	            <img src="/website/static/default/img/bfriendslidery.png" alt="slide 1" /> 
	        </li> 
	        <li> 
	            <img src="/website/static/default/img/bfriendslider.png" alt="slide 1" /> 
	        </li>  -->
	    </ul>
    </div>
</div>