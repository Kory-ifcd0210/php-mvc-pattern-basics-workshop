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
                <th class="tg-0pky">Name</th>
                <th class="tg-0lax">Email</th>
                <th class="tg-0lax">Gender</th>
                <th class="tg-0lax">City</th>
                <th class="tg-0lax">Age</th>
                <th class="tg-0lax">Phone Number</th>
                <th class="tg-0lax"><a class="btn btn-secondary" href="?controller=employee&action=showEmployee">Add</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($getAllEmployeesModel as $row) {
                echo "<tr>";
                echo "<td class='tg-0lax'>" . $row["name"] . "</td>";
                echo "<td class='tg-0lax'>" . $row["email"] . "</td>";
                echo "<td class='tg-0lax'>" . $row["gender"] . "</td>";
                echo "<td class='tg-0lax'>" . $row["city"] . "</td>";
                echo "<td class='tg-0lax'>" . $row["age"] . "</td>";
                echo "<td class='tg-0lax'>" . $row["phone_number"] . "</td>";
                echo "<td colspan='2' class='tg-0lax'>
                <a class='btn btn-secondary' href='?controller=employee&action=editController&id=" . $row["id"] . "'>Edit</a>
                <a class='btn btn-danger' href='?controller=employee&action=deleteController&id=" . $row["id"] . "'>Delete</a>
                </td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </section>
</body>

</html>