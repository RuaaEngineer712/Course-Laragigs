<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@vite('resources/css/app.css')

@auth
    <footer>
        <form action = {{ route('job.create') }}>
            <div class="foot">
                <p>Copyright @ 2022, All Right reserved</p>
                <button>Post Job</button>
            </div>
        </form>
    </div>
    </footer>
@endauth