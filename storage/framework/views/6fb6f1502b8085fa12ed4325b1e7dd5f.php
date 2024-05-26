



<?php
    // do what ever you want
?>

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['active' => false, 'type' => 'a']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['active' => false, 'type' => 'a']); ?>
<?php foreach (array_filter((['active' => false, 'type' => 'a']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>






<?php if($type == 'a'): ?>
    <a <?php echo e($attributes); ?>

        class="<?php echo e($active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'); ?>

    rounded-md px-3 py-2 text-sm font-medium"
        aria-current="<?php echo e($active ? 'page' : 'false'); ?>">
        <?php echo e($slot); ?>

    </a>
<?php else: ?>
    <button <?php echo e($attributes); ?>

        class="<?php echo e($active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'); ?>

    rounded-md px-3 py-2 text-sm font-medium"
        aria-current="<?php echo e($active ? 'page' : 'false'); ?>">
        <?php echo e($slot); ?>

    </button>
<?php endif; ?>
<?php /**PATH C:\laragon\www\example\resources\views/components/nav-link.blade.php ENDPATH**/ ?>