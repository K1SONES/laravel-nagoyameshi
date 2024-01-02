<div>
    <h2>Add New Restaurant</h2>
</div>
<div>
    <a href="{{ route('restaurants.index') }}">back</a> 
</div>

<form action="{{ route('restaurants.store') }}" method="POST">
    @csrf

    <div>
        <strong>Restaurant_name:</strong>
        <input type="text" name="name" placeholder="NEWRestaurant">
    </div>
    <div>
        <strong>Postal_code:</strong>
        <input type="text" name="postalCode" placeholder="郵便番号">
    </div>
    <div>
        <strong>address:</strong>
        <input type="text" name="address" placeholder="住所">
    </div>
    <div>
        <strong>Phone:</strong>
        <input type="number" name="Phone" placeholder="電話番号(ハイフン無し)">
    </div>
    <div>
        <strong>Opening_hour:</strong>
        <input type="text" name="Opening_hour" placeholder="営業時間">
    </div>
    <div>
        <strong>regular_holiday:</strong>
        <input type="text" name="regular_holiday" placeholder="定休日">
    </div>
    <div>
        <strong>Category:</strong>
        <select name="category_id">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->restaurant_name }}</option>
        @endforeach
        </select>   
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>