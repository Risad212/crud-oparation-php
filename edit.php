<?php require_once('config.php');
      $db = new operation();
      $db->update();
      $id = $_GET['U_ID'];
      $result = $db->get_record($id);
      $data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2> Signup Form </h2>
                    </div>
                       <?php $db->Storge_Record(); ?>
                        <div class="card-body">
                            <form method="POST">
                                <input type="hidden" name="id" value="<?php echo  $data['id']?>">
                                <input type="text" name="name" placeholder="Name" class="form-control mb-2" required value="<?php echo  $data['name']?>">
                                <input type="text" name="occupation" placeholder="occupation" class="form-control mb-2" required  value="<?php echo  $data['ocupation']?>">
                                <input type="text" name="company" placeholder="Your company" class="form-control mb-2" required  value="<?php echo  $data['company']?>">
                                <input type="Email" name="email" placeholder=" User Email" class="form-control mb-2" required  value="<?php echo  $data['email']?>">
                        </div>
                          <div class="card-footer">
                            <button class="btn btn-success" name="btn_update"> Update </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>