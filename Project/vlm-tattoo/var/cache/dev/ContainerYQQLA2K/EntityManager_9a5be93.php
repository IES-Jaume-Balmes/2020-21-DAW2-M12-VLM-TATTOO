<?php

namespace ContainerYQQLA2K;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere543a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb33d1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4be03 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'getConnection', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'getMetadataFactory', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'getExpressionBuilder', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'beginTransaction', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'getCache', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'transactional', array('func' => $func), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->transactional($func);
    }

    public function commit()
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'commit', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->commit();
    }

    public function rollback()
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'rollback', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'getClassMetadata', array('className' => $className), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'createQuery', array('dql' => $dql), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'createNamedQuery', array('name' => $name), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'createQueryBuilder', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'flush', array('entity' => $entity), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'clear', array('entityName' => $entityName), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->clear($entityName);
    }

    public function close()
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'close', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->close();
    }

    public function persist($entity)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'persist', array('entity' => $entity), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'remove', array('entity' => $entity), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'refresh', array('entity' => $entity), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'detach', array('entity' => $entity), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'merge', array('entity' => $entity), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'contains', array('entity' => $entity), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'getEventManager', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'getConfiguration', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'isOpen', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'getUnitOfWork', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'getProxyFactory', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'initializeObject', array('obj' => $obj), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'getFilters', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'isFiltersStateClean', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'hasFilters', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return $this->valueHoldere543a->hasFilters();
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

        $instance->initializerb33d1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere543a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere543a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere543a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, '__get', ['name' => $name], $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        if (isset(self::$publicProperties4be03[$name])) {
            return $this->valueHoldere543a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere543a;

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

        $targetObject = $this->valueHoldere543a;
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
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere543a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere543a;
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
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, '__isset', array('name' => $name), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere543a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere543a;
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
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, '__unset', array('name' => $name), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere543a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere543a;
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
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, '__clone', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        $this->valueHoldere543a = clone $this->valueHoldere543a;
    }

    public function __sleep()
    {
        $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, '__sleep', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;

        return array('valueHoldere543a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb33d1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb33d1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb33d1 && ($this->initializerb33d1->__invoke($valueHoldere543a, $this, 'initializeProxy', array(), $this->initializerb33d1) || 1) && $this->valueHoldere543a = $valueHoldere543a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere543a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere543a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
