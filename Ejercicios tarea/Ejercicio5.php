<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Armas</title>
</head>
<body>
  <?php
    // Clase Arma
    class Arma {
      protected $balas = 0;

      public function recargar() {
        if ($this->balas == 0) {
          $this->balas = 8;
        }
      }

      public function disparar() {
        if ($this->balas > 0) {
          $this->balas--;
        }
      }

      public function mostrar() {
        $nombre = get_class($this);
        echo "<fieldset>";
        echo "<legend>$nombre</legend>";
        echo "<input type='number' id='$nombre-balas' name='$nombre-balas' value='{$this->balas}'>";
        echo "<button type='submit' name='{$nombre}_recargar' value=''>Recargar</button>";
        echo "<button type='submit' name='{$nombre}_disparar' value=''>Disparar</button>";
        echo "</fieldset>";
      }
    }

    // Clase Pistola
    class Pistola extends Arma {}

    // Clase Escopeta
    class Escopeta extends Arma {}

    // Clase Rifle
    class Rifle extends Arma {}

    // Clase Ametralladoras.

    class Ametralladora extends Arma {}

    // Crear objetos
    $pistola = new Pistola();
    $escopeta = new Escopeta();
    $rifle = new Rifle();
    $ametralladora = new Ametralladora();

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST["Pistola_recargar"])) {
        $pistola->recargar();
      } else if (isset($_POST["Pistola_disparar"])) {
        $pistola->disparar();
      } else if (isset($_POST["Escopeta_recargar"])) {
        $escopeta->recargar();
      } else if (isset($_POST["Escopeta_disparar"])) {
        $escopeta->disparar();
      } else if (isset($_POST["Rifle_recargar"])) {
        $rifle->recargar();
      } else if (isset($_POST["Rifle_disparar"])) {
        $rifle->disparar();
      } else if (isset($_POST["Ametralladora_recargar"])) {
        $ametralladora->recargar();
      } else if (isset($_POST["Ametralladora_disparar"])) {
        $ametralladora->disparar();
      }
    }

    // Mostrar formulario
    echo "<form method='post'>";
    $pistola->mostrar();
    $escopeta->mostrar();
    $rifle->mostrar();
    $ametralladora->mostrar();
    echo "</form>";
  ?>
</body>
</html>
