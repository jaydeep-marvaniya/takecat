<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>CSV</title>
</head>
<body>
    <?php echo $error;?>

    <?php echo form_open_multipart('account/do_upload');?>
    
    <input type="file" name="csvfile" size="20" />
    
    <br /><br />
    
    <input type="submit" value="upload" />
    
    </form>
</body>
</html>