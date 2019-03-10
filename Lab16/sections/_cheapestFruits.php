
        <section class ="center allFruits">
            <div class="container">
                <h2>Buscar en catálogo por costo.</h2>
                <form action = "<?php echo 'https://'.$host.'/Lab16/php/get_cheapest_fruits.php'?>" method="post" target="cheapestFruits">
                    <div class = "input-field">
                        <input type="number" name="price"/>
                        <label for="name">Precio máximo</label>
                    </div>
                    <div class = "row">
                        <button type="submit" class="btn">
                            Buscar frutas
                        </button>
                        <button class = "btn"  onclick="document.querySelector('#cheapestFruits').classList.toggle('visible');">
                            Mostrar <i class="material-icons right">chevron_right</i>
                        </button>
                    </div>
                </form>
                <iframe name="cheapestFruits" class="itemsFrame" id="cheapestFruits"></iframe>
            </div>
        </section>