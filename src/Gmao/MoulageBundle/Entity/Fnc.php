<?php

namespace Gmao\MoulageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fnc
 *
 * @ORM\Table(name="fnc")
 * @ORM\Entity(repositoryClass="Gmao\MoulageBundle\Repository\FncRepository")
 */
class Fnc
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
     * @ORM\Column(name="dimDefaut", type="text")
     */
    private $dimDefaut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;
    
    /**
     * @ORM\ManyToOne(targetEntity="Moule", inversedBy="fncs_moule")
     * @ORM\JoinColumn(name="moule_id", referencedColumnName="id")
     */
     private $moule_fnc;
     
     /**
      * @ORM\ManyToOne(targetEntity="Presse", inversedBy="fncs_presse")
      * @ORM\JoinColumn(name="presse_id", referencedColumnName="id")
      */
     private $presse_fnc;
     
     /**
      * @ORM\ManyToOne(targetEntity="Reference", inversedBy="fncs_reference")
      * @ORM\JoinColumn(name="reference_id", referencedColumnName="id")
      */
     private $reference_fnc;
     
     /**
      * @ORM\ManyToOne(targetEntity="Equipe", inversedBy="fncs_equipe")
      * @ORM\JoinColumn(name="equipe_id", referencedColumnName="id")
      */
     private $equipe_fnc;
     
     /**
      * @ORM\OneToMany(targetEntity="Defaut", mappedBy="fnc_defaut")
      */
     private $defauts_fnc;

  
     
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
     * Set dimDefaut
     *
     * @param string $dimDefaut
     *
     * @return Fnc
     */
    public function setDimDefaut($dimDefaut)
    {
        $this->dimDefaut = $dimDefaut;
    
        return $this;
    }

    /**
     * Get dimDefaut
     *
     * @return string
     */
    public function getDimDefaut()
    {
        return $this->dimDefaut;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Fnc
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    
        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set mouleFnc
     *
     * @param \Gmao\MoulageBundle\Entity\Moule $mouleFnc
     *
     * @return Fnc
     */
    public function setMouleFnc(\Gmao\MoulageBundle\Entity\Moule $mouleFnc = null)
    {
        $this->moule_fnc = $mouleFnc;
    
        return $this;
    }

    /**
     * Get mouleFnc
     *
     * @return \Gmao\MoulageBundle\Entity\Moule
     */
    public function getMouleFnc()
    {
        return $this->moule_fnc;
    }

    /**
     * Set presseFnc
     *
     * @param \Gmao\MoulageBundle\Entity\Presse $presseFnc
     *
     * @return Fnc
     */
    public function setPresseFnc(\Gmao\MoulageBundle\Entity\Presse $presseFnc = null)
    {
        $this->presse_fnc = $presseFnc;
    
        return $this;
    }

    /**
     * Get presseFnc
     *
     * @return \Gmao\MoulageBundle\Entity\Presse
     */
    public function getPresseFnc()
    {
        return $this->presse_fnc;
    }

    /**
     * Set referenceFnc
     *
     * @param \Gmao\MoulageBundle\Entity\Reference $referenceFnc
     *
     * @return Fnc
     */
    public function setReferenceFnc(\Gmao\MoulageBundle\Entity\Reference $referenceFnc = null)
    {
        $this->reference_fnc = $referenceFnc;
    
        return $this;
    }

    /**
     * Get referenceFnc
     *
     * @return \Gmao\MoulageBundle\Entity\Reference
     */
    public function getReferenceFnc()
    {
        return $this->reference_fnc;
    }

    /**
     * Set equipeFnc
     *
     * @param \Gmao\MoulageBundle\Entity\Equipe $equipeFnc
     *
     * @return Fnc
     */
    public function setEquipeFnc(\Gmao\MoulageBundle\Entity\Equipe $equipeFnc = null)
    {
        $this->equipe_fnc = $equipeFnc;
    
        return $this;
    }

    /**
     * Get equipeFnc
     *
     * @return \Gmao\MoulageBundle\Entity\Equipe
     */
    public function getEquipeFnc()
    {
        return $this->equipe_fnc;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->defauts_fnc = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add defautsFnc
     *
     * @param \Gmao\MoulageBundle\Entity\Defaut $defautsFnc
     *
     * @return Fnc
     */
    public function addDefautsFnc(\Gmao\MoulageBundle\Entity\Defaut $defautsFnc)
    {
        $this->defauts_fnc[] = $defautsFnc;
    
        return $this;
    }

    /**
     * Remove defautsFnc
     *
     * @param \Gmao\MoulageBundle\Entity\Defaut $defautsFnc
     */
    public function removeDefautsFnc(\Gmao\MoulageBundle\Entity\Defaut $defautsFnc)
    {
        $this->defauts_fnc->removeElement($defautsFnc);
    }

    /**
     * Get defautsFnc
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDefautsFnc()
    {
        return $this->defauts_fnc;
    }
}
