<!doctype html>
<html>
    <head>
        <title>How to upload file in CodeIgniter</title>
    </head>
    <body>
        <b><?php if(isset($response)) echo $response; ?></b>
        <form method='post' action='<?php echo base_url(); ?>' enctype='multipart/form-data'>

            <input type='file' name='file' > <br/><br/>
            <input type='submit' value='Upload' name='upload' />
        </form>
    </body>
</html>