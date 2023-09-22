<?php require "../habdle_db/helper.php" ?>

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
        <div class="flex justify-between px-4 relative items-start md:mx-8">
            <img src="/assets//devchallenges.svg">
            <div class="dropdown relative flex">
                <?php $photo = $usuario["photo"];
                if ($photo == NULL) {
                    echo "<img height='72' width='72' class='py-2' src='/assets/blank-profile-picture-973460_960_720.webp' onclick='toggleDropdown()'>";
                } else {
                    $data_photo = base64_encode($photo);
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
        <div class="flex flex-col items-center mt-4 mb-8">
            <h1 class="text-2xl font-semibold">Personal info</h1>
            <h3 class="text-base mt-2">Basic info, like your name and photo</h3>
        </div>
    </header>
    <!-- Hasta aquí termina la parte del encabezado -->
    <main class="md:flex md:flex-col md:border md:rounded-xl md:border-slate-400 md:w-1/2 md:h-min md:self-center md:mb-8">
        <div class="flex justify-between items-center px-4 py-8 ">
            <div class="text-left ">
                <h4 class="text-2xl font-semibold">Profile</h4>
                <p class="text-sm">Some info may be visible to other people</p>
            </div>
            <a href="./edit.php" class="ring-1 ring-gray-400 py-2 px-4 rounded-md">Edit</a>
        </div>
        <!-- Aquí comienzan las casillas donde se comienzan a mostrar la información del perfil -->
        <div class="flex flex-col h-min pt-6">
            <div class="flex justify-between py-4 px-2 rounded-sm ring-1 ring-gray-400 items-center">
                <label class="text-gray-400 pl-4">PHOTO</label>
                <?php $photo = $usuario["photo"];
                if ($photo == NULL) {
                    echo "<img height='72' width='72' class='py-2' src='/assets/blank-profile-picture-973460_960_720.webp'>";
                } else {
                    $data_photo = base64_encode(($photo));
                    echo "<img src='data:image/png;base64,$data_photo' height='72' width='72'/>";
                }
                ?>
            </div>
            <div id="container" class="flex justify-between py-2 rounded-sm ring-1 ring-gray-400 items-center">
                <label class="text-gray-400 ml-2">NAME</label>
                <?php $name = $usuario["name"];
                echo ($name == NULL) ? "" : "<label class='mr-2'>$name</label>";
                ?>
            </div>
            <div id="container" class="flex justify-between py-2 rounded-sm ring-1 ring-gray-400 items-center">
                <label class="text-gray-400 ml-2">BIO</label>
                <?php $bio = $usuario["bio"];
                echo ($bio == NULL) ? "" : "<label class='mr-2'>$bio</label>";
                ?>
            </div>
            <div id="container" class="flex justify-between py-2 rounded-sm ring-1 ring-gray-400 items-center">
                <label class="text-gray-400 ml-2">PHONE</label>
                <?php $phone = $usuario["phone"];
                echo ($phone == NULL) ? "" : "<label class='mr-2'>$phone</label>";
                ?>
            </div>
            <div id="container" class="flex justify-between py-2 rounded-sm ring-1 ring-gray-400 items-center">
                <label class="text-gray-400 ml-2">EMAIL</label>
                <?php
                echo "<label class='mr-2'>$usuario[email]</label>"
                ?>
            </div>
            <div id="container" class="flex justify-between py-2 rounded-sm ring-1 ring-gray-400 items-center md:rounded-b-xl">
                <label class="text-gray-400 ml-2">PASSWORD</label>
                <label class='mr-2'>********</label>
            </div>
        </div>
    </main>
</body>

</html>