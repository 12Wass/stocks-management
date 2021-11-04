<?php

namespace Container46kqArj;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldereb43e = null;
    private $initializerea6aa = null;
    private static $publicProperties9e599 = [
        
    ];
    public function getConnection()
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'getConnection', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'getMetadataFactory', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'getExpressionBuilder', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'beginTransaction', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'getCache', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->getCache();
    }
    public function transactional($func)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'transactional', array('func' => $func), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->transactional($func);
    }
    public function commit()
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'commit', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->commit();
    }
    public function rollback()
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'rollback', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'getClassMetadata', array('className' => $className), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'createQuery', array('dql' => $dql), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'createNamedQuery', array('name' => $name), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'createQueryBuilder', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'flush', array('entity' => $entity), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'clear', array('entityName' => $entityName), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->clear($entityName);
    }
    public function close()
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'close', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->close();
    }
    public function persist($entity)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'persist', array('entity' => $entity), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'remove', array('entity' => $entity), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'refresh', array('entity' => $entity), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'detach', array('entity' => $entity), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'merge', array('entity' => $entity), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'contains', array('entity' => $entity), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'getEventManager', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'getConfiguration', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'isOpen', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'getUnitOfWork', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'getProxyFactory', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'initializeObject', array('obj' => $obj), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'getFilters', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'isFiltersStateClean', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'hasFilters', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return $this->valueHoldereb43e->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerea6aa = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldereb43e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldereb43e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldereb43e->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, '__get', ['name' => $name], $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        if (isset(self::$publicProperties9e599[$name])) {
            return $this->valueHoldereb43e->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb43e;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldereb43e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb43e;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldereb43e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, '__isset', array('name' => $name), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb43e;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldereb43e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, '__unset', array('name' => $name), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb43e;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldereb43e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, '__clone', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        $this->valueHoldereb43e = clone $this->valueHoldereb43e;
    }
    public function __sleep()
    {
        $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, '__sleep', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
        return array('valueHoldereb43e');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerea6aa = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerea6aa;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerea6aa && ($this->initializerea6aa->__invoke($valueHoldereb43e, $this, 'initializeProxy', array(), $this->initializerea6aa) || 1) && $this->valueHoldereb43e = $valueHoldereb43e;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereb43e;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereb43e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
