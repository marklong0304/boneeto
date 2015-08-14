

/**
 * YouTube Iframe
 * https://developers.google.com/youtube/iframe_api_reference
 */

var player;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: '848',
        width: '480',
        videoId: 'M7lc1UVf-VE',
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });
}

function onPlayerReady(event)
{
    // event.target.playVideo();
}

var done = false;
function onPlayerStateChange(event)
{
    /*
    if (event.data == YT.PlayerState.PLAYING && !done)
    {
        setTimeout(stopVideo, 6000);
        done = true;
    }
    */
}

function playVideo()
{
    player.playVideo();
}

function stopVideo()
{
    player.stopVideo();
}

$( document ).ready(function(){

    // console.log( 'Document is ready, my lord.' );

    $( 'a.gallery-item' ).each(function( index, value ){
        $( this ).click(function(e){
            e.preventDefault();
            var url = $( this ).attr( 'data-url' );
            var title = $( this ).attr( 'data-title' );
            var likes = $( this ).attr( 'data-likes' );
            var views = $( this ).attr( 'data-views' );
            $( '#modalVideoLabel' ).html( title );
            $( '#modalVideoViews' ).html( number_format( views ) );
            $( '#modalVideoLikes' ).html( number_format( likes ) );
            $( '#modalVideo' ).modal('show');
            player.loadVideoById( url );
            stopVideo();
            return false;
        });
    });

    $('#modalVideo').on('shown.bs.modal', function(e){
        playVideo();
    });

    $('#modalVideo').on('hide.bs.modal', function(e){
        stopVideo();
    });

});
