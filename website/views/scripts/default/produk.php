<!-- start -->
<link href='/website/static/default/css/onepage-scroll.css' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="/website/static/default/js/jquery.onepage-scroll.js"></script>
<style>
    html {
      height: 100%;
    }

    .wrapper {
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
</style>

<style type="text/css">
    .submenu.link{
        float: left;
    } 
    .main.onepage-wrapper {
        margin-top: -83px;
    }
    .titleprodukleft{
        text-align: left;
    }
    .subtitleprodukleft{
        text-align: left;
    }
    .titleprodukright{
        text-align: right;
    }
    .subtitleprodukright{
        text-align: right;
    }
	 .header {
		margin-top : 12px;
		
	}
</style>
<div class="main">
    <?php 
        foreach($this->produk as $key) {
            echo $key[value];
        }
    ?>
</div>
<!-- end -->
<script type="text/javascript">
    $(document).ready(function(){
        $("#external").html(
            '<div class="row" style="height:0px !important;">'+
                '<div class="medium-12 column text-right submenususububuk">'+
                    '<ul class="submenu"> '+
                        '<?php foreach($this->subproduk as $key){
                            echo $key[value];
                        } ?>'+
                    '</ul>'+
                '</div>'+
             '</div> '
            );

        $(".link").click(function(){
          no = $(this).attr("data-target");
          $(".main").moveTo(no);
        });
    });
</script>
