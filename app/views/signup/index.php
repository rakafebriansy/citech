<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="./output.css">
</head>

<body>
    <section class="flex h-screen">
        <div class="hidden md:block md:w-1/2">
            <img src="../../../public/img/hero-login.jpg" class="h-screen w-full" alt="">
        </div>
        <div class="container p-5 md:w-1/2 md:py-0 md:px-12 lg:px-16 mt-16">
            <div class="row-auto">
                <h1 class="text-center md:text-start font-bold text-3xl lg:text-5xl mb-4">Sign up</h1>
                <p class="lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus dignissimos sunt
                    voluptate ea?</p>
            </div>
            <form action="../../database/database.php" method="post">
                <div class="flex justify-center w-full">
                    <div class="mt-5 container">
                        <label for="username" class="text-xl lg:text-2xl block mb-2">
                            Username
                        </label>
                        <input type="text" name="username" class="py-2 text-xl w-full rounded-xl bg-slate-200">
                        <label for="email" class="text-xl lg:text-2xl block mb-2 mt-3">
                            Email Address
                        </label>
                        <input type="email" name="email" class="py-2 text-xl w-full rounded-xl bg-slate-200 block">
                        <label for="password" class="text-xl lg:text-2xl block mb-2 mt-3">
                            Password
                        </label>
                        <input type="password" name="password" class="py-2 text-xl w-full rounded-xl bg-slate-200 block">
                        <button type="submit" name="simpan"
                            class="mt-7 w-full py-1 bg-blue-400 text-white rounded-lg text-2xl lg:text-3xl">REGISTER</button>
                    </div>
                </div>
                <div class="flex justify-center mt-3">
                    <p>Already have an account? <a href="../login/index.php" class="underline text-blue-500">Sign in</a></p>
                </div>
            </form>
        </div>
    </section>
</body>

</html>