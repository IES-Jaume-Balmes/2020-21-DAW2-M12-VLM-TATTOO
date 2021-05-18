<?php

namespace ContainerUEEXq0Q;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf8c58 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera7e00 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc55eb = [
        
    ];

    public function getConnection()
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'getConnection', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'getMetadataFactory', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'getExpressionBuilder', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'beginTransaction', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'getCache', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->getCache();
    }

    public function transactional($func)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'transactional', array('func' => $func), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->transactional($func);
    }

    public function commit()
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'commit', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->commit();
    }

    public function rollback()
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'rollback', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'getClassMetadata', array('className' => $className), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'createQuery', array('dql' => $dql), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'createNamedQuery', array('name' => $name), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'createQueryBuilder', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'flush', array('entity' => $entity), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'clear', array('entityName' => $entityName), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->clear($entityName);
    }

    public function close()
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'close', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->close();
    }

    public function persist($entity)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'persist', array('entity' => $entity), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'remove', array('entity' => $entity), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'refresh', array('entity' => $entity), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'detach', array('entity' => $entity), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'merge', array('entity' => $entity), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'getRepository', array('entityName' => $entityName), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'contains', array('entity' => $entity), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'getEventManager', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'getConfiguration', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'isOpen', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'getUnitOfWork', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'getProxyFactory', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'initializeObject', array('obj' => $obj), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'getFilters', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'isFiltersStateClean', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'hasFilters', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return $this->valueHolderf8c58->hasFilters();
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

        $instance->initializera7e00 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf8c58) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf8c58 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf8c58->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, '__get', ['name' => $name], $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        if (isset(self::$publicPropertiesc55eb[$name])) {
            return $this->valueHolderf8c58->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8c58;

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

        $targetObject = $this->valueHolderf8c58;
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
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8c58;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf8c58;
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
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, '__isset', array('name' => $name), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8c58;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf8c58;
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
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, '__unset', array('name' => $name), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8c58;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf8c58;
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
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, '__clone', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        $this->valueHolderf8c58 = clone $this->valueHolderf8c58;
    }

    public function __sleep()
    {
        $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, '__sleep', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;

        return array('valueHolderf8c58');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera7e00 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera7e00;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera7e00 && ($this->initializera7e00->__invoke($valueHolderf8c58, $this, 'initializeProxy', array(), $this->initializera7e00) || 1) && $this->valueHolderf8c58 = $valueHolderf8c58;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf8c58;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf8c58;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
