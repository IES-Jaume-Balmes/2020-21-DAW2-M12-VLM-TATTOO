<?php

namespace Container9oduT7K;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5d742 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer037bb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0679e = [
        
    ];

    public function getConnection()
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'getConnection', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'getMetadataFactory', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'getExpressionBuilder', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'beginTransaction', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'getCache', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->getCache();
    }

    public function transactional($func)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'transactional', array('func' => $func), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->transactional($func);
    }

    public function commit()
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'commit', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->commit();
    }

    public function rollback()
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'rollback', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'getClassMetadata', array('className' => $className), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'createQuery', array('dql' => $dql), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'createNamedQuery', array('name' => $name), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'createQueryBuilder', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'flush', array('entity' => $entity), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'clear', array('entityName' => $entityName), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->clear($entityName);
    }

    public function close()
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'close', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->close();
    }

    public function persist($entity)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'persist', array('entity' => $entity), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'remove', array('entity' => $entity), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'refresh', array('entity' => $entity), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'detach', array('entity' => $entity), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'merge', array('entity' => $entity), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'getRepository', array('entityName' => $entityName), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'contains', array('entity' => $entity), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'getEventManager', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'getConfiguration', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'isOpen', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'getUnitOfWork', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'getProxyFactory', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'initializeObject', array('obj' => $obj), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'getFilters', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'isFiltersStateClean', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'hasFilters', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return $this->valueHolder5d742->hasFilters();
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

        $instance->initializer037bb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5d742) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5d742 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5d742->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, '__get', ['name' => $name], $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        if (isset(self::$publicProperties0679e[$name])) {
            return $this->valueHolder5d742->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d742;

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

        $targetObject = $this->valueHolder5d742;
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
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d742;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5d742;
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
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, '__isset', array('name' => $name), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d742;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5d742;
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
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, '__unset', array('name' => $name), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d742;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5d742;
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
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, '__clone', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        $this->valueHolder5d742 = clone $this->valueHolder5d742;
    }

    public function __sleep()
    {
        $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, '__sleep', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;

        return array('valueHolder5d742');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer037bb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer037bb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer037bb && ($this->initializer037bb->__invoke($valueHolder5d742, $this, 'initializeProxy', array(), $this->initializer037bb) || 1) && $this->valueHolder5d742 = $valueHolder5d742;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5d742;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5d742;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
