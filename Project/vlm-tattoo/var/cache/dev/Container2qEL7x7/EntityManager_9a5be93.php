<?php

namespace Container2qEL7x7;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9ea48 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc6cf4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb06d8 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'getConnection', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'getMetadataFactory', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'getExpressionBuilder', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'beginTransaction', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'getCache', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'transactional', array('func' => $func), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->transactional($func);
    }

    public function commit()
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'commit', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->commit();
    }

    public function rollback()
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'rollback', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'getClassMetadata', array('className' => $className), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'createQuery', array('dql' => $dql), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'createNamedQuery', array('name' => $name), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'createQueryBuilder', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'flush', array('entity' => $entity), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'clear', array('entityName' => $entityName), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->clear($entityName);
    }

    public function close()
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'close', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->close();
    }

    public function persist($entity)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'persist', array('entity' => $entity), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'remove', array('entity' => $entity), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'refresh', array('entity' => $entity), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'detach', array('entity' => $entity), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'merge', array('entity' => $entity), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'contains', array('entity' => $entity), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'getEventManager', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'getConfiguration', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'isOpen', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'getUnitOfWork', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'getProxyFactory', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'initializeObject', array('obj' => $obj), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'getFilters', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'isFiltersStateClean', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'hasFilters', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return $this->valueHolder9ea48->hasFilters();
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

        $instance->initializerc6cf4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9ea48) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9ea48 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9ea48->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, '__get', ['name' => $name], $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        if (isset(self::$publicPropertiesb06d8[$name])) {
            return $this->valueHolder9ea48->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ea48;

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

        $targetObject = $this->valueHolder9ea48;
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
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ea48;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9ea48;
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
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, '__isset', array('name' => $name), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ea48;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9ea48;
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
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, '__unset', array('name' => $name), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ea48;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9ea48;
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
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, '__clone', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        $this->valueHolder9ea48 = clone $this->valueHolder9ea48;
    }

    public function __sleep()
    {
        $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, '__sleep', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;

        return array('valueHolder9ea48');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc6cf4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc6cf4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc6cf4 && ($this->initializerc6cf4->__invoke($valueHolder9ea48, $this, 'initializeProxy', array(), $this->initializerc6cf4) || 1) && $this->valueHolder9ea48 = $valueHolder9ea48;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9ea48;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9ea48;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
