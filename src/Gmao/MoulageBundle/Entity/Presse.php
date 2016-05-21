<?php

namespace Gmao\MoulageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Presse
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gmao\MoulageBundle\Repository\PresseRepository")
 */
class Presse
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
     * @ORM\Column(name="nomPresse", type="string", length=255)
     * @Assert\NotBlank(message="Merci de renseigner le champ Presse.")
     */
    private $nomPresse;

    /**
     * @var bool
     *
     * @ORM\Column(name="etatPresse", type="boolean")
     */
    private $etatPresse;

    /**
      * @ORM\ManyToOne(targetEntity="Moule",
      * inversedBy="presses")
      * @ORM\JoinColumn(nullable=false)
      */
      private $moules;


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
     * Set nomPresse
     *
     * @param string $nomPresse
     *
     * @return Presse
     */
    public function setNomPresse($nomPresse)
    {
        $this->nomPresse = $nomPresse;

        return $this;
    }

    /**
     * Get nomPresse
     *
     * @return string
     */
    public function getNomPresse()
    {
        return $this->nomPresse;
    }

    /**
     * Set etatPresse
     *
     * @param boolean $etatPresse
     *
     * @return Presse
     */
    public function setEtatPresse($etatPresse)
    {
        $this->etatPresse = $etatPresse;

        return $this;
    }

    /**
     * Get etatPresse
     *
     * @return bool
     */
    public function getEtatPresse()
    {
        return $this->etatPresse;
    }

    /**
     * Set moules
     *
     * @param \Gmao\MoulageBundle\Entity\Moule $moules
     *
     * @return Presse
     */
    public function setMoules(\Gmao\MoulageBundle\Entity\Moule $moules)
    {
        $this->moules = $moules;

        return $this;
    }

    /**
     * Get moules
     *
     * @return \Gmao\MoulageBundle\Entity\Moule
     */
    public function getMoules()
    {
        return $this->moules;
    }
}
