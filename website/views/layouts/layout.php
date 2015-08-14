<!DOCTYPE html>
<html lang="en">
    
    <head>
        <?php echo $this->template("includes/metadata.php")?>     
    </head>
    
    <body>
    
        <div class="header">
	        <?php echo $this->template("includes/header.php") ?>
        </div><!--/ .header -->
        
        <?php echo $this->layout()->content; ?>
        
        <?php echo $this->template("includes/footer.php")?>
        
    </body>
    
</html>