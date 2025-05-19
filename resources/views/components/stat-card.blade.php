<div class="bg-white p-4 rounded-lg shadow-lg">
    <h3 class="text-lg font-semibold">{{ $title }}</h3>
    <p class="text-sm text-gray-600">{{ $status }}</p>
    <div class="w-full bg-gray-200 h-2 rounded-full mt-2">
        <div class="bg-green-500 h-2 rounded-full" style="width: {{ $progress }}%"></div>
    </div>
</div>
