
        <section class ="center allFruits">
            <div class="container">
                <h2>Buscar en catálogo por nombre.</h2>
                <form action = "<?php echo 'https://'.$host.'/Lab16/php/get_fruits_by_name.php'?>" method="post" target="fruitsByName">
                    <div class = "input-field">
                        <input type="text" name="name"/>
                        <label for="name">Nombre de la fruta</label>
                    </div>
                    <div class = "row">
                        <button type="submit" class="btn">
                            Buscar frutas
                        </button>
                        <button class = "btn"  onclick="document.querySelector('#fruitsByName').classList.toggle('visible');">
                            Mostrar <i class="material-icons right">chevron_right</i>
                        </button>
                    </div>
                </form>
                <iframe name="fruitsByName" class="itemsFrame" id="fruitsByName"></iframe>
            </div>
        </section>