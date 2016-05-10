<?php

namespace Gmao\MoulageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moule
 *
 * @ORM\Table(name="moule")
 * @ORM\Entity(repositoryClass="Gmao\MoulageBundle\Repository\MouleRepository")
*/
class Moule
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
     * @ORM\Column(name="nomMoule", type="string", length=255)
     */
    private $nomMoule;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="planMoule", type="text")
     */
    private $planMoule;

    /**
     * @var string
     *
     * @ORM\Column(name="planMoulePrehension", type="text", nullable=true)
     */
    private $planMoulePrehension;

    /**
    * @var int
     * @ORM\Column(name="poidsMoule", type="integer", nullable=true)
     */
    private $poidsMoule;

    /**
    * @var int
     * @ORM\Column(name="lastNbrCycle", type="bigint", nullable=true)
     */
    private $lastNbrCycle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeplacement", type="datetime", nullable=true)
     */
    private $dateDeplacement;

    /**
     * @var bool
     *
     * @ORM\Column(name="etatMoule", type="boolean")
     */
    private $etatMoule;

    /**
     * @ORM\OneToMany(targetEntity="Empreinte", mappedBy="moule")
     */
    private $empreintes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->empreintes = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set nomMoule
     *
     * @param string $nomMoule
     *
     * @return Moule
     */
    public function setNomMoule($nomMoule)
    {
        $this->nomMoule = $nomMoule;
    
        return $this;
    }

    /**
     * Get nomMoule
     *
     * @return string
     */
    public function getNomMoule()
    {
        return $this->nomMoule;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return Moule
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    
        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set planMoule
     *
     * @param string $planMoule
     *
     * @return Moule
     */
    public function setPlanMoule($planMoule)
    {
        $this->planMoule = $planMoule;
    
        return $this;
    }

    /**
     * Get planMoule
     *
     * @return string
     */
    public function getPlanMoule()
    {
        return $this->planMoule;
    }

    /**
     * Set planMoulePrehension
     *
     * @param string $planMoulePrehension
     *
     * @return Moule
     */
    public function setPlanMoulePrehension($planMoulePrehension)
    {
        $this->planMoulePrehension = $planMoulePrehension;
    
        return $this;
    }

    /**
     * Get planMoulePrehension
     *
     * @return string
     */
    public function getPlanMoulePrehension()
    {
        return $this->planMoulePrehension;
    }

    /**
     * Set poidsMoule
     *
     * @param integer $poidsMoule
     *
     * @return Moule
     */
    public function setPoidsMoule($poidsMoule)
    {
        $this->poidsMoule = $poidsMoule;
    
        return $this;
    }

    /**
     * Get poidsMoule
     *
     * @return integer
     */
    public function getPoidsMoule()
    {
        return $this->poidsMoule;
    }

    /**
     * Set lastNbrCycle
     *
     * @param integer $lastNbrCycle
     *
     * @return Moule
     */
    public function setLastNbrCycle($lastNbrCycle)
    {
        $this->lastNbrCycle = $lastNbrCycle;
    
        return $this;
    }

    /**
     * Get lastNbrCycle
     *
     * @return integer
     */
    public function getLastNbrCycle()
    {
        return $this->lastNbrCycle;
    }

    /**
     * Set dateDeplacement
     *
     * @param \DateTime $dateDeplacement
     *
     * @return Moule
     */
    public function setDateDeplacement($dateDeplacement)
    {
        $this->dateDeplacement = $dateDeplacement;
    
        return $this;
    }

    /**
     * Get dateDeplacement
     *
     * @return \DateTime
     */
    public function getDateDeplacement()
    {
        return $this->dateDeplacement;
    }

    /**
     * Set etatMoule
     *
     * @param boolean $etatMoule
     *
     * @return Moule
     */
    public function setEtatMoule($etatMoule)
    {
        $this->etatMoule = $etatMoule;
    
        return $this;
    }

    /**
     * Get etatMoule
     *
     * @return boolean
     */
    public function getEtatMoule()
    {
        return $this->etatMoule;
    }

    /**
     * Add empreinte
     *
     * @param \Gmao\MoulageBundle\Entity\Empreinte $empreinte
     *
     * @return Moule
     */
    public function addEmpreinte(\Gmao\MoulageBundle\Entity\Empreinte $empreinte)
    {
        $this->empreintes[] = $empreinte;
    
        return $this;
    }

    /**
     * Remove empreinte
     *
     * @param \Gmao\MoulageBundle\Entity\Empreinte $empreinte
     */
    public function removeEmpreinte(\Gmao\MoulageBundle\Entity\Empreinte $empreinte)
    {
        $this->empreintes->removeElement($empreinte);
    }

    /**
     * Get empreintes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmpreintes()
    {
        return $this->empreintes;
    }
}