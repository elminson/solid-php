<?php

/**
 *
 * NO VEO EL PROBLEMA
 * EL problema esta en que la clase tortuga no puede implementar correctamente el comportamiento porque no puede
 * correr ni cazar y lo que solemos hacer en estos casos es arrojar excepciones diciendo que el método no puede ser implementando.
 */

/**
 * Una posible solución es hacerlo a través de interfaces para definir mejor el comportamiento de una animal.
 */
class Turtle extends Animal
{

	public function run()
	: void
	{

		throw new Exception("Cannot be implemented");
	}

	public function hunt()
	: void
	{

		throw new Exception("Cannot be implemented");
	}
}