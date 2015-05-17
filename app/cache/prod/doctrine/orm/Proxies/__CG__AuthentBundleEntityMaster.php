<?php

namespace Proxies\__CG__\AuthentBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Master extends \AuthentBundle\Entity\Master implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', 'idMaster', 'titre', 'mention', 'date_stnc', 'etat', 'masterPDF', 'membre');
        }

        return array('__isInitialized__', 'idMaster', 'titre', 'mention', 'date_stnc', 'etat', 'masterPDF', 'membre');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Master $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getIdMaster()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdMaster();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdMaster', array());

        return parent::getIdMaster();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', array($titre));

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', array());

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setMention($mention)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMention', array($mention));

        return parent::setMention($mention);
    }

    /**
     * {@inheritDoc}
     */
    public function getMention()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMention', array());

        return parent::getMention();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateStnc($dateStnc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateStnc', array($dateStnc));

        return parent::setDateStnc($dateStnc);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateStnc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateStnc', array());

        return parent::getDateStnc();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', array($etat));

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', array());

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setMasterPDF($masterPDF)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMasterPDF', array($masterPDF));

        return parent::setMasterPDF($masterPDF);
    }

    /**
     * {@inheritDoc}
     */
    public function getMasterPDF()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMasterPDF', array());

        return parent::getMasterPDF();
    }

    /**
     * {@inheritDoc}
     */
    public function setMembre(\AuthentBundle\Entity\Membre $membre = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMembre', array($membre));

        return parent::setMembre($membre);
    }

    /**
     * {@inheritDoc}
     */
    public function getMembre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMembre', array());

        return parent::getMembre();
    }

}
