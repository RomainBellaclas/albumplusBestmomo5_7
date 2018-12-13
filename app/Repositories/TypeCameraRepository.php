<?php
namespace App\Repositories;
use App\Models\TypeCamera;
class TypeCameraRepository extends BaseRepository
{
    public function __construct(TypeCamera $typecamera)
    {
        $this->model = $typecamera;
    }
}