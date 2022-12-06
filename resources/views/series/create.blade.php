<x-layout title="New Serie">
    <form action="/series/save" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="name">Name:</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>
        <button class="btn btn-primary" type="submit">Add</button>
    </form>
</x-layout>