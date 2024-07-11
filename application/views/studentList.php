<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
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

<body>
    <div class="text-center p-4">
        <img src="<?php echo base_url() ?>/assets/Footer Logo.png" alt="logo">
        <a href="<?php echo base_url() . "Student/" ?>" class="float-end text-dark"><button
                class="btn btn-outline-secondary"><i class="bi bi-arrow-left"></i></button></a>
    </div>
   
    <?php if ($method == 'list') { ?>
         <h2 class="text-center p-4"> This Academic Year Admission List</h2>
        <div class="table-responsive">
            <table class="table m-5">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Mobile Number</th>
                        <th>Email Address</th>
                        <th>DOB</th>
                        <th>Address</th>
                        <th>Standard</th>
                        <th>Section</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <?php $count = 0;
                foreach ($studentList as $key => $value) {
                    $count++ ?>
                    <tbody>
                        <tr>
                            <td><?php echo $count ?>.</td>
                            <td><?php echo $value['name'] ?></td>
                            <td><?php echo $value['mobileNumber'] ?></td>
                            <td><?php echo $value['mailId'] ?></td>
                            <td><?php echo $value['dob'] ?></td>
                            <td><?php echo $value['address'] ?></td>
                            <td><?php echo $value['standard'] ?></td>
                            <td><?php echo $value['section'] ?></td>
                            <td class="d-flex"><a
                                    href="<?php echo base_url() . "Student/studentUpdate/" . $value['id'] ?>"><button
                                        class="btn btn-secondary me-1"><i class="bi bi-pencil"></i></button></a>
                                <a href="<?php echo base_url() . "Student/studentDelete/" . $value['id'] ?>"
                                    onclick="return confirm('Are you sure to delete ?')"><button class="btn btn-danger"><i
                                            class="bi bi-trash"></i></button></a>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>

    <?php } elseif ($method == 'updateForm') { ?>
        <h2 class="text-center p-4"> Student Details Update Form</h2>
        <div class="d-flex justify-content-center">
        <?php  foreach ($studentList as $key => $value) {  ?>
            <form action="<?php echo base_url() . 'Student/admissionFormUpdate'; ?>" method="POST"
                name="StudentAdmissionFormUpdate">
                <div class="m-3">
                    <label for="studentName" class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="studentName" name="studentName" value="<?php echo $value['name'] ?>" placeholder="Suresh R"
                        required>
                </div>
                <div class="m-3">
                    <label for="phoneNumber" class="form-label">Phone Number <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" value="<?php echo $value['mobileNumber'] ?>" placeholder="9876543210"
                        required>
                </div>
                <div class="m-3">
                    <label for="emailId" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="emailId" name="emailId" value="<?php echo $value['mailId'] ?>" placeholder="example@gmail.com"
                        required aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="m-3">
                    <label for="dob" class="form-label">DOB <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $value['dob'] ?>" required>
                </div>
                <div class="m-3">
                    <label for="dob" class="form-label">Address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="address" name="address"
                        placeholder="123, Abc Street, KK Nagar, Chennai - 600001" value="<?php echo $value['address'] ?>" required>
                </div>
                <div class="m-3">
                    <label for="standard" class="form-label">Standard <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="standard" value="<?php echo $value['standard'] ?>" name="standard" placeholder="VI" required>
                </div>
                <div class="m-3">
                    <label for="standard" class="form-label">Section <span class="text-danger">*</span></label>
                    <select class="form-control" id="section" name="section">
                        <option value="">Select Section</option>
                        <option value="A" <?php if (isset($value['section']) && $value['section'] === 'A')
                        echo 'selected'; ?>>A</option>
                        <option value="B" <?php if (isset($value['section']) && $value['section'] === 'B')
                        echo 'selected'; ?>>B</option>
                        <option value="C" <?php if (isset($value['section']) && $value['section'] === 'C')
                        echo 'selected'; ?>>C</option>
                        <option value="D" <?php if (isset($value['section']) && $value['section'] === 'D')
                        echo 'selected'; ?>>D</option>
                    </select>
                </div>
                <input name="id" id="id" value="<?php echo $value['id'] ?>" hidden>
                <button type="submit" class="m-3 btn btn-primary">Upadte</button>
            </form>
            <?php } ?>
        </div>
    <?php } ?>
</body>

</html>