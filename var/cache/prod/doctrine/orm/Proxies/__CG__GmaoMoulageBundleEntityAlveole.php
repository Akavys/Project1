<?php

namespace Proxies\__CG__\Gmao\MoulageBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Alveole extends \Gmao\MoulageBundle\Entity\Alveole implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Gmao\\MoulageBundle\\Entity\\Alveole' . "\0" . 'id', '' . "\0" . 'Gmao\\MoulageBundle\\Entity\\Alveole' . "\0" . 'nomAlveole', '' . "\0" . 'Gmao\\MoulageBundle\\Entity\\Alveole' . "\0" . 'etatAlveole', '' . "\0" . 'Gmao\\MoulageBundle\\Entity\\Alveole' . "\0" . 'moule_aleole'];
        }

        return ['__isInitialized__', '' . "\0" . 'Gmao\\MoulageBundle\\Entity\\Alveole' . "\0" . 'id', '' . "\0" . 'Gmao\\MoulageBundle\\Entity\\Alveole' . "\0" . 'nomAlveole', '' . "\0" . 'Gmao\\MoulageBundle\\Entity\\Alveole' . "\0" . 'etatAlveole', '' . "\0" . 'Gmao\\MoulageBundle\\Entity\\Alveole' . "\0" . 'moule_aleole'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Alveole $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomAlveole($nomAlveole)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomAlveole', [$nomAlveole]);

        return parent::setNomAlveole($nomAlveole);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomAlveole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomAlveole', []);

        return parent::getNomAlveole();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtatAlveole($etatAlveole)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtatAlveole', [$etatAlveole]);

        return parent::setEtatAlveole($etatAlveole);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtatAlveole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtatAlveole', []);

        return parent::getEtatAlveole();
    }

    /**
     * {@inheritDoc}
     */
    public function setMouleAleole(\Gmao\MoulageBundle\Entity\Moule $mouleAleole = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMouleAleole', [$mouleAleole]);

        return parent::setMouleAleole($mouleAleole);
    }

    /**
     * {@inheritDoc}
     */
    public function getMouleAleole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMouleAleole', []);

        return parent::getMouleAleole();
    }

}
