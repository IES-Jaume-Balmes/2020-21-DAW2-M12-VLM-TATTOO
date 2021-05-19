<?php

namespace ContainerCH0UM0a;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldereab78 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc8a22 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7c718 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'getConnection', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'getMetadataFactory', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'getExpressionBuilder', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'beginTransaction', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'getCache', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'transactional', array('func' => $func), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->transactional($func);
    }

    public function commit()
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'commit', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->commit();
    }

    public function rollback()
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'rollback', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'getClassMetadata', array('className' => $className), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'createQuery', array('dql' => $dql), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'createNamedQuery', array('name' => $name), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'createQueryBuilder', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'flush', array('entity' => $entity), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'clear', array('entityName' => $entityName), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->clear($entityName);
    }

    public function close()
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'close', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->close();
    }

    public function persist($entity)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'persist', array('entity' => $entity), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'remove', array('entity' => $entity), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'refresh', array('entity' => $entity), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'detach', array('entity' => $entity), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'merge', array('entity' => $entity), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'contains', array('entity' => $entity), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'getEventManager', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'getConfiguration', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'isOpen', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'getUnitOfWork', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'getProxyFactory', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'initializeObject', array('obj' => $obj), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'getFilters', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'isFiltersStateClean', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'hasFilters', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return $this->valueHoldereab78->hasFilters();
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

        $instance->initializerc8a22 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldereab78) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldereab78 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldereab78->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, '__get', ['name' => $name], $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        if (isset(self::$publicProperties7c718[$name])) {
            return $this->valueHoldereab78->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereab78;

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

        $targetObject = $this->valueHoldereab78;
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
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereab78;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldereab78;
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
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, '__isset', array('name' => $name), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereab78;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldereab78;
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
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, '__unset', array('name' => $name), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereab78;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldereab78;
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
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, '__clone', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        $this->valueHoldereab78 = clone $this->valueHoldereab78;
    }

    public function __sleep()
    {
        $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, '__sleep', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;

        return array('valueHoldereab78');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc8a22 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc8a22;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc8a22 && ($this->initializerc8a22->__invoke($valueHoldereab78, $this, 'initializeProxy', array(), $this->initializerc8a22) || 1) && $this->valueHoldereab78 = $valueHoldereab78;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereab78;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereab78;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
