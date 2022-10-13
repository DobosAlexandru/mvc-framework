<section class="container rounded-t-full text-white bg-blue-800 mx-auto mt-24">
    <div class="grid grid-cols-3 pt-12 px-12">
        <div class="text-lg">
            <p>
            With patience you can cross the sea and move the mountain.
            </p>
        </div>
        <div class="flex justify-center">
            <ul class="text-lg text-center font-bold space-y-3">
                <li
                    class="<?php echo $this->requestIs('/') ? 'border-b-2 border-white py-1' : false ?>">
                    <a href="/">Home</a>
                </li>
                <li
                    class="<?php echo $this->requestIs('/about') ? 'border-b-2 border-white py-1' : false ?>">
                    <a href="/about">About</a>
                </li>
                <li
                    class="<?php echo $this->requestIs('/contact') ? 'border-b-2 border-white py-1' : false ?>">
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </div>
        <div class="flex justify-end">
            <div class="text-lg space-y-4">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                    </svg>
                    <div class="ml-2">
                        <p>Bld. Dacia, Nr.2, Bloc D1-2</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                            clip-rule="evenodd" />
                    </svg>

                    <div class="ml-2">
                        <a href="tel:+40737596894">0737 596 894</a>
                    </div>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor"
                        class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path
                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                    </svg>
                    <div class="ml-2">
                        <a href="mailto: dobos_alex54@yahoo.com">dobos_alex54@yahoo.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center pt-12 pb-2">
        <p>Copyright ©<?= date('Y') ?> All rights reserved</p>
    </div>
</section>