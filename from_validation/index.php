
<?php
 

 if(isset($_POST['submit'])){
    $error_full_name = '';
    $error_email = '';
    $error_password = '';
    $error_confirm_password = '';


    //  full_name
   if(isset($_POST['full_name'])){
        $full_name = $_POST['full_name'];
        
        if(empty($full_name)){
             $error_full_name = 'name is required ';
        }

        if(strlen($full_name) < 5){
            $error_full_name = 'name langht more then 5 <br>';
        }
   }
    //  email
    if(isset($_POST['email'])){
        $email = $_POST['email'];

        if(empty($email)){
            $error_email  = 'required email <br>';
        }

        if(strlen($email) > 27){
            $error_email  = 'length not more then 7 charchters <br>';
        }

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error_email  = 'emial is not vaild <br>';
        }
    }

    // password 
    $password = $_POST['password'];

    if(isset($_POST['password'])){
            $error_password = 'password is required';
        }
        if(strlen($password)<8 || strlen($password) > 16){
            $error_password = 'password length 8 to 16';
        }
        if(!preg_match("/[A-Z]/",$password)){
            $error_password = 'password must have one uppercase letter';
        }
        if(!preg_match("/[a-z]/",$password)){
            $error_password = 'password must have one lowercase letter';
        }
        if(!preg_match("/[0-9]/",$password)){
            $error_password = 'password must have one number';
        }
        if(!preg_match("/[^A-Za-z0-9]/",$password)){
            $error_password = 'password must have speciale character';
        }
    }

      // confirm password 
    if(isset($_POST['confirm'])){
        $confirm_password = $_POST['confirm'];
        if(empty($confirm_password)){
            $error_confirm_password = 'Confirm password is required';
        }
        if($confirm_password !== $password){
            $error_confirm_password = 'Password and confirm password must match';
        }

    }


 


?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>
    <div class="h-screen bg-indigo-100 flex justify-center items-center">
        <div class="lg:w-2/5 md:w-1/2 w-2/3">
            <form action="index.php" method="POST" class="bg-white p-10 rounded-lg shadow-lg min-w-full">
                <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Register</h1>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="FullName">Full Name</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="full_name" placeholder="FullName"/>
                    <?php
                        echo "<p class='text-red-500'>$error_full_name</p>"
                    ?>
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="email">Email</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="email" placeholder="@email" />
                    <?php
                        echo "<p class='text-red-500'>$error_email</p>"
                    ?>
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="password" placeholder="password" />
                    <?php
                        echo "<p class='text-red-500'>$error_password</p>"
                    ?>
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Confirm password</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="confirm" placeholder="confirm password" />
                    <?php
                        echo "<p class='text-red-500'>$error_confirm_password</p>"
                    ?>
                </div>
                <button type="submit" name="submit" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
