    <footer class="footer">
        <div class="title-footer">
            <h2 class="title index__title">
                La Place Rouge
            </h2>
        </div>
        <div class="container footer__div">
            <div class="footer__div-where">
                <span class="footer__text">51 Rue Carnot</span><br />
                <span class="footer__text">70200</span><br />
                <span class="footer__text">Lure</span><br />
            </div>
            <div class="footer__div-where">
                <span class="footer__text">Ouvert du Mardi au Samedi</span><br />
                <span class="footer__text">12h - 14h</span><br />
                <span class="footer__text">19h - 22h</span><br />
            </div>
        </div>
        <div class="container footer__div-sm">
            <span class="footer__text footer__text-red">Retrouvez nous sur nos réseaux sociaux :</span><br />
            <ul class="menu__list list__sm">
                <li class="menu__item-white">
                    <a class="menu-btn" href="https://www.facebook.com/laplacerouge70/?locale=fr_FR">
                        <i class="bi bi-facebook"></i>
                    </a>
                </li>
                <li class="menu__item-white">
                    <a class="menu-btn" href="https://www.instagram.com/laplacerouge70/?hl=fr">
                        <i class="bi bi-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="container footer__link">
            <span class="text-white dev__thx">2025. Créé avec Passion par Louise R.</span>
            <div class="footer__item-white footer__link-link ">
                <a href="mention.php">Mentions Légales</a>
                <a href="mention.php">Politique confidentialité</a>
            </div>
        </div>
    </footer>

   <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          selectable: true,
          height: 555,
          initialView: 'dayGridMonth',
          firstDay: 1,
          locale: 'fr',
          events: [
          ]
        });
        calendar.render();
      });

    </script>

<?php wp_footer(); ?>
</body>
</html>