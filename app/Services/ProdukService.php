<?php

namespace App\Services;
use App\Contracts\ProdukRepositoryInterface;

class ProdukService
{
    protected $produkRepository;
   public function __construct(ProdukRepositoryInterface $produkRepository)
    {
        $this->produkRepository = $produkRepository;
    }
    public function getAll()
    {
        return $this->produkRepository->getAll();
    }
    public function getById($id)
    {
        return $this->produkRepository->getById($id);
    }
    public function create(array $data)
    {
        return $this->produkRepository->create($data);
    }
    public function update($id, array $data)
    {
        return $this->produkRepository->update($id, $data);
    }
    public function delete($id)
    {
        return $this->produkRepository->delete($id);
      
    }
}