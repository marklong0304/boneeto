<?php

    /**
     * ./ajax/get_video.php
     * Created by Falmesino Abdul Hamid(http://be.net/falmesino)
     */

    @ include_once( '../function.youtube.php' );

    $id = '';

    if( isset( $_GET[ 'id' ] ) )
    {
        $id = trim( $_GET[ 'id' ] );

        /**
         * Find in database submission data with given ID above.
         * Do your shit here, i don't know how.
         */

        $dummy_array = array(
           'http://www.youtu.be/watch?v=m9x2WXF15HA',
           'https://www.youtube.com/watch?v=Qyk3HZkWYSo',
           'http://www.youtube.com/watch?v=dtf5fuTkbsA',
           'http://www.youtube.com/watch?v=348nDP8KyCo'
        );

    }

?>
