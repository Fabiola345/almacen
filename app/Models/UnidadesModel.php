<?php namespace App\Models;

use CodeIgniter\Model;

class UnidadesModel extends Model
{
    protected $table      = 'unidadesdemedida';
    protected $primaryKey = 'clave';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['clave','descripcion'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}