<!DOCTYPE html>
<html lang="en">
    
    <head>
        <?php echo $this->template("includes/metadata_default.php")?>     
    </head>
    
    <body id="index" style ="background:#00a2ff; margin-top: 125px;" >
        <div class="wrapper" style="margin: 0 auto;">

            <div class="header" style="position:fixed !important;top:0px;z-index:9999;width:100%;">
                <?php echo $this->template("includes/header_default.php") ?>
            </div>
            
            <?php echo $this->layout()->content; ?>
            
            <?php echo $this->template("includes/footer_default.php")?>
        </div>
    </body>
    
</html>