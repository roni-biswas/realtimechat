<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat App | Development by Roni</title>

    <!-- fontawesome add -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- add custom css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="raal_time_chat">
        <div class="wrapper">
            <section class="form signup">
                <div class="logo">
                    <img src="assets/images/Logo_black.png" alt="">
                </div>
                <header>Realtime Chat App</header>
                <form id="form_data">
                    <div class="error_txt"></div>
                    <div class="success_txt"></div>
                    <div class="name_details">
                        <div class="field input">
                            <label for="">First Name</label>
                            <input type="text" name="first_name" placeholder="Fist Name">
                        </div>
                        <div class="field input">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="field input">
                        <label for="">Email Address</label>
                        <input type="text" name="email" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Enter new Password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label for="">Select Image</label>
                        <input type="file" name="file">
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat" id="submit_btn">
                    </div>
                </form>
                <div class="link">Already signed up? <a href="#">Login now</a></div>
            </section>
        </div>
    </div>





    <!-- include js file -->
    <script src="assets/js/jquery-1.10.2.min.js"></script>


    <!-- custom js file -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/pwd_show_hide.js"></script>
    <script src="assets/js/actions.js"></script>


</body>

</html>