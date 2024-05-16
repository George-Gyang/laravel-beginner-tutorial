<x-layouts heading="Product Dashboard">
    {{-- <h3 >
        Product Dashboard
    </h3> --}}
    <h1>Products Page</h1>
    <div>
        <table class="table-auto">
            <thead>
                <tr>
                    <th>Song</th>
                    <th>Artist</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                    <tr class="hover:underline">
                        <td>{{ $item['name'] }}</td>
                        <td><b class="ml-4">{{ $item['price'] }}</b></td>
                        <td> <button class="bg-green-600 ml-4 p-2 w-24 rounded-lg mb-4	">{{ $item['availability']? "available" : "unavailable" }}</button></td>
                        <td><a href="products/{{ $item['id'] }}"> view</a></b></td>
                    </tr>
                @endforeach
        </table>
    </div>
</x-layouts>
