<?php include "./controller/edadController.php"; ?>

<form method="post">
  <h2>Calculadora Edad</h2>
  <div class="form__row">
    <div>
      <label for="person_name">Digita tu nombre</label>
      <input id="person_name" type="text" name="person_name" placeholder="Sonia">
    </div>
    <div>
      <label for="person_age">Digita tu edad</label>
      <input id="person_age" type="text" name="person_age" placeholder="15">
    </div>
  </div>
  <button>Calcular</button>
</form>