<?php namespace App\Repositories;

interface RepositorySellerInterface
{
    public function all();

    public function create(array $data);

}
