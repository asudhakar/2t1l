<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Welcome</title>
</head>

<body>


<?php 
include('get.php'); ?>

    <h1 class="text-center">Two Truths and One Lie</h1>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>People Votted for </h3>
                <div class="row">
                    <div class="col-sm-1">
                        Option 1
                    </div>
                    <div class="col-sm-11">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?php echo $admin_values['option_1']?>%" aria-valuenow="<?php echo $admin_values['option_1']?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        Option 2
                    </div>
                    <div class="col-sm-11">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: <?php echo $admin_values['option_2']?>%" aria-valuenow="<?php echo $admin_values['option_2']?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        Option 3
                    </div>
                    <div class="col-sm-11">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: <?php echo $admin_values['option_3']?>%" aria-valuenow="<?php echo $admin_values['option_3']?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        No Idea!
                    </div>
                    <div class="col-sm-11">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: <?php echo $admin_values['no_idea']?>%" aria-valuenow="<?php echo $admin_values['no_idea']?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="text-center">
            <a href="reset.php"><button type="button" class="btn btn-primary" >Reset Form</button></a>
        </div>
    </div>

</body>

</html>