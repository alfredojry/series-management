<x-layout title="Series">
    <a class="btn btn-dark mb-2" href="/series/create">Add Serie</a>
    <ul class="list-group">
        @foreach ( $series as $serie )
        <li class="list-group-item">{{ $serie->name }}</li>
        @endforeach
    </ul>
    <script>
        const series = {{ Js::from( $series ) }};
    </script>
</x-layout>