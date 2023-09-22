<?php require "../habdle_db/helper.php"
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link href="/habdle_db/main.css" rel="stylesheet">
    <script src="../habdle_db/dropdown.js"></script>
</head>

<body class="md:flex md:flex-col">
    <header class="flex flex-col mt-6 h-1/4">
        <div class="flex justify-between px-4 relative items-start  md:mx-8">
            <img src="/assets//devchallenges.svg">
            <div class="dropdown relative">
                <?php $photo = $usuario["photo"];
                if ($photo == NULL) {
                    echo "<img height='72' width='72' class='py-2' src='/assets/blank-profile-picture-973460_960_720.webp' onclick='toggleDropdown()'>";
                } else {
                    $data_photo = base64_encode(($photo));
                    echo "<img src='data:image/png;base64,$data_photo' height='72' width='72'  onclick='toggleDropdown()'/>";
                }
                ?>
                <div id="myDropdown" class="dropdown-content">
                    <lu class="flex flex-col ">
                        <a href="../views/dashboard.php">My Profile</a>
                        <a href="#">Chat Group</a>
                        <a href="../habdle_db/logout.php">Logout</a>
                    </lu>
                </div>
            </div>
  
        </div>

    </header>
    <!-- Hasta aquí termina la parte del encabezado -->


    <a href="/views/dashboard.php" class="text-blue-600 ml-3 active: underline-offset-1 self-center md:w-1/3 md:mb-7">
            < Back </a>

    <main class="md:flex md:flex-col  md:w-1/2 md:h-min md:self-center md:mb-8 md:ring-2 md:ring-gray-300 md:rounded-xl">
        <div class="flex flex-col items-center mt-4 mb-8 md:items-start md:ml-4 md:mb-4">
            <h1 class="text-2xl font-semibol">Change info</h1>
            <h3 class="text-base mt-2">Changes will be reflected to every services</h3>
        </div>
                <form method="post" action="/habdle_db/update.php" class="flex flex-col h-screen pt-6 md:h-min" enctype="multipart/form-data">
                    <!-- Aquí comienzan las casillas donde se comienzan a mostrar la información del perfil -->

                    <div class="flex justify-between py-4 px-2 rounded-sm ring-1 ring-gray-400 items-center md:flex-row-reverse md:justify-end md:ring-0">
                        <label class="text-gray-400 ml-2">CHANGE PHOTO</label>
                        <input hidden type="file" name="photo" id="fileInput">
                        <label for="fileInput">
                            <?php $photo = $usuario["photo"];
                            if ($photo == NULL) {
                                echo "<img height='72' width='72' class='py-2' src='/assets/blank-profile-picture-973460_960_720.webp'>";
                            } else {
                                $data_photo = base64_encode(($photo));
                                echo "<img src='data:image/png;base64,$data_photo' height='72' width='72'/>";
                            }
                            ?>
                        </label>
                    </div>
                    <div id="container" class="flex justify-between py-2 rounded-sm ring-1 ring-gray-400 items-center md:flex-col md:self-start md:ring-0 md:items-start md:w-full md:ml-4">
                        <?php $id = $usuario["id"];
                        echo "<input type='text' name='id' hidden value='$id'>";
                        ?>
                        <label class="text-gray-400 ml-2 md:text-black">NAME</label>
                        <?php $name = $usuario["name"];
                        echo ($name == NULL) ? "<input type='text' id='information_user' class='ring-1 ring-gray-400 rounded-md md:w-2/3' name='name' placeholder='Enter your name'>" : "<input type='text' id='information_user' class='ring-1 ring-gray-400 rounded-md md:w-2/3' name='name' type='text' value='$name'></input>";
                        ?>
                    </div>
                    <div id="container" class="flex justify-between py-2 rounded-sm ring-1 ring-gray-400 items-center md:flex-col md:self-start md:ring-0 md:items-start md:w-full md:ml-4">
                        <label class="text-gray-400 ml-2 md:text-black">BIO</label>
                        <?php $bio = $usuario["bio"];
                        echo ($bio == NULL) ? "<input type='text' id='information_user' class='ring-1 ring-gray-400 rounded-md md:w-2/3 md:h-full' name='bio' placeholder='Enter your bio'>" : "<input type='text' id='information_user' class='ring-1 ring-gray-400 rounded-md md:w-2/3' value='$bio' name='bio'>";
                        ?>
                    </div>
                    <div id="container" class="flex justify-between py-2 rounded-sm ring-1 ring-gray-400 items-center md:flex-col md:self-start md:ring-0 md:items-start md:w-full md:ml-4">
                        <label class="text-gray-400 ml-2 md:text-black">PHONE</label>
                        <?php $phone = $usuario["phone"];
                        echo ($phone == NULL) ? "<input type='text' id='information_user' class='ring-1 ring-gray-400 rounded-md md:w-2/3' name='phone' placeholder='Add a Phone number'>"  : "<input type='number' id='information_user' class='ring-1 ring-gray-400 rounded-md md:w-2/3' value='$phone' name='phone'></input>";
                        ?>
                    </div>
                    <div id="container" class="flex justify-between py-2 rounded-sm ring-1 ring-gray-400 items-center md:flex-col md:self-start md:ring-0 md:items-start md:w-full md:ml-4">
                        <label class="text-gray-400 ml-2 md:text-black">EMAIL</label>
                        <?php $email = $usuario["email"];
                        echo ($email == NULL) ? "<input type='email' id='information_user' class='ring-1 ring-gray-400 rounded-md md:w-2/3' name='email'>"  : "<input type='email' id='information_user' class='ring-1 ring-gray-400 rounded-md md:w-2/3' value='$email' name='email'></input>";
                        ?>
                    </div>
                    <div id="container" class="flex justify-between py-2 rounded-sm ring-1 ring-gray-400 items-center md:flex-col md:self-start md:ring-0 md:items-start md:w-full md:ml-4">
                        <label class="text-gray-400 ml-2 md:text-black">PASSWORD</label>
                        <input type='password' id='information_user' class='ring-1 ring-gray-400 rounded-md md:w-2/3' name='contracena' placeholder='****'></input>
                    </div>
                    <button class="bg-blue-600 hover:bg-blue-700 active:bg-blue-800 rounded-md text-white w-1/4 mt-4 ml-4 md:mb-4" type="submit">Save</button>
                </form>
    </main>
</body>

</html>