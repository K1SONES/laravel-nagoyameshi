<div>
    <h2>Show Restaurant</h2>
</div>
<div>
    <a href="{{ route('restaurants.index') }}">back</a>
</div>

<div>
    <strong>Restaurant_name:</strong>   
    {{ $restaurant->restaurant_name }}
</div>
<div>
    <strong>Postal_code:</strong>
    {{ $restaurant->postal_code }}
</div>
<div>
    <strong>address:</strong>   
    {{ $restaurant->address }}
</div>
<div>
    <strong>Phone:</strong>
    {{ $restaurant->phone }}
</div>
<div>
    <strong>Opening_hour:</strong>
    {{ $restaurant->opening_hour }}
</div>
<div>
    <strong>regular_holiday:</strong>
    {{ $restaurant->regular_holiday }}
</div>