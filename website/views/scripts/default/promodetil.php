<style>
a{
	color:white;
}
</style>

 <div class="row push-top">
 	<div class="large-12 column text-left  push-top2">
 	<span class="font-PoetsenOne size-45 color-kuning text-shadow"><?php echo $this->input('title', array("width" => 900))?></span>
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
	
	<?php if($this->editmode) { ?>
	    <div class="alert alert-info" style="height: 75px">
	        <div class="col-xs-6">
	            How many image you want to show?
	
	            <?php
	                // prepare the store
	                $selectStore = [];
	                for($i=1; $i<=10; $i++) {
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
	<?php 
	    		$id = "promo-".uniqid();
	    		$slides = 1;
				if(!$this->select("slides")->isEmpty()){
			        $slides = (int) $this->select("slides")->getData();
			    }
				for($n=1;$n<=$slides ;$n++){
	   ?>
 	<div class="medium-6 column text-left" style="margin-top:20px;">
		<a href="">
	            	<?php echo $this->image("image_".$n, ["thumbnail" => "promo", "width" => 570, "height" => 806, "title" => "Image Size 570x806"]);?>
	            	<!-- <img src="/website/static/default/img/disneylandbanner.png" alt="slide 1" /> -->
	     </a>
	</div>
	<?php }?>

	<div class="medium-6 column text-left descpromo"  style="margin-top:20px;">
 	<h2><?php echo $this->input('mekanisme', array("width" => 900))?></h2>
 	<strong><?php echo $this->wysiwyg('desc-mekanisme', array("width" => 900))?></strong>
	<h2><?php echo $this->input('hadiah', array("width" => 900))?></h2>
 	<strong><?php echo $this->wysiwyg('desc-hadiah', array("width" => 900))?></strong>
	<h2><?php echo $this->input('syarat', array("width" => 900))?></h2>
 	<strong><?php echo $this->wysiwyg('desc-syarat', array("width" => 900))?></strong>
 	
	</div>
	
 </div> 
 
