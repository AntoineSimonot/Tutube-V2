<?php

namespace ContainerXg715oL;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc796a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5b4f5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties012b5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'getConnection', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'getMetadataFactory', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'getExpressionBuilder', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'beginTransaction', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'getCache', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'transactional', array('func' => $func), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'commit', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->commit();
    }

    public function rollback()
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'rollback', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'getClassMetadata', array('className' => $className), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'createQuery', array('dql' => $dql), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'createNamedQuery', array('name' => $name), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'createQueryBuilder', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'flush', array('entity' => $entity), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'clear', array('entityName' => $entityName), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->clear($entityName);
    }

    public function close()
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'close', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->close();
    }

    public function persist($entity)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'persist', array('entity' => $entity), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'remove', array('entity' => $entity), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'refresh', array('entity' => $entity), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'detach', array('entity' => $entity), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'merge', array('entity' => $entity), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'contains', array('entity' => $entity), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'getEventManager', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'getConfiguration', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'isOpen', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'getUnitOfWork', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'getProxyFactory', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'initializeObject', array('obj' => $obj), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'getFilters', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'isFiltersStateClean', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'hasFilters', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return $this->valueHolderc796a->hasFilters();
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

        $instance->initializer5b4f5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc796a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc796a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc796a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, '__get', ['name' => $name], $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        if (isset(self::$publicProperties012b5[$name])) {
            return $this->valueHolderc796a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc796a;

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

        $targetObject = $this->valueHolderc796a;
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
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc796a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc796a;
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
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, '__isset', array('name' => $name), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc796a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc796a;
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
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, '__unset', array('name' => $name), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc796a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc796a;
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
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, '__clone', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        $this->valueHolderc796a = clone $this->valueHolderc796a;
    }

    public function __sleep()
    {
        $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, '__sleep', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;

        return array('valueHolderc796a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5b4f5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5b4f5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5b4f5 && ($this->initializer5b4f5->__invoke($valueHolderc796a, $this, 'initializeProxy', array(), $this->initializer5b4f5) || 1) && $this->valueHolderc796a = $valueHolderc796a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc796a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc796a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
