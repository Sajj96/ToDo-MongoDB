<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>MyMenu</title>
</head>

<body>
    <section>
        <div class="container main-container">
            <div class="card">
                <div class="card-header">Add Activity</div>
                <div class="card-body">
                    <form method="post" id="activity_form">
                        <span id="message"></span>
                        <div class="input-group">
                            <input type="text" name="activity_name" id="activity_name" class="form-control form-control-lg" autocomplete="off" placeholder="Title..." />
                            <div class="input-group-btn">
                                <button type="submit" name="submit" id="submit" class="btn btn-success btn-lg"><span class="fa fa-plus"></span></button>
                            </div>
                        </div>
                    </form>
                    <br />
                    <div class="list-group"></div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>