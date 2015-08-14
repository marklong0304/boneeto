<?php

    /**
     * ./includes/page-gallery.php
     * Created by Falmesino Abdul Hamid(http://be.net/falmesino)
     */

?>

<section class="carousel-home">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="http://placehold.it/1920x720&text=GALLERY" alt="Header 1" class="img-responsive">
            </div><!--/ .item -->
        </div><!--/ .carousel-inner -->
    </div><!--/ .carousel -->
</section><!--/ .carousel-home -->

<section class="gallery pt32 pb32">
    <div class="container">
        <div class="row mb32 section-title">
            <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
                <h2>Gallery</h2>
                <p> Cek Video yang sudah dikirim oleh teman-temanmu!</p>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
        <?php for( $i = 0; $i < 3; $i++ ): ?>
        <div class="row mb32">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="#" class="gallery-item" data-title="Video 1" data-views="1566123" data-likes="1566123" data-url="<?php echo youtube_get_id( 'http://www.youtu.be/watch?v=m9x2WXF15HA' ); ?>">
                    <img src="<?php echo youtube_get_thumbnail( 'http://www.youtu.be/watch?v=m9x2WXF15HA' ); ?>" alt="Title" class="img-responsive">
                    <div class="gallery-item-meta">
                        <h4>Video 1</h4>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <p><i class="fa fa-eye"></i> 1,566,123</p>
                            </div><!--/ .col-xs-12 -->
                            <div class="col-xs-12 col-sm-6 text-right">
                                <p><i class="fa fa-thumbs-o-up"></i> 1,566,123</p>
                            </div><!--/ .col-xs-12 -->
                        </div><!--/ .row -->
                        <div class="clearfix"></div>
                    </div><!--/ .gallery-item-meta -->
                </a>
            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="#" class="gallery-item" data-title="Video 2" data-views="1566123" data-likes="1566123" data-url="<?php echo youtube_get_id( 'https://www.youtube.com/watch?v=Qyk3HZkWYSo' ); ?>">
                    <img src="<?php echo youtube_get_thumbnail( 'https://www.youtube.com/watch?v=Qyk3HZkWYSo' ); ?>" alt="Title" class="img-responsive">
                    <div class="gallery-item-meta">
                        <h4>Video 2</h4>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <p><i class="fa fa-eye"></i> 1,566,123</p>
                            </div><!--/ .col-xs-12 -->
                            <div class="col-xs-12 col-sm-6 text-right">
                                <p><i class="fa fa-thumbs-o-up"></i> 1,566,123</p>
                            </div><!--/ .col-xs-12 -->
                        </div><!--/ .row -->
                        <div class="clearfix"></div>
                    </div><!--/ .gallery-item-meta -->
                </a>
            </div><!--/ .col-xs-12 -->
            <div class="clearfix visible-sm"></div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="#" class="gallery-item" data-title="Video 3" data-views="1566123" data-likes="1566123" data-url="<?php echo youtube_get_id( 'http://www.youtube.com/watch?v=dtf5fuTkbsA' ); ?>">
                    <img src="<?php echo youtube_get_thumbnail( 'http://www.youtube.com/watch?v=dtf5fuTkbsA' ); ?>" alt="Title" class="img-responsive">
                    <div class="gallery-item-meta">
                        <h4>Video 3</h4>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <p><i class="fa fa-eye"></i> 1,566,123</p>
                            </div><!--/ .col-xs-12 -->
                            <div class="col-xs-12 col-sm-6 text-right">
                                <p><i class="fa fa-thumbs-o-up"></i> 1,566,123</p>
                            </div><!--/ .col-xs-12 -->
                        </div><!--/ .row -->
                        <div class="clearfix"></div>
                    </div><!--/ .gallery-item-meta -->
                </a>
            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="#" class="gallery-item" data-title="Video 4" data-views="1566123" data-likes="1566123" data-url="<?php echo youtube_get_id( 'http://www.youtube.com/watch?v=348nDP8KyCo' ); ?>">
                    <img src="<?php echo youtube_get_thumbnail( 'http://www.youtube.com/watch?v=348nDP8KyCo' ); ?>" alt="Title" class="img-responsive">
                    <div class="gallery-item-meta">
                        <h4>Video 4</h4>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <p><i class="fa fa-eye"></i> 1,566,123</p>
                            </div><!--/ .col-xs-12 -->
                            <div class="col-xs-12 col-sm-6 text-right">
                                <p><i class="fa fa-thumbs-o-up"></i> 1,566,123</p>
                            </div><!--/ .col-xs-12 -->
                        </div><!--/ .row -->
                        <div class="clearfix"></div>
                    </div><!--/ .gallery-item-meta -->
                </a>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

        <?php endfor; ?>

        <div class="row">
            <div class="col-xs-12 text-center">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

    </div><!--/ .container -->
</section><!--/ .gallery -->
