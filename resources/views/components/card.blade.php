<!-- resources\views\components\card.blade.php -->

<div class="bg-white rounded-lg shadow-md p-6">
    <h2 class="text-lg font-semibold mb-4">{{ $title }}</h2>
    <div>
        {{ $slot }}
    </div>
</div>
