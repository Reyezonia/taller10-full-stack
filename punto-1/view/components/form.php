<?php include "./controller/calculadoraController.php"; ?>

<form method="post">
  <h2>Calculadora</h2>
    <div class="form__row">
      <div>
        <label for="first_number">Primer numero</label>
        <input id="first_number" type="text" name="first_number" placeholder="500">
      </div>
      <div>
        <label for="second_number">Segundo numero</label>
        <input id="second_number" type="text" name="second_number" placeholder="500">
      </div>
      <div>
        <label for="operacion">Operacion a realizar</label>
        <input id="operacion" type="text" name="operacion" placeholder="+  -  *  /">
      </div>
    </div>
  <button>Operar</button>
</form>