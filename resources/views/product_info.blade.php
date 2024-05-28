<x-layouts heading="Product Details">
    <p>Product No : {{ $job_details['id'] }}</p>
    <p>Name : {{ $job_details['name'] }}</p>
    <p>Amount : {{ $job_details['price'] }}</p>
    <p> status : {{ $job_details['availability'] ? "Availability" : "Unavailable" }}</p>
    <a href="/products" class="text-red-600 font-bold"> Back Home</a>
</x-layouts>