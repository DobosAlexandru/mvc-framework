<?php


$this->title = 'Register';

?>

<section class="container mx-auto my-24">
    <div class="grid grid-cols-2 items-center gap-x-12 w-full">
        <div class="max-w-xl px-12">
            <form action="" method="post" class="space-y-4">
                <div class="space-y-1">
                    <div class="flex items-center justify-between">
                        <label for="firstname" class="text-lg font-bold text-blue-800">
                            First Name
                        </label>
                        <span class="text-red-500"><?php echo $model->getFirstError('firstname') ?></span>
                    </div>
                    <input type="text" name="firstname" placeholder="John"
                        class="border rounded focus:outline-none border-blue-800 w-full p-2">
                </div>
                <div class="space-y-1">
                    <div class="flex items-center justify-between ">
                        <label for="lastname" class="text-lg font-bold text-blue-800">
                            Last Name
                        </label>
                        <span class="text-red-500"><?php echo $model->getFirstError('lastname') ?></span>
                    </div>
                    <input type="text" name="lastname" placeholder="Smith"
                        class="border rounded focus:outline-none border-blue-800 w-full p-2">
                </div>
                <div class="space-y-1">
                    <div class="flex items-center justify-between">
                        <label for="email" class="text-lg font-bold text-blue-800">
                            Email
                        </label>
                        <span class="text-red-500"><?php echo $model->getFirstError('email') ?></span>
                    </div>
                    <input type="text" name="email" placeholder="johnsmith@example.com"
                        class="border rounded focus:outline-none border-blue-800 w-full p-2">
                </div>
                <div class="space-y-1">
                    <div class="flex items-center justify-between">
                        <label for="password" class="text-lg font-bold text-blue-800">
                            Password
                        </label>
                        <span class="text-red-500"><?php echo $model->getFirstError('password') ?></span>
                    </div>
                    <input type="password" name="password" placeholder="It's a secret"
                        class="border rounded focus:outline-none border-blue-800 w-full p-2">
                </div>
                <div class="space-y-1">
                    <div class="flex items-center justify-between">
                        <label for="confirmPassword" class="text-lg font-bold text-blue-800">
                            Confirm Password
                        </label>
                        <span class="text-red-500"><?php echo $model->getFirstError('confirmPassword') ?></span>
                    </div>
                    <input type="password" name="confirmPassword" placeholder="It's a secret"
                        class="border rounded focus:outline-none border-blue-800 w-full p-2">
                </div>


                <div class="text-center text-white font-bold text-lg">
                    <button type="submit"
                        class="transition-all duration-300 shadow-md rounded-lg bg-blue-800 hover:bg-blue-600 w-full py-2">SignUp</button>
                </div>
            </form>

        </div>
        <div class="flex justify-end w-auto">
            <img src="<?php $this->assets('images/login_wallpaper.webp') ?>"
                class="rounded-xl shadow-xl object-cover w-auto h-auto" alt="Register wallpaper">
        </div>
    </div>
</section>