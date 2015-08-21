<!DOCTYPE html>
<html lang="en">
    
    <head>
        <?php echo $this->template("includes/metadata_default.php")?>     
    </head>
    
    <body id="index">
        <div class="wrapper" style="margin: 0 auto;">
            <?php echo $this->template("includes/header_default.php") ?>
            
            <?php echo $this->layout()->content; ?>
            
            <?php echo $this->template("includes/footer_default.php")?>
        </div>
    </body>
    
</html>