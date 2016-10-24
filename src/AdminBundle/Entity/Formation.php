<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\FormationRepository")

 */
class Formation
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
     * @ORM\Column(name="nom_long", type="string", length=255)
     * @ORM\OneToMany(targetEntity="Agenda", mappedBy="formation")
     * 
     */
    private $nomLong;


    /**
     * @var string
     * @ORM\Column(name="nom_court", type="string", length=255)
     */
    private $nomCourt;



    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="string", length=255)
     */
    private $descriptif;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set nomCourt
     *
     * @param string $nomCourt
     * @return Formation
     */
    public function setNomCourt($nomCourt)
    {
        $this->nomCourt = $nomCourt;

        return $this;
    }

    /**
     * Get nomCourt
     *
     * @return string
     */
    public function getNomCourt()
    {
        return $this->nomCourt;
    }



    /**
     * Set descriptif
     *
     * @param string $descriptif
     * @return Formation
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nomLong = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * Add nomLong
     *
     * @param \AdminBundle\Entity\Formation $nomLong
     * @return Formation
     */
    public function addNomLong(\AdminBundle\Entity\Formation $nomLong)
    {
        $this->nomLong[] = $nomLong;

        return $this;
    }

    /**
     * Remove nomLong
     *
     * @param \AdminBundle\Entity\Formation $nomLong
     */
    public function removeNomLong(\AdminBundle\Entity\Formation $nomLong)
    {
        $this->nomLong->removeElement($nomLong);
    }

    /**
     * Get nomLong
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNomLong()
    {
        return $this->nomLong;
    }

    /**
     * Set nomLong
     *
     * @param string $nomCourt
     * @return Formation
     */
    public function setNomLong($nomLong)
    {
        $this->nomLong = $nomLong;

        return $this;
    }


}
