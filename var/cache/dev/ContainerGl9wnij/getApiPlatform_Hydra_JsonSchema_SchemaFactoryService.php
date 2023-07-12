<?php

namespace ContainerGl9wnij;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Hydra_JsonSchema_SchemaFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.hydra.json_schema.schema_factory' shared service.
     *
     * @return \ApiPlatform\Hydra\JsonSchema\SchemaFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'JsonSchema'.\DIRECTORY_SEPARATOR.'SchemaFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Hydra'.\DIRECTORY_SEPARATOR.'JsonSchema'.\DIRECTORY_SEPARATOR.'SchemaFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'JsonSchema'.\DIRECTORY_SEPARATOR.'SchemaFactory.php';

        $a = ($container->privates['api_platform.json_schema.type_factory'] ?? $container->load('getApiPlatform_JsonSchema_TypeFactoryService'));

        if (isset($container->privates['api_platform.hydra.json_schema.schema_factory'])) {
            return $container->privates['api_platform.hydra.json_schema.schema_factory'];
        }

        return $container->privates['api_platform.hydra.json_schema.schema_factory'] = new \ApiPlatform\Hydra\JsonSchema\SchemaFactory(new \ApiPlatform\JsonSchema\SchemaFactory($a, ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container)), ($container->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService($container)), ($container->privates['api_platform.metadata.property.metadata_factory.cached'] ?? self::getApiPlatform_Metadata_Property_MetadataFactory_CachedService($container)), ($container->privates['serializer.name_converter.metadata_aware'] ?? self::getSerializer_NameConverter_MetadataAwareService($container)), ($container->privates['api_platform.resource_class_resolver'] ?? self::getApiPlatform_ResourceClassResolverService($container))));
    }
}
