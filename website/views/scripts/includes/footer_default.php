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

<?php if($_SERVER[REQUEST_URI]=="/susu-bubuk"||$_SERVER[REQUEST_URI]=="/susu-cair"){ ?>
<script>
    $(document).ready(function() {
            
            // Animate the scroll to top
            $('.go-top').click(function(event) {
                event.preventDefault();
                $(".main").moveTo(1);
            })
            
        });
</script>
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
<?php } ?>

<script src="/website/static/default/js/foundation/foundation.dropdown.js"></script>
<script src="/website/static/default/js/foundation/foundation.orbit.js"></script>
<script>
   $(document).foundation({
  dropdown: {
    // specify the class used for active dropdowns
    active_class: 'open'
  }   

    
});
   $(document).ready(function(){
    $(".submenucoklat").click(function (){
        $(".main").moveTo(1);
      });
      $(".submenuvanila").click(function (){
        $(".main").moveTo(2);
      });
      $(".submenuhoney").click(function (){
        $(".main").moveTo(3);
      });
      $(".submenuinstant").click(function (){
        $(".main").moveTo(4);
      });
    });
   
  </script>
