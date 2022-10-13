<?php

use app\core\Application;

$this->title = 'Contact';

?>

<section class="container mx-auto">
    <div class="my-16">
        <div class="text-5xl text-blue-800 font-bold">
            Contact me
        </div>
        <div class="text-xl text-gray-600 mt-4">
            <p>If you want to get in touch, give a feedback about my portfolio</br> or my work feel free to leave a message :)
            </p>
        </div>
    </div>
    <div class="grid grid-cols-2 items-start gap-x-12 w-full">

        <div class="max-w-xl">
            <div class="mb-4">
                <?php if($this->sessionHas('success')): ?>
                <div class="bg-green-300 border border-green-700 rounded-lg px-4 py-2">
                    <span class="text-green-700">
                        <?php echo Application::$app->session->getFlash('success') ?>
                    </span>
                </div>
                <?php endif; ?>
                <?php if($this->sessionHas('failed')): ?>
                <div class="bg-red-300 border border-red-700 rounded-lg px-4 py-2">
                    <span class="text-red-700">
                        <?php echo Application::$app->session->getFlash('failed') ?>
                    </span>
                </div>
                <?php endif; ?>
            </div>

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
                        <label for="message" class="text-lg font-bold text-blue-800">
                            Your message
                        </label>
                        <span class="text-red-500"><?php echo $model->getFirstError('message') ?></span>
                    </div>
                    <textarea name="message" rows="5" placeholder="Type here your message..."
                        class="border rounded focus:outline-none border-blue-800 w-full p-2"></textarea>
                </div>
                <div class="text-center text-white font-bold text-lg">
                    <button type="submit"
                        class="transition-all duration-300 shadow-md rounded-lg bg-blue-800 hover:bg-blue-600 w-full py-2">Send</button>
                </div>
            </form>

        </div>
        <div class="flex justify-end w-auto">
            <img src="<?php $this->assets('images/alex-dobos-picture-2.jpg') ?>" class="rounded-xl shadow-xl object-cover w-auto h-screen"
                alt="Profile pic contact">
        </div>
    </div>
</section>