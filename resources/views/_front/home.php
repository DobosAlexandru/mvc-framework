<?php 

$this->title = 'Home';
$this->meta_description = 'Lorem ipsum dolorem';
?>

<section class="container relative overflow-hidden w-full mx-auto pt-20">
    <img src="<?php $this->assets('images/hero-home.jpg') ?>" class="absolute inset-0 -z-10 shadow-xl opacity-20" alt="">
    <div class="absolute top-8 right-16 rounded-xl shadow-xl bg-blue-600 h-96 w-96"></div>
    <div class="grid grid-cols-2 items-center">
        <div class="flex flex-col items-start">
            <div class="text-left">
                <div class="text-xl font-bold text-blue-800 mb-2">
                    <p>Hello</p>
                </div>
                <div class="text-6xl text-black font-bold">
                    I'm <span class="text-blue-800"><?= $name ?></span>
                </div>
                <div class="text-2xl text-gray-700 mt-2">
                    Junior Web Developer from Iași
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center">
            <div class="relative z-50 overflow-hidden mb-4">
                <img src="<?php $this->assets('images/profile_pic.jpg') ?>" class="rounded-xl object-cover h-96 w-96"
                    alt="Portrait">
            </div>
        </div>
    </div>
</section>

<section class="container mx-auto w-full mt-36">
    <div class="flex justify-center">
        <div class="text-5xl text-black font-bold">
            <span class="text-blue-800">Why</span> me?
        </div>
    </div>
    <div class="grid grid-cols-2 gap-6 mt-12 px-24">
        <div class="rounded-lg bg-blue-800 shadow-xl transition-all duration-400 hover:bg-blue-600">
            <div class="text-white p-8">
                <div class="font-bold text-4xl">
                    <h3>Dedication</h3>
                </div>
                <div class="text-lg mt-4">
                    <p>
                        Does not matter how hard can a task sounds like, it didn't matter how long it took, everytime I did it. Even if the time defeated me I look up for a solution. It is important not to let something pass you by. That's the key for success.
                    </p>
                </div>
            </div>
        </div>
        <div class="rounded-lg bg-blue-800 shadow-xl transition-all duration-400 hover:bg-blue-600">
            <div class="text-white p-8">
                <div class="font-bold text-4xl">
                    <h3>Team friendly</h3>
                </div>
                <div class="text-lg mt-4">
                    <p>
                    I didn't work in a team many times, but when I did I didn't let my colleagues down. Every great project has a team behind. It is one of the most important things. They can count on me.
                    </p>
                </div>
            </div>
        </div>
        <div class="rounded-lg bg-blue-800 shadow-xl transition-all duration-400 hover:bg-blue-600">
            <div class="text-white p-8">
                <div class="font-bold text-4xl">
                    <h3>Creativity</h3>
                </div>
                <div class="text-lg mt-4">
                    <p>
                        Sometimes when you receive a design you have to think yourself, like creating some pages or sections. There were few moments when I got a bad feedback, either about my frontend or backend. I was creative enough to make it good. 
                    </p>
                </div>
            </div>
        </div>
        <div class="rounded-lg bg-blue-800 shadow-xl transition-all duration-400 hover:bg-blue-600">
            <div class="text-white p-8">
                <div class="font-bold text-4xl">
                    <h3>Always better</h3>
                </div>
                <div class="text-lg mt-4">
                    <p>
                        Everytime when I work on a project I look to improve constantly. I always ask myself how can I do better. Never go over because it works.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container relative overflow-hidden mx-auto w-full mt-36 py-20">
    <img src="<?php $this->assets('images/skills-background.jpg') ?>" class="absolute inset-0 -z-10 opacity-40"
        alt="Skills background">
    <div class="flex justify-center">
        <div class="text-5xl text-black font-bold">
            My <span class="text-blue-800">skills</span>
        </div>
    </div>
    <div class="grid grid-cols-2 items-center gap-6 mt-12" x-data>
        <template x-for="skill in $store.skills.list">
            <div class="space-y-4">
                <div class="flex justify-between">
                    <div class="text-2xl font-bold text-blue-800">
                        <span x-text="skill.lang"></span>
                    </div>
                    <div class="text-2xl font-bold text-blue-800">
                        <span x-text="skill.progress"></span>
                    </div>
                </div>
                <div class="h-4 bg-blue-800 mt-2" :style="`width:${skill.progress};`"></div>
            </div>
        </template>
    </div>
</section>
<section class="container mx-auto w-full mt-36">
    <div class="flex justify-center">
        <div class="text-5xl text-black font-bold">
            My <span class="text-blue-800">projects</span>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-6 mt-12">
        <div class="rounded overflow-hidden shadow-xl transition-all duration-300 hover:-translate-y-4">
            <a href="https://optimumdent.ro" target="_blank">
                <img src="<?php $this->assets('images/portfolio-project-optimum-dent.jpg') ?>"
                    alt="Project Optimum Dent">
            </a>
            <div class="p-4">
                <div class="font-bold text-2xl text-blue-800">
                    <h3>Optimum Dent</h3>
                </div>
                <div class="text-gray-600 mt-2">
                    Static website built with Jigsaw Tightenco
                </div>
            </div>
        </div>
        <div class="rounded overflow-hidden shadow-xl transition-all duration-300 hover:-translate-y-4">
            <a href="https://www.pavot.art" target="_blank">
                <img src="<?php $this->assets('images/portfolio-project-pavot-gallery.jpg') ?>"
                    alt="Project Pavot Gallery">
            </a>
            <div class="p-4">
                <div class="font-bold text-2xl text-blue-800">
                    <h3>Pavot Gallery</h3>
                </div>
                <div class="text-gray-600 mt-2">
                    Static website built with Jigsaw Tightenco. Sounds the same like the previous one, right? Check the
                    gallery page.
                </div>
            </div>
        </div>
        <div class="rounded overflow-hidden shadow-xl transition-all duration-300 hover:-translate-y-4">
            <a href="https://www.dcdental.ro" target="_blank">
                <img src="<?php $this->assets('images/portfolio-project-dc-dental.jpg') ?>" alt="Project DCdental">
            </a>
            <div class="p-4">
                <div class="font-bold text-2xl text-blue-800">
                    <h3>DCdental</h3>
                </div>
                <div class="text-gray-600 mt-2">
                    From static to dynamic. When I was assigned with this project it was a presentation website. My goal
                    was to move it to Laravel and create a blog page and to create a dynamic section for prices.
                </div>
            </div>
        </div>
        <div class="rounded overflow-hidden shadow-xl transition-all duration-300 hover:-translate-y-4">
            <a href="https://designx.ro/airoofs" target="_blank">
                <img src="<?php $this->assets('images/portfolio-project-airoofs.jpg') ?>" alt="Project Airoofs">
            </a>
            <div class="p-4">
                <div class="font-bold text-2xl text-blue-800">
                    <h3>Airoofs</h3>
                </div>
                <div class="text-gray-600 mt-2">
                    This one was built with Laravel 5. I had to make the transition to Laravel 8, then to create a blog
                    page and modify some pages.
                </div>
            </div>
        </div>
    </div>
</section>