<?php include "./controller/calculationController.php"; ?>

<form method="post">
  <h2>Calculadora Edad</h2>
  <div class="form__row">
    <div>
      <label for="person_name">Digita tu nombre</label>
      <input id="person_name" type="text" name="person_name" placeholder="Sonia">
    </div>
    <div>
      <label for="birth_date">Digita tu fecha nacimiento</label>
      <input id="birth_date" type="date" name="birth_date" >
    </div>
  </div>
  <button>Calcular</button>
</form>