<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Register</title>
</head>

<body class="h-screen flex justify-center md:items-center ">
    <section class="flex flex-col rounded-3xl  md:border-solid md:border-2 md:border-gray md:w-1/2 md:p-16 lg:w-1/4">
        <img class="w-1/2 pt-4 md:w-1/2 md:pt-0" src="/assets//devchallenges.svg">
        <h1 class=" mt-6 text-lg font-bold text-[#333333] md:mt-10">Join thousands of learners from <br>
            around the world</h1>
        <h2 class="mt-4 mb-8 lg:text-sm">Master web development by making real-life <br>
            projects. There are multiple paths for you to <br>
            choose</h2>
        <form method="post" action="/habdle_db/register_user.php" class="flex flex-col gap-4 mb-3">
            <input class="ring-1 ring-black rounded bg-inherit p-2 text-neutral-800 lg:p-4" type="email" name="email" placeholder="email">

            <input class="ring-1 ring-black rounded bg-inherit p-2 text-neutral-800 lg:p-4" type="password" name="contracena" placeholder="password">

            <button class="bg-blue-600 rounded-lg px-1.5 py-2 font-semibold text-white hover:bg-blue-800 active:bg-blue-900 mb-6" type="submit">Start coding now</button>
        </form>

        <spam class="text-center text-gray-400 mb-3">Or continue with these social profile</spam>

        <div class="flex justify-center mt-2 gap-4 mb-4 md:gap-4 ">
            <img src="/assets//Google.svg" alt="Google">
            <img src="/assets//Facebook.svg" alt="Facebook">
            <img src="/assets//Twitter.svg" alt="Twitter">
            <img src="/assets/Gihub.svg" alt="Github">
        </div>

        <spam class="text-center text-gray-400">Already a member? <a href="/views/login.php" class="text-blue-500 hover:text-blue-600">Login</a></spam>
    </section>
</body>

</html>