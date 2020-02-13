<!DOCTYPE html>
<html> 
<head> 
  <title>Codeignier 3 Image Upload with Resize Example from Scratch</title> 
</head>


<body> 


  <?php echo $error." filename: ".$file;?> 
  <?php echo form_open_multipart('image-upload/post');?> 
     <input type="file" name="image" size="20" />
     <input type="submit" value="upload" /> 
  </form> 


</body>
</html>