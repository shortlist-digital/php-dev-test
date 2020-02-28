<?php

namespace BackendApp\Repository;

interface RepositoryInterface
{
	public function getArticle(int $id) : array;
}
