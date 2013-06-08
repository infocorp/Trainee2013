<?php

namespace Infocorp\DataAccess;

use \PDO;
use Infocorp\Entity\Trainee;

class TraineeAccess
{
	/**
	 * @var PDO $pdo
	 */
	protected $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function insert(Trainee $trainee)
	{
		$stm = $this->pdo->prepare('
			INSERT INTO
				trainee (
					nome, 
					email,
					telefone,
					curso,
					pontosFracos,
					pontosFortes,
					experiencia,
					area
				) VALUES (
					:nome, 
					:email,
					:telefone,
					:curso,
					:pontosFracos,
					:pontosFortes,
					:experiencia,
					:area
				)
		');

		$stm->bindParam(':nome', $trainee->getName(), PDO::PARAM_STR);
		$stm->bindParam(':email', $trainee->getEmail(), PDO::PARAM_STR);
		$stm->bindParam(':telefone', $trainee->getPhone(), PDO::PARAM_STR);
		$stm->bindParam(':curso', $trainee->getCourse(), PDO::PARAM_STR);
		$stm->bindParam(':pontosFracos', $trainee->getPontosFracos(), PDO::PARAM_STR);
		$stm->bindParam(':pontosFortes', $trainee->getPontosFortes(), PDO::PARAM_STR);
		$stm->bindParam(':experiencia', $trainee->getExperiences(), PDO::PARAM_STR);
		$stm->bindParam(':area', $trainee->getField(), PDO::PARAM_STR);

		if ($stm->execute()) {
			return (int) $this->pdo->lastInsertId();
		}

		throw new \RuntimeException('Erro ao cadastrar trainee');
	}
}