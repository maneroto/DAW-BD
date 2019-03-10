
        <section class ="center allFruits">
            <div class="container">
                <h2>Visualizar el catálogo completo.</h2>
                <form action = "<?php echo 'https://'.$host.'/Lab16/php/get_fruits.php'?>" method="post" target="allFruits">
                    <button type="submit" class="btn" onclick="document.querySelector('#allFruits').classList.toggle('visible');">
                        Ver todas las frutas<i class="material-icons right">chevron_right</i>
                    </button>
                </form>
                <iframe name="allFruits" class="itemsFrame" id = "allFruits"></iframe>
            </div>
        </section>