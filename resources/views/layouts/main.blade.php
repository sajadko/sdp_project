@include('layouts.header')

<div class="container">

    {{ $slot }}

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <small class="d-block mb-3 text-muted">© 2022</small>
                <small class="d-block mb-3 text-muted">All rights reserved for SDP - Software Design Principles
                    University Project</small>
                <small class="d-block mb-3 text-muted">
                    <b>
                        <a href="https://github.com/sajadko">Sajad Kolahchi</a> -
                        <a href="https://github.com/MohadesehRastegar">Mohadeseh Rastegar</a> -
                        <a href="https://github.com/sajad-zahedi">Sajad Zahedi </a> -
                        <a href="https://github.com/Maedehjafari">Maedeh Jafari </a>
                    </b>
                </small>
            </div>
        </div>
    </footer>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
