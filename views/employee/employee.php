

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="assets/js/utils.js" defer></script>
    <title>Employee</title>
</head>



<body>
<section class="row justify-content-center">
        <!-- Employee form  -->
        <form id="employeeForm" class="col-8 bg-light" action="?controller=employee&action=addEmployee>" method="POST">
            <h2 id="nameTitle"> </h2>
            <div class="row">
                <div class="col ">
                    <label for="inputName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" >
                    <label for="inputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" >
                    <label for="inputCity" class="form-label" >City</label>
                    <input type="text" class="form-control" id="inputCity" name="city" placeholder="City">
                    <label for="inputState" class="form-label">State</label>
                    <input type="text" class="form-control" id="inputState" name="state" placeholder="State">
                    <label for="inputPostalCode" class="form-label">PostalCode</label>
                    <input type="text" class="form-control" id="inputPostalCode" name="postalCode" placeholder="Postal code">
                </div>
                <div class="col">
                    <label for="inputLastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="inputLastName" name="lastName" placeholder="Last name" >
                    <label for="inputGender" class="form-label">Gender</label>
                    <select class="form-control" id="inputGender" name="gender">
                    <option value="" disabled selected hidden>Choose a gender</option>
                        <option value="1">Man</option>
                        <option value="2">Woman</option>
                        <option value="3">Other</option>
                    </select>
                    <label for="inputStreetAddress" class="form-label">Street Address</label>
                    <input type="text" class="form-control" id="inputStreetAddress" name="streetAddress" placeholder="Street Adress">
                    <label for="inputAge" class="form-label">Age</label>
                    <input type="number" class="form-control" id="inputAge" name="age" placeholder="Age" >
                    <label for="inputPhoneNumber" class="form-label">PhoneNumber</label>
                    <input type="tel" class="form-control" id="inputPhoneNumber" name="phoneNumber" placeholder="Phone number" >
                </div>
                <div class=row>
                <label for="inputAvatar" class="form-label">avatar</label>
                    <input type="text" class="form-control" id="inputavatar" name="avatar" placeholder="Avatar Url" >
                </div>
            </div>
            <div class="row justify-content-center align-items-center sectionBtn">
                <button id="saveBtn" type="submit" class="btn btn-primary col-4" name="submit">Save</button>
                <button  id="cancelBtn"  class="btn btn-secondary col-4" name="cancelbtn">Cancel</button>
            </div>
        </form>
    </section>
</body>
</html>l