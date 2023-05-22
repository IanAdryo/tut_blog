<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php $title_for_layout ?> </title>
    <?php echo $html->css(array('style', 'bootstrap-theme.min', 'bootstrap.min')); ?>
    <style>
        .row {
            background: #eeeeee;
            margin: 10;
            padding: 10px 20px;
        }

        .form-error {
            border: 1px solid rgb(156, 220, 254);
        }
    </style>
</head>

<body>
    <div class="container">
        
        <div class="blog-header">
            <h1 class="blog-title">Our blog</h1>
            <br>
        </div>
        <div class="row">
            
            <div class="col-sm-8 blog-main">
                
                <div id="container" class="blog-post">
                    
                    <?php echo $session->flash(); ?>

                    <?php echo $content_for_layout; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>