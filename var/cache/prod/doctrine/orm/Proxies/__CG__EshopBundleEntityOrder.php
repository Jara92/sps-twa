<?php

namespace Proxies\__CG__\EshopBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Order extends \EshopBundle\Entity\Order implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'id', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'order_date', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'total_price', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'note', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'address', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'name', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'surname', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'email', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'phone', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'order_product', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'state', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'user', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'discount'];
        }

        return ['__isInitialized__', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'id', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'order_date', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'total_price', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'note', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'address', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'name', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'surname', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'email', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'phone', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'order_product', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'state', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'user', '' . "\0" . 'EshopBundle\\Entity\\Order' . "\0" . 'discount'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Order $proxy) {
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderDate', []);

        return parent::getOrderDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderDate($order_date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderDate', [$order_date]);

        return parent::setOrderDate($order_date);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalPrice', []);

        return parent::getTotalPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalPrice($total_price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalPrice', [$total_price]);

        return parent::setTotalPrice($total_price);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', []);

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote($note)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', [$note]);

        return parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getSurname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSurname', []);

        return parent::getSurname();
    }

    /**
     * {@inheritDoc}
     */
    public function setSurname($surname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSurname', [$surname]);

        return parent::setSurname($surname);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', []);

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', [$phone]);

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', []);

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function setState($state)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', [$state]);

        return parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderProduct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderProduct', []);

        return parent::getOrderProduct();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderProduct($order_product)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderProduct', [$order_product]);

        return parent::setOrderProduct($order_product);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiscount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiscount', []);

        return parent::getDiscount();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiscount($discount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiscount', [$discount]);

        return parent::setDiscount($discount);
    }

}