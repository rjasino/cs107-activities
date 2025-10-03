<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    @foreach($customers as $customer)
    <div>
        <h2>{{ $customer->username }}</h2>
        <p>Email: {{ $customer->email }}</p>
        <p>Phone: {{ $customer->phone_number }}</p>
    </div>
    @endforeach
</div>