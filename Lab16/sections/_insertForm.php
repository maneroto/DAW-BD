
        <section>
            <div class = "container">
                <h1>Registro de fruta.</h1>
                <form method = "post" action = "<?php echo 'https://'.$host.'/Lab16/php/insert_fruit.php'?>" target = "insertResult">
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
                            <input type="text" name="country"/>
                            <label for="country">País</label>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col">
                            <button type="submit" class = "waves-effect waves-light btn">Registrar</button>
                        </div>
                        <div class = "col">
                            <iframe class = "updateFrame" id = "insertResult" name = "insertResult" ></iframe>
                        </div>
                    </div>
                </form>
            </div>
        </section>