<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission From</title>
    <link href="assets/Title_logo.png" rel="icon">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>
<body class="p-2 p-md-5">
    <h2 class="text-center">Welcome to Little Learners</h2>
    <h4 class="text-center">Start your carrer with us...</h4>
    <div class="d-flex justify-content-center" >
    <form action="<?php echo base_url().'Student/admissionFormData'; ?>" method="POST" name="StudentAdmissionform">
        <div class="m-3">
            <label for="studentName" class="form-label">Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="studentName" name="studentName" required>
          </div>
          <div class="m-3">
            <label for="phoneNumber" class="form-label">Phone Number <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" required>
          </div>
        <div class="m-3">
          <label for="emailId" class="form-label">Email</label>
          <input type="email" class="form-control" id="emailId" name="emailId" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="m-3">
          <label for="standard" class="form-label">Standard</label>
          <input type="text" class="form-control" id="standard" name="standard" >
        </div>
        <div class="m-3">
            <label for="dob" class="form-label">DOB</label>
            <input type="date" class="form-control" id="dob" name="dob" >
          </div>
        <div class="m-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="m-3 btn btn-primary">Submit</button>
      </form>
    </div>
</body>
</html>