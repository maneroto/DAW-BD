        <section>
            <div class = "container">
                <h1>Eliminar fruta.</h1>
                <form method = "post" action = "<?php echo 'https://'.$host.'/Lab16/php/delete_by_name.php'?>" target ="deleteResult">
                    <div class="row">
                        <div class= "input-field">
                            <input id="name" type="text" maxlength="50" name = "name">
                            <label for="name">Nombre de la fruta</label>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col">
                            <button type="submit" class = "waves-effect waves-light btn">Eliminar</button>
                        </div>
                        <div class = "col">
                            <iframe class = "updateFrame" id = "deleteResult" name = "deleteResult" ></iframe>
                        </div>
                    </div>
                </form>
            </div>
        </section>