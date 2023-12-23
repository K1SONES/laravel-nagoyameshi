<a href="{{ route('restaurants.create') }}"> Create New Restaurant</a>

<table>
    <tr>
        <th>Restaurant_name</th>
        <th>Postal_code</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Opening_hour</th>
        <th>Regular_holiday</th>
        <th>Category ID</th>
        <th>Action</th>
    </tr>
    @foreach ($restaurants as $restaurant)
    <tr>
        <td>{{ $restaurant->restaurant_name }}</td>
        <td>{{ $restaurant->postal_code }}</td>
        <td>{{ $restaurant->address }}</td>
        <td>{{ $restaurant->phone }}</td>
        <td>{{ $restaurant->opening_hour }}</td>
        <td>{{ $restaurant->regular_holiday }}</td>
        <td>{{ $restaurant->category_id }}</td>
        <td>
            <a href="{{ route('restaurants.show',$restaurant->id) }}">show</a>
            <a href="{{ route('restaurants.edit',$restaurant->id) }}">edit</a>
        </td>
    </tr>
    @endforeach
</table>