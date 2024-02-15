
<?php
 

 if(isset($_POST['submit'])){
    $errors = [];
    //  full_name
   if(isset($_POST['full_name'])){
        $full_name = $_POST['full_name'];
        
        if(empty($full_name)){
            $errors[] = 'name is required ';
        }

        if(strlen($full_name) < 5){
            $errors[] = 'name langht more then 5';
        }
   }

    //  email





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
                <?php
                    if(isset($errors)){
                        foreach($errors as $error){
                            echo "<p class='text-red-500 text-sm'>$error</p>"
                        }
                    }

                ?>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="FullName">Full Name</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="full_name" placeholder="FullName"/>
                    
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="email">Email</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="email" placeholder="@email" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="password" placeholder="password" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Confirm password</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="confirm" placeholder="confirm password" />
                </div>
                <button type="submit" name="submit" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
