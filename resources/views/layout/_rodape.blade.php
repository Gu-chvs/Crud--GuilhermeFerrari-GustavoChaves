        </div>
    </main>

    <!-- Footer -->
    <footer class="page-footer deep-orange darken-2">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">ProjCursos</h5>
                    <p class="grey-text text-lighten-4">Sistema de gerenciamento de cursos — UNESP/CTI</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">© {{ date('Y') }} ProjCursos</div>
        </div>
    </footer>

    <!-- Materialize JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inicializa sidenav mobile
            var elems = document.querySelectorAll('.sidenav');
            M.Sidenav.init(elems);

            // Inicializa selects
            var selects = document.querySelectorAll('select');
            M.FormSelect.init(selects);

            // Inicializa tooltips
            var tooltips = document.querySelectorAll('.tooltipped');
            M.Tooltip.init(tooltips);
        });
    </script>

</body>
</html>
