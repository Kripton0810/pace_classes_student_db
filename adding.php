<?php
  include 'headerlay.php';
  include 'dbcon.php';
if(isset($_POST['submit']))
{
    $email = $_POST['studentemail'];
    $name = $_POST['studentname'];
    $phone = $_POST['studentphone'];
    $gender = $_POST['gender'];
    $byte = random_bytes(15);
    $token = bin2hex($byte);
    $query = "INSERT INTO `student`(`token`, `name`, `email`, `phone`, `gender`) VALUES ('{$token}','{$name}','{$email}','{$phone}','{$gender}')";
    $run = $con->query($query);
    if($run)
    {
        echo "<div class='alert alert-success w-25 mx-auto mt-5' role='alert'>Data Inserted Successfully</div>";
    }
    else{
        echo "<div class='alert alert-danger w-25 mt-5 mx-auto' role='alert'>Already Exist</div>";
    }
}
?>
<form class="d-flex flex-column center w-50 mx-auto mt-5" method="post">
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-signature"></i></span>
    <input type="text" class="form-control" placeholder="Student Name" aria-label="Username" aria-describedby="basic-addon1" name="studentname" value = "<?php if(isset($name)){echo $name;} ?>">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-open"></i></span>
    <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" name="studentemail" value = "<?php if(isset($email)){echo $email;} ?>">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-square-alt"></i></span>
    <input type="text" class="form-control" placeholder="Phone number" aria-label="Username" aria-describedby="basic-addon1" name="studentphone" value = "<?php if(isset($phone)){echo $phone;} ?>">
  </div>
  <lable><i class="fas fa-venus-mars"></i>Gender:</lable>
  <div class="d-flex flex-row">
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
    <label class="form-check-label" for="inlineRadio1">Male</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
    <label class="form-check-label" for="inlineRadio2">Female</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Others">
    <label class="form-check-label" for="inlineRadio3">Others</label>
  </div>
</div>
<div class="d-flex w-25 mx-auto">
  <button type="submit" class="btn btn-outline-primary mr-3" name="submit">Submit</button>
  <button type="reset" class="btn btn-outline-warning ml-5" name="reset">Reset</button></div>

</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Otto</td>
    </tr>
  </tbody>
</table>

<?php

  
  include 'footer.php';
?>
