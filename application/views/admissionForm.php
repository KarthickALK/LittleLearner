<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admission From</title>
  <link href="<?php echo base_url() ?>/assets/Title_logo.png" rel="icon">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Bootstrap Icon  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

</head>

<body class="p-2 p-md-5">
  <a href="<?php echo base_url() . "Student/" ?>" class="float-end text-dark"><button
      class="btn btn-outline-secondary"><i class="bi bi-arrow-left"></i></button></a>

  <h2 class="text-center">Welcome to Little Learners</h2>
  <h4 class="text-center">Start your carrer with us...</h4>
  <div class="d-flex justify-content-center">
    <form action="<?php echo base_url() . 'Student/admissionFormData'; ?>" method="POST" name="StudentAdmissionform">
      <div class="m-3">
        <label for="studentName" class="form-label">Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="studentName" name="studentName" placeholder="Suresh R" required>
      </div>
      <div class="m-3">
        <label for="phoneNumber" class="form-label">Phone Number <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="9876543210" required>
      </div>
      <div class="m-3">
        <label for="emailId" class="form-label">Email <span class="text-danger">*</span></label>
        <input type="email" class="form-control" id="emailId" name="emailId" placeholder="example@gmail.com" required
          aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="m-3">
        <label for="dob" class="form-label">DOB <span class="text-danger">*</span></label>
        <input type="date" class="form-control" id="dob" name="dob" required>
      </div>
      <div class="m-3">
        <label for="dob" class="form-label">Address <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="address" name="address"
          placeholder="123, Abc Street, KK Nagar, Chennai - 600001" required>
      </div>
      <div class="m-3">
        <label for="standard" class="form-label">Standard <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="standard" name="standard" placeholder="VI" required>
      </div>
      <div class="m-3">
        <label for="standard" class="form-label">Section <span class="text-danger">*</span></label>
        <select class="form-control" id="section" name="section">
          <option value="">Select Section</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
        </select>
      </div>
      <div class="form-check m-3" disabled>
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="m-3 btn btn-primary">Submit</button>
    </form>
  </div>
  <p class="text-center">Back to <a href="<?php echo base_url() ?>" class="text-primary">Home</a></p>
</body>

</html>