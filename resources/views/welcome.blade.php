
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Products</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Products</a>
        </div>

    </div>
</nav>

<div class="container">

    <form class="form-horizontal">

        <div class="form-group">
            <label class="control-label col-sm-2" for="pname">Product name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="pname" name="pname" placeholder="Product name" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="stock">Quantity in stock:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="stock" name="stock" placeholder="stock" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="price">Price per item:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="price" name="price" placeholder="Price" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Save</button>
            </div>
        </div>

    </form>

    <table class="table row">
        <thead>
        <tr>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price Per Item</th>
            <th>Timestamp</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="https://getbootstrap.com/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
