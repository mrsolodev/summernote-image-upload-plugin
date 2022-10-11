<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- Your Summernote CSS file import -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.css" rel="stylesheet">
        
        <!-- Your Summernote Ajax plugin import -->
        <link href="css/summernote-ext-ajaximageupload.css?v=<?php echo mt_rand(0,999999); ?>" rel="stylesheet">
        
        <link rel="stylesheet" href="css/custom.css?v=<?php echo mt_rand(0,999999); ?>">
        <title>Summernote Image Ajax Upload Demo</title>
    </head>
    <body>
	    
	    <h3>Summernote Image Ajax Upload Demo</h3>
	    
	    <div class="container">
		    <div id="summernote"></div>
	    </div>
	    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
        <script src="js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <!-- Your Summernote JS file import -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.js"></script>
        
        <!-- Your Summernote Ajax JS plugin import -->
        <script src="js/summernote-ext-ajaximageupload.js?v=<?php echo mt_rand(0,999999); ?>"></script>
        <script>
		$('#summernote').summernote({
			height: 200,
			toolbar: [
				// [groupName, [list of button]]
				['style', ['style']],
				['style', ['bold', 'italic', 'underline', 'clear']],
				['font', ['strikethrough', 'superscript', 'subscript']],
				['fontsize', ['fontsize']],
				['color', ['color']],
				['insert', [ 'ajaximageupload', 'link', 'video', 'table']],
				['para', ['ul', 'ol', 'paragraph']],
				['height', ['height']]
			]
		});
		</script>
    </body>
</html>