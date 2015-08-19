<?php

use Website\Controller\Action;

class YoutubeController extends Action {

	public function indexAction() {
		// $videos = new Object\Videos\Listing();
		// $this->view->videos=$videos;
		// $this->enableLayout();

	}
	
	function youtube_get_id( $url = '' )
    {
        /**
         * Extract YouTube Video's ID from URL given
         */
        $output = '';
        if( strlen( $url ) > 0 )
        {
            $arr_find = array(
                'http://www.youtube.com',
                'https://www.youtube.com',
                'http://youtube.com',
                'https://youtube.com',
                'http://www.youtu.be',
                'https://www.youtu.be',
                'http://youtu.be',
                'https://youtu.be'
            );
            $url = str_replace( $arr_find, '', $url );
            $url = str_replace( '/watch', '', $url );
            $url = str_replace( '?v=', '', $url );
            $url_arr = explode( '&', $url );
            $output = $url_arr[ 0 ];
        }
        return $output;
    }

    function youtube_get_thumbnail( $url = '', $what = 'maxresdefault' )
    {
        /**
         * Get YouTube Video's thumbnail
         * http://stackoverflow.com/questions/2068344/how-do-i-get-a-youtube-video-thumbnail-from-the-youtube-api
         * @param string $url Youtube video URL
         * @param string $what Thumbnail image number
         * @return string
         */
        $output = '';
        if( ( strlen( $url ) > 0 ) )
        {
            $id = youtube_get_id( $url );
            $output = 'http://img.youtube.com/vi/' . $id . '/' . $what . '.jpg';
        }
        return $output;
    } 
	
	
}
