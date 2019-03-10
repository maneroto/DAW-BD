
        <section>
            <div class = "container">
                <h1>Actualizar fruta.</h1>
                <form method = "post" action = "<?php echo 'https://'.$host.'/Lab16/php/update_by_name.php'?>" target = "updateResult">
                    <div class="row">
                        <div class= "input-field">
                            <input type="text" maxlength="50" name = "name">
                            <label for="name">Nombre de la fruta</label>
                        </div>
                    </div>
                    <div class = "row">
                        <div class="input-field col s6">
                            <input type="number" name = "units">
                            <label for="units">Unidades</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="number" name="quantity"/>
                            <label for="quantity">Cantidad</label>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "input-field col s6">
                            <input type="number" name="price"/>
                            <label for="price">Precio</label>
                        </div>
                        <div class = "input-field col s6">
                            <input type="text" name="country" maxlength="100"/>
                            <label for="country">País</label>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col">
                            <button type="submit" class = "waves-effect waves-light btn">Actualizar</button>
                        </div>
                        <div class = "col">
                            <iframe class = "updateFrame" id = "updateResult" name = "updateResult" ></iframe>
                        </div>
                    </div>
                </form>
            </div>
        </section>