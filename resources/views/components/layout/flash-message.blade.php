@if (session()->has('message'))
    <script>
        console.log("{{ session('message') }}")
    </script>

    @else
    <script>
        console.log("no msg")
    </script>
@endif