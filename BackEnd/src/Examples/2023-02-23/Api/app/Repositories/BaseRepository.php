<?php

namespace App\Repositories;

class BaseRepository
{
	protected array $data = [];

	protected string $name = 'Item';

	function __construct()
	{
		if (file_exists(static::PATH)) {
			$data = file_get_contents(static::PATH);
			
			$data = json_decode($data, TRUE);

			if ($data !== null && json_last_error() === JSON_ERROR_NONE) {
				$this->data = $data;
			}
		}
	}

	function __destruct()
	{
		file_put_contents(static::PATH, json_encode($this->data, JSON_PRETTY_PRINT));
	}

	public function fetchAll() : array
	{
		return $this->data;
	}

	public function find(string $id) : array
	{
		return $this->findBy('id', $id);
	}

	public function store(array $data) : void
	{
		$this->data[$data['id']] = $data;
	}

	public function delete(string $id = NULL) : void
	{
		$this->deleteBy('id', $id);
	}

	public function existBy(string $column, string $value) : bool
	{
		$data = array_column($this->data, $column);

		return in_array($value, $data);
	}

	public function findBy(string $column, string $value) : array
	{
		foreach ($this->data as $item) {
			if (array_key_exists($column, $item) && $item[$column] == $value) {
				return $item;
			}
		}
	}

	public function deleteBy(string $column, string $value) : void
	{
		foreach ($this->data as $id => $item) {
			if (array_key_exists($column, $item) && $item[$column] == $value) {
				unset($this->data[$id]);
				break;
			}
		}
	}

	public function update(array $data)
	{
		if (array_key_exists('id', $data) && array_key_exists($data['id'], $this->data)) {
			$this->data[$data['id']] = $data;

			return TRUE;
		}

		return FALSE;
	}
}