<?php  namespace App\Repos;

interface OddsRepoInterface {
	public function getPaginated(array $params);

}