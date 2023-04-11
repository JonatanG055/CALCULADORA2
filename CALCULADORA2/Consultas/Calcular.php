<?php
class Calculadora {
    public $n1;
    public $n2;

    public function __construct($num1, $num2) {
        $this->n1 = $num1;
        $this->n2 = $num2;
    }

    public function sumar() {
        return $this->n1 + $this->n2;
    }

    public function restar() {
        return $this->n1 - $this->n2;
    }

    public function multiplicar() {
        return $this->n1 * $this->n2;
    }

    public function dividir() {
        if ($this->n2 == 0) {
            return "Error: no se puede dividir entre cero.";
        } else {
            return $this->n1 / $this->n2;
        }
    }
}

$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$operacion = $_POST['operacion'];

$calculadora = new Calculadora($num1, $num2);

switch ($operacion) {
    case 'suma':
        $resultado = $calculadora->sumar();
        break;
    case 'resta':
        $resultado = $calculadora->restar();
        break;
    case 'multiplicacion':
        $resultado = $calculadora->multiplicar();
        break;
    case 'division':
        $resultado = $calculadora->dividir();
        break;
    default:
        $resultado = "Error: operación no válida.";
}

echo "El resultado de la operación es: " . $resultado;
?>
