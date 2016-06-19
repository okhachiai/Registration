<?php

namespace ReregistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Academie
 *
 * @ORM\Table(name="academie")
 * @ORM\Entity(repositoryClass="ReregistrationBundle\Repository\AcademieRepository")
 */
class Academie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity="ReregistrationBundle\Entity\Etudiant", mappedBy="academie")
     */
    private $eleves;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Academie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eleves = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add elefe
     *
     * @param \ReregistrationBundle\Entity\Etudiant $elefe
     *
     * @return Academie
     */
    public function addElefe(\ReregistrationBundle\Entity\Etudiant $elefe)
    {
        $this->eleves[] = $elefe;

        return $this;
    }

    /**
     * Remove elefe
     *
     * @param \ReregistrationBundle\Entity\Etudiant $elefe
     */
    public function removeElefe(\ReregistrationBundle\Entity\Etudiant $elefe)
    {
        $this->eleves->removeElement($elefe);
    }

    /**
     * Get eleves
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEleves()
    {
        return $this->eleves;
    }
}
