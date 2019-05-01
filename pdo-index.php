<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <h4 class="mt-5" style="text-align: center">Add post</h4>
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <form method="post" action="pdoINSERT.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Enter title">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="body" placeholder="Enter body">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="author" placeholder="Enter author">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <div class="container">
        <h4 class="mt-5" style="text-align: center">update</h4>
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <form method="post" action="pdoupdate.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="id" placeholder="Enter ID">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <div class="container">
        <h4 class="mt-5" style="text-align: center">Search Customer</h4>
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <form method="post" action="pdoSEARCH.php">

                    <div class="form-group">
                        <input type="text" class="form-control" name="id" placeholder="Enter ID">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <div class="container">
        <h4 class="mt-5" style="text-align: center">Delete</h4>
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <form method="post" action="pdoDELETE.php">

                    <div class="form-group">
                        <input type="text" class="form-control" name="id" placeholder="Enter ID">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>