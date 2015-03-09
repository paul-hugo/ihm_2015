<?php

namespace LocIHM\LocationBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * TypeVehiculeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TypeVehiculeRepository extends EntityRepository
{
	public function getTypeByCategoriesQueryBuilder($categorie)
	{
		$er = $this->createQueryBuilder('type')
			->where('type.categorie = :cat')
			->setParameter('cat', $categorie);

		return $er;
	}
}
