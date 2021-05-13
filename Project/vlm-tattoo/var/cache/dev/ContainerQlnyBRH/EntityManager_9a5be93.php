<?php

namespace ContainerQlnyBRH;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc6c14 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer30fb2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4d019 = [
        
    ];

    public function getConnection()
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'getConnection', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'getMetadataFactory', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'getExpressionBuilder', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'beginTransaction', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'getCache', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->getCache();
    }

    public function transactional($func)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'transactional', array('func' => $func), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->transactional($func);
    }

    public function commit()
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'commit', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->commit();
    }

    public function rollback()
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'rollback', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'getClassMetadata', array('className' => $className), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'createQuery', array('dql' => $dql), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'createNamedQuery', array('name' => $name), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'createQueryBuilder', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'flush', array('entity' => $entity), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'clear', array('entityName' => $entityName), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->clear($entityName);
    }

    public function close()
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'close', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->close();
    }

    public function persist($entity)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'persist', array('entity' => $entity), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'remove', array('entity' => $entity), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'refresh', array('entity' => $entity), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'detach', array('entity' => $entity), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'merge', array('entity' => $entity), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'getRepository', array('entityName' => $entityName), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'contains', array('entity' => $entity), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'getEventManager', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'getConfiguration', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'isOpen', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'getUnitOfWork', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'getProxyFactory', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'initializeObject', array('obj' => $obj), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'getFilters', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'isFiltersStateClean', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'hasFilters', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return $this->valueHolderc6c14->hasFilters();
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

        $instance->initializer30fb2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc6c14) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc6c14 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc6c14->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, '__get', ['name' => $name], $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        if (isset(self::$publicProperties4d019[$name])) {
            return $this->valueHolderc6c14->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc6c14;

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

        $targetObject = $this->valueHolderc6c14;
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
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc6c14;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc6c14;
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
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, '__isset', array('name' => $name), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc6c14;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc6c14;
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
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, '__unset', array('name' => $name), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc6c14;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc6c14;
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
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, '__clone', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        $this->valueHolderc6c14 = clone $this->valueHolderc6c14;
    }

    public function __sleep()
    {
        $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, '__sleep', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;

        return array('valueHolderc6c14');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer30fb2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer30fb2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer30fb2 && ($this->initializer30fb2->__invoke($valueHolderc6c14, $this, 'initializeProxy', array(), $this->initializer30fb2) || 1) && $this->valueHolderc6c14 = $valueHolderc6c14;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc6c14;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc6c14;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
