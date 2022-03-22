<?php

interface IRepository
{
	function update();
	function create();
	function remove(int $id);
	function get(int $id);
	function getAll();
}