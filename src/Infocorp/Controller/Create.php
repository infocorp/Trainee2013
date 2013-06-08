<?php

namespace Infocorp\Controller;

use Slim\Http\Request;
use Infocorp\Entity\Trainee;
use Infocorp\DataAccess\TraineeAccess;
use \PDO;

class Create 
{
    protected $request;

    protected $pdo;

    public function __construct(Request $request, PDO $pdo)
    {
        $this->request = $request;
        $this->pdo 	   = $pdo;
    }

    public function create()
    {
		$trainee = new Trainee();
		$trainee
			->setName($this->request->post('nome'))
			->setEmail($this->request->post('email'))
			->setPhone($this->request->post('telefone'))
			->setCourse($this->request->post('curso'))
			->setPontosFracos($this->request->post('pontosFracos'))
			->setPontosFortes($this->request->post('pontosFortes'))
			->setExperiences($this->request->post('experiencia'))
			->setField($this->request->post('area'))
		;

		$access = new TraineeAccess($this->pdo);
		$access->insert($trainee);
    }
}