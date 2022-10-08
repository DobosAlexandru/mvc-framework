<?php 

$this->title = 'Home';
$this->meta_description = 'Lorem ipsum dolorem';
?>

<section class="container mt-20">
    <div class="grid grid-cols-2">
        <div class="flex flex-col items-start">
            <div class="overflow-hidden mb-4">
                <img src="<?php $this->assets('images/profile_pic.jpg') ?>" class="rounded-full object-cover h-16 w-16"
                    alt="Portrait">
            </div>
            <div class="text-left">
                <div class="text-5xl text-blue-800 font-bold">
                    <h1>Junior Web Developer</h1>
                </div>
                <div class="text-lg text-gray-600 mt-2">
                    lorem ipsum dolorem
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <div class="text-xl font-bold">
            
            </div>
        </div>
    </div>
</section>