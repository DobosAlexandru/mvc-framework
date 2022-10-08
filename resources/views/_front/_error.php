<section class="flex flex-col items-center text-blue-700 py-48">
    <div class="text-4xl">
        <h3><?php echo $exception->getCode() ?></h3>
    </div>
    <div class="text-lg">
        <p><?php echo $exception->getMessage() ?></p>
    </div>
</section>