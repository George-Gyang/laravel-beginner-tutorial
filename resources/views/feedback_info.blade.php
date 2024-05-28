<x-layouts heading="Comment Details">
    <div class="w-1/3 p-3 bg-grey-400 shadow">
        <p><b>Commentor</b> : {{ $comment['name'] }}</p>
        <p><b>Comment</b> : {{ $comment['feedback'] }}</p>
        <a href="/feedback" class="text-red-600 mt-5 inline-block hover:underline font-bold"> Back Home</a>
    </div>
</x-layouts>
