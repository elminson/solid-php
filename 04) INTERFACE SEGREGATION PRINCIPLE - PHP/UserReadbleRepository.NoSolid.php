<?php


class UserReadbleRepository implements IRepository
{
	// Pues vamos a comenzar a arrojar excepciones para los métodos que no vamos a utilizar.
	public function create(object $obj)
	{
		throw new Exception("Cannont implemented");
	}

	public function remove(int $id)
	{
		throw new Exception("Cannont implemented");
	}

	public function update(int $id, object $obj)
	{
		throw new Exception("Cannont implemented");
	}

	public function get(int $id)
	{
		// ToDo
	}

	public function getAll()
	{
		// ToDo
	}
}
