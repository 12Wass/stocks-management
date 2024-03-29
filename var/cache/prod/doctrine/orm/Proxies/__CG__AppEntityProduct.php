<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Product extends \App\Entity\Product implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'barcode', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'stock', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'entries', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'exits', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'min_alert', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'max_alert', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'ean13', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'provider'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'barcode', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'stock', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'entries', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'exits', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'min_alert', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'max_alert', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'ean13', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'provider'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Product $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getBarcode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBarcode', []);

        return parent::getBarcode();
    }

    /**
     * {@inheritDoc}
     */
    public function setBarcode(string $barcode): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBarcode', [$barcode]);

        return parent::setBarcode($barcode);
    }

    /**
     * {@inheritDoc}
     */
    public function getStock(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStock', []);

        return parent::getStock();
    }

    /**
     * {@inheritDoc}
     */
    public function setStock(?int $stock): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStock', [$stock]);

        return parent::setStock($stock);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntries(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntries', []);

        return parent::getEntries();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntries(?int $entries): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntries', [$entries]);

        return parent::setEntries($entries);
    }

    /**
     * {@inheritDoc}
     */
    public function getExits(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExits', []);

        return parent::getExits();
    }

    /**
     * {@inheritDoc}
     */
    public function setExits(?int $exits): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExits', [$exits]);

        return parent::setExits($exits);
    }

    /**
     * {@inheritDoc}
     */
    public function getMinAlert(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinAlert', []);

        return parent::getMinAlert();
    }

    /**
     * {@inheritDoc}
     */
    public function setMinAlert(?int $min_alert): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMinAlert', [$min_alert]);

        return parent::setMinAlert($min_alert);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxAlert(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxAlert', []);

        return parent::getMaxAlert();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxAlert(?int $max_alert): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxAlert', [$max_alert]);

        return parent::setMaxAlert($max_alert);
    }

    /**
     * {@inheritDoc}
     */
    public function getEan13(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEan13', []);

        return parent::getEan13();
    }

    /**
     * {@inheritDoc}
     */
    public function setEan13(?string $ean13): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEan13', [$ean13]);

        return parent::setEan13($ean13);
    }

    /**
     * {@inheritDoc}
     */
    public function getProvider(): ?\App\Entity\Provider
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProvider', []);

        return parent::getProvider();
    }

    /**
     * {@inheritDoc}
     */
    public function setProvider(?\App\Entity\Provider $provider): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProvider', [$provider]);

        return parent::setProvider($provider);
    }

}
