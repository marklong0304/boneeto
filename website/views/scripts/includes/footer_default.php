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
        <li><a href="">Contact Us</a></li>
    </ul>
    </div>
    </div>
</div>
 
<script  src="/website/static/default/js/vendor/modernizr.js"></script>
<script  src="/website/static/default/js/vendor/jquery.js"></script>
<script  src="/website/static/default/js/foundation/foundation.js"></script>
<script  src="/website/static/default/js/jquery.slicknav.js"></script>
    
<script src="/website/static/default/js/foundation/foundation.dropdown.js"></script>
<script src="/website/static/default/js/foundation/foundation.orbit.js"></script>
<script>
    $(document).foundation({
      dropdown: {
        // specify the class used for active dropdowns
        active_class: 'opssen'
      }
    });
    $( ".background1" ).hover(
        function() {
        $( this ).addClass( "hover" );
        $( ".background2" ).addClass( "hovering1");
        $( ".background3" ).addClass( "hovering1");
        //$( this ).append( $( "<span> ***</span>" ) );
        }, function() {
        $( this ).removeClass( "hover" );
        $( ".background2" ).removeClass( "hovering1");
        $( ".background3" ).removeClass( "hovering1");
        }
    );

    $( ".background2" ).hover(
        function() {
        $( this ).addClass( "hover" );
        $( ".background1" ).addClass( "hovering2");
        $( ".background3" ).addClass( "hovering2");
        //$( this ).append( $( "<span> ***</span>" ) );
        }, function() {
        $( this ).removeClass( "hover" );
        $( ".background1" ).removeClass( "hovering2");
        $( ".background3" ).removeClass( "hovering2");
        }
    );

    $( ".background3" ).hover(
        function() {
        $( this ).addClass( "hover" );
        $( ".background2" ).addClass( "hovering3");
        $( ".background4" ).addClass( "hovering3");
        //$( this ).append( $( "<span> ***</span>" ) );
        }, function() {
        $( this ).removeClass( "hover" );
        $( ".background2" ).removeClass( "hovering3");
        $( ".background4" ).removeClass( "hovering3");
        }
    );

    $( ".background4" ).hover(
        function() {
            $( this ).addClass( "hover" );
            $( ".background2" ).addClass( "hovering4");
            $( ".background3" ).addClass( "hovering4");
            //$( this ).append( $( "<span> ***</span>" ) );
        }, function() {
            $( this ).removeClass( "hover" );
            $( ".background2" ).removeClass( "hovering4");
            $( ".background3" ).removeClass( "hovering4");
            }
    );

    
</script>
<script>
    $(function(){
        $('#menu').slicknav();
    });
</script>  