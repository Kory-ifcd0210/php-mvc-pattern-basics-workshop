<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/assets/css/style.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <section>
        <table class="table table-success table-striped">
            <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">LastName</th>
            <th scope="col">Email</th>
            <th scope="col">Avatar</th>
            </tr>
            </thead>
            <?php
            foreach ($getAllEmployeesModel as $row) {
                echo '
                <tbody>
                <tr>
                <th scope="row">'.$row['name'].'</th>
                <td>'.$row['last_name'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['avatar'].'</td>
                </tr>
                </tbody>';
            }
            ?>
        </table>
    </section>
</body>

</html>