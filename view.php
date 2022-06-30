<?php require_once('config.php');
      $db = new operation();
      $result = $db->view_record();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Operation in Php Using OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2>Employe info</h2>
                    </div>
                    <div class="card-body">
                    <?php
                              $db->display_message(); 
                              
                        ?>
                        <table class='table table-bordered'>
                            <tr>
                                <th style="width: 10%">Id</th>
                                <th style="width: 10%">Name</th>
                                <th style="width: 10%">occupation</th>
                                <th style="width: 10%">Company</th>
                                <th style="width: 10%">Email</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                            <?php while($data = mysqli_fetch_assoc($result)){?>
                            <tr>
                                <td><?php echo $data['id']?></td>
                                <td><?php echo $data['name']?></td>
                                <td><?php echo $data['ocupation']?></td>
                                <td><?php echo $data['company']?></td>
                                <td><?php echo $data['email']?></td>
                                <td>
                                   <a href="delate.php?D_ID=<?php echo$data['id']?>" class="btn btn-danger me-3">Delate</a>
                                   <a href="edit.php?U_ID=<?php echo$data['id']?>" class="btn btn-success">Edit</a>
                                </td>
                            </tr>
                            <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>