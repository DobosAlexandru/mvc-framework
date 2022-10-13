<div class="space-x-8 text-white">
    <a href="/" class="<?php echo $this->requestIs('/') ? 'border-b-2 border-white py-1' : false ?>">
        Home
    </a>
    <a href="/about" class="<?php echo $this->requestIs('/about') ? 'border-b-2 border-white py-1' : false ?>">
        About
    </a>
    <a href="/contact"
        class="<?php echo $this->requestIs('/contact') ? 'border-b-2 border-white py-1' : false ?>">
        Contact
    </a>
</div>