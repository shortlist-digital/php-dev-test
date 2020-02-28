<?php

namespace BackendApp\Repository;

class Repository implements RepositoryInterface
{
	public function getArticle(int $id) : array
	{
		//I am pretending to be a database, getting articles by id
		$json = file_get_contents(__DIR__ . '/articles/' . $id . '.json');

		return json_decode($json, true);
	}
}
