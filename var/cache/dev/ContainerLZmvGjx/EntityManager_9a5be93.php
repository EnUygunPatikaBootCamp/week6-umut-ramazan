<?php

namespace ContainerLZmvGjx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd7f0c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9aa66 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5cd80 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'getConnection', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'getMetadataFactory', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'getExpressionBuilder', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'beginTransaction', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'getCache', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'transactional', array('func' => $func), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'commit', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->commit();
    }

    public function rollback()
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'rollback', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'getClassMetadata', array('className' => $className), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'createQuery', array('dql' => $dql), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'createNamedQuery', array('name' => $name), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'createQueryBuilder', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'flush', array('entity' => $entity), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'clear', array('entityName' => $entityName), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->clear($entityName);
    }

    public function close()
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'close', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->close();
    }

    public function persist($entity)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'persist', array('entity' => $entity), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'remove', array('entity' => $entity), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'refresh', array('entity' => $entity), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'detach', array('entity' => $entity), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'merge', array('entity' => $entity), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'contains', array('entity' => $entity), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'getEventManager', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'getConfiguration', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'isOpen', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'getUnitOfWork', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'getProxyFactory', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'initializeObject', array('obj' => $obj), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'getFilters', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'isFiltersStateClean', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'hasFilters', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return $this->valueHolderd7f0c->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer9aa66 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd7f0c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd7f0c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd7f0c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, '__get', ['name' => $name], $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        if (isset(self::$publicProperties5cd80[$name])) {
            return $this->valueHolderd7f0c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7f0c;

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

        $targetObject = $this->valueHolderd7f0c;
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
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7f0c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd7f0c;
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
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, '__isset', array('name' => $name), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7f0c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd7f0c;
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
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, '__unset', array('name' => $name), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7f0c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd7f0c;
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
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, '__clone', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        $this->valueHolderd7f0c = clone $this->valueHolderd7f0c;
    }

    public function __sleep()
    {
        $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, '__sleep', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;

        return array('valueHolderd7f0c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9aa66 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9aa66;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9aa66 && ($this->initializer9aa66->__invoke($valueHolderd7f0c, $this, 'initializeProxy', array(), $this->initializer9aa66) || 1) && $this->valueHolderd7f0c = $valueHolderd7f0c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd7f0c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd7f0c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
