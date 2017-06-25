<?php
// require('../session.php');


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Upload to obinna</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Upload to Obinna</a>
                </div>
            </div>
        </nav>
        <?php if(isset($_GET['status'])):  ?>
            <div class="alert alert-success alert-dismissable text-center" id="notify">
                <p><?php echo $_GET['status']; ?></p>
            </div>  
        <?php endif; ?>
        <div class="col-xs-10 col-xs-offset-1">
            <form enctype="multipart/form-data" action="upload.php" method="POST" id="upload">
                    <div class="input-group">
                        <label>File Name</label>
                        <input class="form-control" type="text" name="filename">
                    </div>
                    <div class="input-group">
                        <label>Upload File</label>
                        <input class="form-control" name="userfile" type="file">
                    </div>
                    <div class="input-group">
                        <input class="btn btn-success" type="submit" value="Upload">
                    </div>
            </form>
        </div>
        <!-- <script>
            function upload(e){
                $.ajax({
                    type: 'POST',
                    data: $('#upload').serialize(),
                    url: 'upload.php',
                    success: function(data){
                        if (data) {
                            alert(data);
                        }else{
                            alert('No go');
                        }
                    }
                });
                return false;
            }
        </script> -->
    </body>
</html>
