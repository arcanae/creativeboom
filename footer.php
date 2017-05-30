<section class="newsletter">
        <div class="boxnewsletter">
            <p>Get the best of Creative Boom <br/>delivered to your inbox weekly</p>
            <form action="/ma-page-de-traitement" method="post">
                <input type="text" id="nom" placeholder="Your email..." />
                <button type="submit">Suscribe</button>
            </form>
        </div>
    </section>


    <!--social networks banner-->
    <section class="reseaux">
        <img src="images/reseaux.png" alt="réseaux">
    </section>



    <!--footer-->
    <footer>
        <div class="mentionslegales">
            <img src="images/avatar.svg" alt="avatar" class="avatar">
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Advertising &amp; Partnerships</a></li>
                <li><a href="#">How to Get Featured</a></li>
                <li><a href="#">Archive</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
            <p class="apropos">Creative Boom celebrates, inspires and supports the creative community.<br/> Launched in 2009, we love to explore
                the very best creativity and offer tips, <br/>resources and advice to help you succeed.
            </p>
            <p class="copyright">©2016 Creative Boom Ltd. Registered in England and Wales #07437294.</p>
            <p class="creator">Created by Boomerang PR</p>
        </div>
    </footer>
        <script>
        document.querySelector("#about").addEventListener("click", function() {
            location.href = "about.php";
        });
        document.querySelector("#about").addEventListener("mouseover", function() {
            document.querySelector("#about").style.cursor = 'pointer';
        });

        document.querySelector("#ressources").addEventListener("click", function() {
            location.href = "ressources.php";
        });

        document.querySelector("#features").addEventListener("click", function() {
            location.href = "features.php";
        });

        document.querySelector("#tips").addEventListener("click", function() {
            location.href = "tips.php";
        });

        document.querySelector("#inspiration").addEventListener("click", function() {
            location.href = "inspiration.php";
        });

        document.querySelector("#ressources").addEventListener("mouseover", function() {
            document.querySelector("#ressources").style.cursor = 'pointer';
        });
        document.querySelector("#features").addEventListener("mouseover", function() {
            document.querySelector("#features").style.cursor = 'pointer';
        });
        document.querySelector("#tips").addEventListener("mouseover", function() {
            document.querySelector("#tips").style.cursor = 'pointer';
        });
        document.querySelector("#inspiration").addEventListener("mouseover", function() {
            document.querySelector("#inspiration").style.cursor = 'pointer';
        });
        </script>