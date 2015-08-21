<?php
 @ include_once("function.youtube.php");
    /**
     * ./includes/page-home.php
     * Created by Falmesino Abdul Hamid(http://be.net/falmesino)
     */
	@ include_once("function.youtube.php");
?>

<section class="gallery pt32 pb32">
    <div class="container">
        <div class="row mb32 section-title">
            <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
                <h2>Butuh Inspirasi? Cek Video yang sudah dikirim oleh teman-temanmu!</h2>
                <p>Sebuah paragraf singkat, padat dan jelas untuk memperkuat headline di atas.</p>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
		 <div class="row mb32">
        <?php foreach($this->videos as $v) { 
		?>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="#" class="gallery-item" data-title="Video 1" data-views="1566123" data-likes="1566123" data-url="<?php echo youtube_get_id( $v[0]); ?>">
                    <img src="<?php echo youtube_get_thumbnail( $v[0]); ?>" alt="Title" class="img-responsive">
                    <div class="gallery-item-meta">
                        <h4> <?php echo $v[1] ; ?></h4>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                               <!-- <p><i class="fa fa-eye"></i> 1,566,123</p>-->
                            </div><!--/ .col-xs-12 -->
                            <div class="col-xs-12 col-sm-6 text-right">
                                <!--<p><i class="fa fa-thumbs-o-up"></i> 1,566,123</p>-->
                            </div><!--/ .col-xs-12 -->
                        </div>
                    </div><!--/ .gallery-item-meta -->
                </a>
            </div><!--/ .col-xs-12 -->
		<?php } ?>
		</div><!--/ .row -->
		<div class="row">
	        <!-- Pagination -->
	        <?php 
		        echo $this->paginationControl($this->videos, 'Sliding', 'includes/paging.php', array(
			        'urlprefix' => $this->document->getFullPath(). 'gallery' . '?page=', 'appendQueryString' => true
		        ));
	        ?>
	        <!--/ Pagination -->
        </div><!--/ .row -->

        <div class="row">
            <div class="col-xs-12 text-center">
                <a href="?p=gallery" class="btn btn-default">Lihat Semua</a>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

    </div><!--/ .container -->
</section><!--/ .gallery -->
