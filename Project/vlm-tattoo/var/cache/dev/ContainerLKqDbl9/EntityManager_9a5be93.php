<?php

namespace ContainerLKqDbl9;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere700b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer96da9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties14610 = [
        
    ];

    public function getConnection()
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'getConnection', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'getMetadataFactory', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'getExpressionBuilder', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'beginTransaction', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'getCache', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'transactional', array('func' => $func), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->transactional($func);
    }

    public function commit()
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'commit', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->commit();
    }

    public function rollback()
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'rollback', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'getClassMetadata', array('className' => $className), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'createQuery', array('dql' => $dql), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'createNamedQuery', array('name' => $name), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'createQueryBuilder', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'flush', array('entity' => $entity), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'clear', array('entityName' => $entityName), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->clear($entityName);
    }

    public function close()
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'close', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->close();
    }

    public function persist($entity)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'persist', array('entity' => $entity), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'remove', array('entity' => $entity), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'refresh', array('entity' => $entity), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'detach', array('entity' => $entity), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'merge', array('entity' => $entity), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'contains', array('entity' => $entity), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'getEventManager', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'getConfiguration', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'isOpen', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'getUnitOfWork', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'getProxyFactory', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'initializeObject', array('obj' => $obj), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'getFilters', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'isFiltersStateClean', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'hasFilters', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return $this->valueHoldere700b->hasFilters();
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

        $instance->initializer96da9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere700b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere700b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere700b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, '__get', ['name' => $name], $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        if (isset(self::$publicProperties14610[$name])) {
            return $this->valueHoldere700b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere700b;

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

        $targetObject = $this->valueHoldere700b;
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
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere700b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere700b;
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
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, '__isset', array('name' => $name), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere700b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere700b;
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
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, '__unset', array('name' => $name), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere700b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere700b;
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
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, '__clone', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        $this->valueHoldere700b = clone $this->valueHoldere700b;
    }

    public function __sleep()
    {
        $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, '__sleep', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;

        return array('valueHoldere700b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer96da9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer96da9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer96da9 && ($this->initializer96da9->__invoke($valueHoldere700b, $this, 'initializeProxy', array(), $this->initializer96da9) || 1) && $this->valueHoldere700b = $valueHoldere700b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere700b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere700b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
