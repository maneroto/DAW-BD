<h2>Registra un incidente</h2>
<div class="row">
    <form class="col s12" method="POST" name="registerForm" id="registerForm">
      <div class="row">
          <div class="input-field col s12">
            <select name = "lugar" id = "lugar">
              <option value="" disabled selected>Selecciona una opción</option>
            </select>
            <label>¿Dónde es el incidente?</label>
          </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <select name = "tipo" id = "tipo">
              <option value="" disabled selected>Selecciona una opción</option>
              <option value="1">Falla eléctrica</option>
              <option value="2">Fuga de herbívoro</option>
              <option value="3">Fuga de Velociraptors</option>
              <option value="4">Fuga de Trex</option>
              <option value="5">Robo de ADN</option>
              <option value="6">Auto descompuesto</option>
              <option value="7">Visitantes en zona no autorizada</option>
            </select>
            <label>¿Cuál es el incidente?</label>
        </div>
      </div>
      <div class="row">
          <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
                <i class="material-icons right">send</i>
          </button>
      </div>
    </form>
  </div>
  <a href="visualizarIncidente.php" class="btn">Visualizar incidente</a>
  <?php $js.='<script type="text/javascript" src = "'.$httpProtocol.$host.$url.'js/initRegister.js"></script>';?>
  <?php $js.='<script type="text/javascript" src = "'.$httpProtocol.$host.$url.'js/initSelect.js"></script>';?>
