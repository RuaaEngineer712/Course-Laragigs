@if (session('message'))
    <div class="message">
        {{ session('message') }}
    </div>

    <script>
        // Set a timeout to hide the message after 5 seconds
        setTimeout(function() {
            document.getElementById('message').style.display = 'none';
        }, 2000);
    </script>
@endif