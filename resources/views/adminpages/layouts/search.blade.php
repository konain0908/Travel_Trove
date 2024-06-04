@if($results->count() > 0)
    <ul>
        @foreach($results as $result)
            <li>{{ $result->city }}</li>
            <!-- Display other attributes as needed -->
        @endforeach
    </ul>
@else
    <p>No results found</p>
@endif
