<?php  
  session_start();  
?>  
  
<!DOCTYPE html>  
<html>  
<head>  
    <title>Image Gallery Example</title>  
    <!-- Latest CSS which is minified and compiled -->  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
    <!-- References: https://github.com/fancyapps/fancyBox -->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
  
    <style type="text/css">  
    .gallery  
    {  
        display: inline-block;  
        margin-top: 20px;  
    }  
    .close-icon{  
    border-radius: 50%;  
        position: absolute;  
        right: 5px;  
        top: -10px;  
        padding: 5px 8px;  
    }  
        .form-image-upload{  
            background: #e8e8e8 none repeat scroll 0 0;  
            padding: 15px;  
        }  
    </style>  
</head>  
<body>  
  
<div class="container">  
  
    <h3> Example of Image Gallery CRUD using PHP MySQL </h3>  
    <form action="imageUpload.php" class="form-image-upload" method="POST" enctype="multipart/form-data">  
  
        <?php if(!empty($_SESSION['error'])){ ?>  
            <div class="alert alert-danger">  
                <strong>Whoops!</strong> Our input faces some problems. <br><br>  
                <ul>  
                    <li><?php echo $_SESSION['error']; ?></li>  
                </ul>  
            </div>  
        <?php unset($_SESSION['error']); } ?>  
  
        <?php if(!empty($_SESSION['success'])){ ?>  
        <div class="alert alert-success alert-block">  
            <button type="button" class="close" data-dismiss="alert">?</button>  
                <strong><?php echo $_SESSION['success']; ?></strong>  
        </div>  
        <?php unset($_SESSION['success']); } ?>  
  
        <div class="row">  
            <div class="col-md-5">  
                <strong>Title:</strong>  
                <input type="text" name="title" class="form-control" placeholder="Title">  
            </div>  
            <div class="col-md-5">  
                <strong>Image:</strong>  
                <input type="file" name="image" class="form-control">  
            </div>  
            <div class="col-md-2">  
                <br/>  
                <button type="submit" class="btn btn-success">Upload</button>  
            </div>  
        </div>  
  
    </form>   
  

</body>
</html>




  
        </div> <!-- list-group / end -->  
    </div> <!-- row / end -->  
</div> <!-- container / end -->  
  
</body>  
  
<script type="text/javascript">  
    $(document).ready(function(){  
        $(".fancybox").fancybox({  
            openEffect: "none",  
            closeEffect: "none"  
        });  
    });  
</script>  
</html>  