<?php require('header.php') ?>
<input type="file" name="fileUpload" onchange="validate_fileupload(this.value);">

<?php require('footer.php') ?>
<script>
    function validate_fileupload(fileName){
    var allowed_extensions = new Array("jpg","png");
    var file_extension = fileName.split('.').pop().toLowerCase(); // split function will split the filename by dot(.), and pop function will pop the last element from the array which will give you the extension as well. If there will be no extension then it will return the filename.

    for(var i = 0; i <= allowed_extensions.length; i++)
    {
        if(allowed_extensions[i]==file_extension)
        {
            return true; // valid file extension
        }
    }

    return false;
   }
</script>