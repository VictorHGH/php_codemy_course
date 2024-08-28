<?php

declare(strict_types=1);

class Persona {

	public function __construct(
		private string $nombre,
		private int $edad,
	) {
	}

	public function getNombre(): string {
		return $this->nombre;
	}

	public function getEdad(): int {
		return $this->edad;
	}
}

class Empleado extends Persona {
	public function __construct(
		private string $nombre,
		private int $edad,
		private string $puesto,
	) {
		parent::__construct($nombre, $edad);
	}

	public function getPuesto(): string {
		return $this->puesto;
	}
}


$empleados = [];

$empleados[] = new Empleado('Victor', 27, 'programador');
$empleados[] = new Empleado('Juan', 30, 'diseñador');

print($empleados[1]);

for ($i = 0; $i < count($empleados); $i++) {
	print($empleados[$i]->getNombre() . "\n");
	print($empleados[$i]->getEdad() . "\n");
	print($empleados[$i]->getPuesto() . "\n");
}

?>

<h1> Herencia en PHP </h1>

<ul>
	<?php foreach ($empleados as $empleado): ?>
		<li>
			<p>Nombre: <?= $empleado->getNombre() ?></p>
			<p>Edad: <?= $empleado->getEdad() ?></p>
			<p>Puesto: <?= $empleado->getPuesto() ?></p>
		</li>
	<?php endforeach; ?>
</ul>
