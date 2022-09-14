
<!-- footer -->
<div class="footer container-fluid">
    <div class="row text-center justify-content-center " >
        <div class="col  fw-bold border-bottom border-secondary">
            <p> N'hésitez pas à partager cette page:</p>

            <div class="social ">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-twitter"></i>
                <i class="bi bi-linkedin"></i>
                <i class="bi bi-envelope-fill"></i>
            </div>
            <p>Les sites du gouvernement</p>
            <ul class="link">
                <li>elysee.fr</li>
                <li>service-public.fr</li>
                <li>legifrance.gouv.fr</li>
                <li>data.gouv.fr</li>
                <li>france.fr</li>
            </ul>


        </div>
    </div>
    <!-- menu -->
    <div class="row ">
        <div class="col">
            <nav class="navbar navbar-expand">
                <div class="container-fluid text-center">
                    <div class="row collapse navbar-collapse" id="navbarSupportedContent">
                        <?php wp_nav_menu([
                            'theme_location'=>'footer',
                            'container' => false,
                            'menu_class' => 'row navbar-nav mb-2 mb-lg-0 link'
                        ]) ?>

                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>
</html>