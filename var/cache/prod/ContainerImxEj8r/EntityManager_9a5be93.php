<?php

namespace ContainerImxEj8r;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder480b5 = null;
    private $initializera251d = null;
    private static $publicProperties55511 = [
        
    ];
    public function getConnection()
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'getConnection', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'getMetadataFactory', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'getExpressionBuilder', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'beginTransaction', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->beginTransaction();
    }
    public function getCache()
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'getCache', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->getCache();
    }
    public function transactional($func)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'transactional', array('func' => $func), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->transactional($func);
    }
    public function commit()
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'commit', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->commit();
    }
    public function rollback()
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'rollback', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'getClassMetadata', array('className' => $className), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'createQuery', array('dql' => $dql), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'createNamedQuery', array('name' => $name), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'createQueryBuilder', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'flush', array('entity' => $entity), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'clear', array('entityName' => $entityName), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->clear($entityName);
    }
    public function close()
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'close', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->close();
    }
    public function persist($entity)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'persist', array('entity' => $entity), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'remove', array('entity' => $entity), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'refresh', array('entity' => $entity), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'detach', array('entity' => $entity), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'merge', array('entity' => $entity), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'getRepository', array('entityName' => $entityName), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'contains', array('entity' => $entity), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'getEventManager', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'getConfiguration', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'isOpen', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'getUnitOfWork', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'getProxyFactory', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'initializeObject', array('obj' => $obj), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'getFilters', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'isFiltersStateClean', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'hasFilters', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return $this->valueHolder480b5->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializera251d = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder480b5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder480b5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder480b5->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, '__get', ['name' => $name], $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        if (isset(self::$publicProperties55511[$name])) {
            return $this->valueHolder480b5->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder480b5;
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
        $targetObject = $this->valueHolder480b5;
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
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder480b5;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder480b5;
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
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, '__isset', array('name' => $name), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder480b5;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder480b5;
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
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, '__unset', array('name' => $name), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder480b5;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder480b5;
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
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, '__clone', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        $this->valueHolder480b5 = clone $this->valueHolder480b5;
    }
    public function __sleep()
    {
        $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, '__sleep', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
        return array('valueHolder480b5');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera251d = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera251d;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera251d && ($this->initializera251d->__invoke($valueHolder480b5, $this, 'initializeProxy', array(), $this->initializera251d) || 1) && $this->valueHolder480b5 = $valueHolder480b5;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder480b5;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder480b5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
