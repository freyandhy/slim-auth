<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb4824b33a160b6b1d628c7e0286c793b
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Slim\\Views\\' => 11,
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Slim\\Views\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/twig-view/src',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'App\\Models\\User' => __DIR__ . '/../..' . '/app/Models/User.php',
        'FastRoute\\BadRouteException' => __DIR__ . '/..' . '/nikic/fast-route/src/BadRouteException.php',
        'FastRoute\\DataGenerator' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator.php',
        'FastRoute\\DataGenerator\\CharCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/CharCountBased.php',
        'FastRoute\\DataGenerator\\GroupCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/GroupCountBased.php',
        'FastRoute\\DataGenerator\\GroupPosBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/GroupPosBased.php',
        'FastRoute\\DataGenerator\\MarkBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/MarkBased.php',
        'FastRoute\\DataGenerator\\RegexBasedAbstract' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/RegexBasedAbstract.php',
        'FastRoute\\Dispatcher' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher.php',
        'FastRoute\\Dispatcher\\CharCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/CharCountBased.php',
        'FastRoute\\Dispatcher\\GroupCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/GroupCountBased.php',
        'FastRoute\\Dispatcher\\GroupPosBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/GroupPosBased.php',
        'FastRoute\\Dispatcher\\MarkBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/MarkBased.php',
        'FastRoute\\Dispatcher\\RegexBasedAbstract' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/RegexBasedAbstract.php',
        'FastRoute\\Route' => __DIR__ . '/..' . '/nikic/fast-route/src/Route.php',
        'FastRoute\\RouteCollector' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteCollector.php',
        'FastRoute\\RouteParser' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteParser.php',
        'FastRoute\\RouteParser\\Std' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteParser/Std.php',
        'Interop\\Container\\ContainerInterface' => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container/ContainerInterface.php',
        'Interop\\Container\\Exception\\ContainerException' => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container/Exception/ContainerException.php',
        'Interop\\Container\\Exception\\NotFoundException' => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container/Exception/NotFoundException.php',
        'Pimple\\Container' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Container.php',
        'Pimple\\ServiceProviderInterface' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/ServiceProviderInterface.php',
        'Pimple\\Tests\\Fixtures\\Invokable' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/Invokable.php',
        'Pimple\\Tests\\Fixtures\\NonInvokable' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/NonInvokable.php',
        'Pimple\\Tests\\Fixtures\\PimpleServiceProvider' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/PimpleServiceProvider.php',
        'Pimple\\Tests\\Fixtures\\Service' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/Service.php',
        'Pimple\\Tests\\PimpleServiceProviderInterfaceTest' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/PimpleServiceProviderInterfaceTest.php',
        'Pimple\\Tests\\PimpleTest' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/PimpleTest.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'Slim\\App' => __DIR__ . '/..' . '/slim/slim/Slim/App.php',
        'Slim\\CallableResolver' => __DIR__ . '/..' . '/slim/slim/Slim/CallableResolver.php',
        'Slim\\CallableResolverAwareTrait' => __DIR__ . '/..' . '/slim/slim/Slim/CallableResolverAwareTrait.php',
        'Slim\\Collection' => __DIR__ . '/..' . '/slim/slim/Slim/Collection.php',
        'Slim\\Container' => __DIR__ . '/..' . '/slim/slim/Slim/Container.php',
        'Slim\\DefaultServicesProvider' => __DIR__ . '/..' . '/slim/slim/Slim/DefaultServicesProvider.php',
        'Slim\\DeferredCallable' => __DIR__ . '/..' . '/slim/slim/Slim/DeferredCallable.php',
        'Slim\\Exception\\ContainerException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/ContainerException.php',
        'Slim\\Exception\\ContainerValueNotFoundException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/ContainerValueNotFoundException.php',
        'Slim\\Exception\\MethodNotAllowedException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/MethodNotAllowedException.php',
        'Slim\\Exception\\NotFoundException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/NotFoundException.php',
        'Slim\\Exception\\SlimException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/SlimException.php',
        'Slim\\Handlers\\AbstractError' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/AbstractError.php',
        'Slim\\Handlers\\AbstractHandler' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/AbstractHandler.php',
        'Slim\\Handlers\\Error' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/Error.php',
        'Slim\\Handlers\\NotAllowed' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/NotAllowed.php',
        'Slim\\Handlers\\NotFound' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/NotFound.php',
        'Slim\\Handlers\\PhpError' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/PhpError.php',
        'Slim\\Handlers\\Strategies\\RequestResponse' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/Strategies/RequestResponse.php',
        'Slim\\Handlers\\Strategies\\RequestResponseArgs' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/Strategies/RequestResponseArgs.php',
        'Slim\\Http\\Body' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Body.php',
        'Slim\\Http\\Cookies' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Cookies.php',
        'Slim\\Http\\Environment' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Environment.php',
        'Slim\\Http\\Headers' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Headers.php',
        'Slim\\Http\\Message' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Message.php',
        'Slim\\Http\\Request' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Request.php',
        'Slim\\Http\\RequestBody' => __DIR__ . '/..' . '/slim/slim/Slim/Http/RequestBody.php',
        'Slim\\Http\\Response' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Response.php',
        'Slim\\Http\\Stream' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Stream.php',
        'Slim\\Http\\UploadedFile' => __DIR__ . '/..' . '/slim/slim/Slim/Http/UploadedFile.php',
        'Slim\\Http\\Uri' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Uri.php',
        'Slim\\Interfaces\\CallableResolverInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/CallableResolverInterface.php',
        'Slim\\Interfaces\\CollectionInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/CollectionInterface.php',
        'Slim\\Interfaces\\Http\\CookiesInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/Http/CookiesInterface.php',
        'Slim\\Interfaces\\Http\\EnvironmentInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/Http/EnvironmentInterface.php',
        'Slim\\Interfaces\\Http\\HeadersInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/Http/HeadersInterface.php',
        'Slim\\Interfaces\\InvocationStrategyInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/InvocationStrategyInterface.php',
        'Slim\\Interfaces\\RouteGroupInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouteGroupInterface.php',
        'Slim\\Interfaces\\RouteInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouteInterface.php',
        'Slim\\Interfaces\\RouterInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouterInterface.php',
        'Slim\\MiddlewareAwareTrait' => __DIR__ . '/..' . '/slim/slim/Slim/MiddlewareAwareTrait.php',
        'Slim\\Routable' => __DIR__ . '/..' . '/slim/slim/Slim/Routable.php',
        'Slim\\Route' => __DIR__ . '/..' . '/slim/slim/Slim/Route.php',
        'Slim\\RouteGroup' => __DIR__ . '/..' . '/slim/slim/Slim/RouteGroup.php',
        'Slim\\Router' => __DIR__ . '/..' . '/slim/slim/Slim/Router.php',
        'Slim\\Views\\Twig' => __DIR__ . '/..' . '/slim/twig-view/src/Twig.php',
        'Slim\\Views\\TwigExtension' => __DIR__ . '/..' . '/slim/twig-view/src/TwigExtension.php',
        'Twig_Autoloader' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Autoloader.php',
        'Twig_BaseNodeVisitor' => __DIR__ . '/..' . '/twig/twig/lib/Twig/BaseNodeVisitor.php',
        'Twig_CacheInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/CacheInterface.php',
        'Twig_Cache_Filesystem' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Cache/Filesystem.php',
        'Twig_Cache_Null' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Cache/Null.php',
        'Twig_Compiler' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Compiler.php',
        'Twig_CompilerInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/CompilerInterface.php',
        'Twig_Environment' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Environment.php',
        'Twig_Error' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Error.php',
        'Twig_Error_Loader' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Error/Loader.php',
        'Twig_Error_Runtime' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Error/Runtime.php',
        'Twig_Error_Syntax' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Error/Syntax.php',
        'Twig_ExistsLoaderInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/ExistsLoaderInterface.php',
        'Twig_ExpressionParser' => __DIR__ . '/..' . '/twig/twig/lib/Twig/ExpressionParser.php',
        'Twig_Extension' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension.php',
        'Twig_ExtensionInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/ExtensionInterface.php',
        'Twig_Extension_Core' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/Core.php',
        'Twig_Extension_Debug' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/Debug.php',
        'Twig_Extension_Escaper' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/Escaper.php',
        'Twig_Extension_GlobalsInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/GlobalsInterface.php',
        'Twig_Extension_InitRuntimeInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/InitRuntimeInterface.php',
        'Twig_Extension_Optimizer' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/Optimizer.php',
        'Twig_Extension_Profiler' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/Profiler.php',
        'Twig_Extension_Sandbox' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/Sandbox.php',
        'Twig_Extension_Staging' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/Staging.php',
        'Twig_Extension_StringLoader' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/StringLoader.php',
        'Twig_FactoryRuntimeLoader' => __DIR__ . '/..' . '/twig/twig/lib/Twig/FactoryRuntimeLoader.php',
        'Twig_FileExtensionEscapingStrategy' => __DIR__ . '/..' . '/twig/twig/lib/Twig/FileExtensionEscapingStrategy.php',
        'Twig_Filter' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Filter.php',
        'Twig_FilterCallableInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/FilterCallableInterface.php',
        'Twig_FilterInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/FilterInterface.php',
        'Twig_Filter_Function' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Filter/Function.php',
        'Twig_Filter_Method' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Filter/Method.php',
        'Twig_Filter_Node' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Filter/Node.php',
        'Twig_Function' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Function.php',
        'Twig_FunctionCallableInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/FunctionCallableInterface.php',
        'Twig_FunctionInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/FunctionInterface.php',
        'Twig_Function_Function' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Function/Function.php',
        'Twig_Function_Method' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Function/Method.php',
        'Twig_Function_Node' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Function/Node.php',
        'Twig_Lexer' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Lexer.php',
        'Twig_LexerInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/LexerInterface.php',
        'Twig_LoaderInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/LoaderInterface.php',
        'Twig_Loader_Array' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Loader/Array.php',
        'Twig_Loader_Chain' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Loader/Chain.php',
        'Twig_Loader_Filesystem' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Loader/Filesystem.php',
        'Twig_Loader_String' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Loader/String.php',
        'Twig_Markup' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Markup.php',
        'Twig_Node' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node.php',
        'Twig_NodeCaptureInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/NodeCaptureInterface.php',
        'Twig_NodeInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/NodeInterface.php',
        'Twig_NodeOutputInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/NodeOutputInterface.php',
        'Twig_NodeTraverser' => __DIR__ . '/..' . '/twig/twig/lib/Twig/NodeTraverser.php',
        'Twig_NodeVisitorInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/NodeVisitorInterface.php',
        'Twig_NodeVisitor_Escaper' => __DIR__ . '/..' . '/twig/twig/lib/Twig/NodeVisitor/Escaper.php',
        'Twig_NodeVisitor_Optimizer' => __DIR__ . '/..' . '/twig/twig/lib/Twig/NodeVisitor/Optimizer.php',
        'Twig_NodeVisitor_SafeAnalysis' => __DIR__ . '/..' . '/twig/twig/lib/Twig/NodeVisitor/SafeAnalysis.php',
        'Twig_NodeVisitor_Sandbox' => __DIR__ . '/..' . '/twig/twig/lib/Twig/NodeVisitor/Sandbox.php',
        'Twig_Node_AutoEscape' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/AutoEscape.php',
        'Twig_Node_Block' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Block.php',
        'Twig_Node_BlockReference' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/BlockReference.php',
        'Twig_Node_Body' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Body.php',
        'Twig_Node_CheckSecurity' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/CheckSecurity.php',
        'Twig_Node_Do' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Do.php',
        'Twig_Node_Embed' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Embed.php',
        'Twig_Node_Expression' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression.php',
        'Twig_Node_Expression_Array' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Array.php',
        'Twig_Node_Expression_AssignName' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/AssignName.php',
        'Twig_Node_Expression_Binary' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary.php',
        'Twig_Node_Expression_Binary_Add' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Add.php',
        'Twig_Node_Expression_Binary_And' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/And.php',
        'Twig_Node_Expression_Binary_BitwiseAnd' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/BitwiseAnd.php',
        'Twig_Node_Expression_Binary_BitwiseOr' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/BitwiseOr.php',
        'Twig_Node_Expression_Binary_BitwiseXor' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/BitwiseXor.php',
        'Twig_Node_Expression_Binary_Concat' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Concat.php',
        'Twig_Node_Expression_Binary_Div' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Div.php',
        'Twig_Node_Expression_Binary_EndsWith' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/EndsWith.php',
        'Twig_Node_Expression_Binary_Equal' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Equal.php',
        'Twig_Node_Expression_Binary_FloorDiv' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/FloorDiv.php',
        'Twig_Node_Expression_Binary_Greater' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Greater.php',
        'Twig_Node_Expression_Binary_GreaterEqual' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/GreaterEqual.php',
        'Twig_Node_Expression_Binary_In' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/In.php',
        'Twig_Node_Expression_Binary_Less' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Less.php',
        'Twig_Node_Expression_Binary_LessEqual' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/LessEqual.php',
        'Twig_Node_Expression_Binary_Matches' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Matches.php',
        'Twig_Node_Expression_Binary_Mod' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Mod.php',
        'Twig_Node_Expression_Binary_Mul' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Mul.php',
        'Twig_Node_Expression_Binary_NotEqual' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/NotEqual.php',
        'Twig_Node_Expression_Binary_NotIn' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/NotIn.php',
        'Twig_Node_Expression_Binary_Or' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Or.php',
        'Twig_Node_Expression_Binary_Power' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Power.php',
        'Twig_Node_Expression_Binary_Range' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Range.php',
        'Twig_Node_Expression_Binary_StartsWith' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/StartsWith.php',
        'Twig_Node_Expression_Binary_Sub' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Sub.php',
        'Twig_Node_Expression_BlockReference' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/BlockReference.php',
        'Twig_Node_Expression_Call' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Call.php',
        'Twig_Node_Expression_Conditional' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Conditional.php',
        'Twig_Node_Expression_Constant' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Constant.php',
        'Twig_Node_Expression_ExtensionReference' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/ExtensionReference.php',
        'Twig_Node_Expression_Filter' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Filter.php',
        'Twig_Node_Expression_Filter_Default' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Filter/Default.php',
        'Twig_Node_Expression_Function' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Function.php',
        'Twig_Node_Expression_GetAttr' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/GetAttr.php',
        'Twig_Node_Expression_MethodCall' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/MethodCall.php',
        'Twig_Node_Expression_Name' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Name.php',
        'Twig_Node_Expression_NullCoalesce' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/NullCoalesce.php',
        'Twig_Node_Expression_Parent' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Parent.php',
        'Twig_Node_Expression_TempName' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/TempName.php',
        'Twig_Node_Expression_Test' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Test.php',
        'Twig_Node_Expression_Test_Constant' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Test/Constant.php',
        'Twig_Node_Expression_Test_Defined' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Test/Defined.php',
        'Twig_Node_Expression_Test_Divisibleby' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Test/Divisibleby.php',
        'Twig_Node_Expression_Test_Even' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Test/Even.php',
        'Twig_Node_Expression_Test_Null' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Test/Null.php',
        'Twig_Node_Expression_Test_Odd' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Test/Odd.php',
        'Twig_Node_Expression_Test_Sameas' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Test/Sameas.php',
        'Twig_Node_Expression_Unary' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Unary.php',
        'Twig_Node_Expression_Unary_Neg' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Unary/Neg.php',
        'Twig_Node_Expression_Unary_Not' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Unary/Not.php',
        'Twig_Node_Expression_Unary_Pos' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Unary/Pos.php',
        'Twig_Node_Flush' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Flush.php',
        'Twig_Node_For' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/For.php',
        'Twig_Node_ForLoop' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/ForLoop.php',
        'Twig_Node_If' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/If.php',
        'Twig_Node_Import' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Import.php',
        'Twig_Node_Include' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Include.php',
        'Twig_Node_Macro' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Macro.php',
        'Twig_Node_Module' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Module.php',
        'Twig_Node_Print' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Print.php',
        'Twig_Node_Sandbox' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Sandbox.php',
        'Twig_Node_SandboxedPrint' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/SandboxedPrint.php',
        'Twig_Node_Set' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Set.php',
        'Twig_Node_SetTemp' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/SetTemp.php',
        'Twig_Node_Spaceless' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Spaceless.php',
        'Twig_Node_Text' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Text.php',
        'Twig_Node_With' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/With.php',
        'Twig_Parser' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Parser.php',
        'Twig_ParserInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/ParserInterface.php',
        'Twig_Profiler_Dumper_Blackfire' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Profiler/Dumper/Blackfire.php',
        'Twig_Profiler_Dumper_Html' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Profiler/Dumper/Html.php',
        'Twig_Profiler_Dumper_Text' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Profiler/Dumper/Text.php',
        'Twig_Profiler_NodeVisitor_Profiler' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Profiler/NodeVisitor/Profiler.php',
        'Twig_Profiler_Node_EnterProfile' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Profiler/Node/EnterProfile.php',
        'Twig_Profiler_Node_LeaveProfile' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Profiler/Node/LeaveProfile.php',
        'Twig_Profiler_Profile' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Profiler/Profile.php',
        'Twig_RuntimeLoaderInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/RuntimeLoaderInterface.php',
        'Twig_Sandbox_SecurityError' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Sandbox/SecurityError.php',
        'Twig_Sandbox_SecurityNotAllowedFilterError' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedFilterError.php',
        'Twig_Sandbox_SecurityNotAllowedFunctionError' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedFunctionError.php',
        'Twig_Sandbox_SecurityNotAllowedMethodError' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedMethodError.php',
        'Twig_Sandbox_SecurityNotAllowedPropertyError' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedPropertyError.php',
        'Twig_Sandbox_SecurityNotAllowedTagError' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedTagError.php',
        'Twig_Sandbox_SecurityPolicy' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Sandbox/SecurityPolicy.php',
        'Twig_Sandbox_SecurityPolicyInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Sandbox/SecurityPolicyInterface.php',
        'Twig_SimpleFilter' => __DIR__ . '/..' . '/twig/twig/lib/Twig/SimpleFilter.php',
        'Twig_SimpleFunction' => __DIR__ . '/..' . '/twig/twig/lib/Twig/SimpleFunction.php',
        'Twig_SimpleTest' => __DIR__ . '/..' . '/twig/twig/lib/Twig/SimpleTest.php',
        'Twig_Source' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Source.php',
        'Twig_SourceContextLoaderInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/SourceContextLoaderInterface.php',
        'Twig_Template' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Template.php',
        'Twig_TemplateInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TemplateInterface.php',
        'Twig_TemplateWrapper' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TemplateWrapper.php',
        'Twig_Test' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Test.php',
        'Twig_TestCallableInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TestCallableInterface.php',
        'Twig_TestInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TestInterface.php',
        'Twig_Test_Function' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Test/Function.php',
        'Twig_Test_IntegrationTestCase' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Test/IntegrationTestCase.php',
        'Twig_Test_Method' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Test/Method.php',
        'Twig_Test_Node' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Test/Node.php',
        'Twig_Test_NodeTestCase' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Test/NodeTestCase.php',
        'Twig_Token' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Token.php',
        'Twig_TokenParser' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser.php',
        'Twig_TokenParserBroker' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParserBroker.php',
        'Twig_TokenParserBrokerInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParserBrokerInterface.php',
        'Twig_TokenParserInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParserInterface.php',
        'Twig_TokenParser_AutoEscape' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/AutoEscape.php',
        'Twig_TokenParser_Block' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Block.php',
        'Twig_TokenParser_Do' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Do.php',
        'Twig_TokenParser_Embed' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Embed.php',
        'Twig_TokenParser_Extends' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Extends.php',
        'Twig_TokenParser_Filter' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Filter.php',
        'Twig_TokenParser_Flush' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Flush.php',
        'Twig_TokenParser_For' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/For.php',
        'Twig_TokenParser_From' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/From.php',
        'Twig_TokenParser_If' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/If.php',
        'Twig_TokenParser_Import' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Import.php',
        'Twig_TokenParser_Include' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Include.php',
        'Twig_TokenParser_Macro' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Macro.php',
        'Twig_TokenParser_Sandbox' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Sandbox.php',
        'Twig_TokenParser_Set' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Set.php',
        'Twig_TokenParser_Spaceless' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Spaceless.php',
        'Twig_TokenParser_Use' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Use.php',
        'Twig_TokenParser_With' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/With.php',
        'Twig_TokenStream' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenStream.php',
        'Twig_Util_DeprecationCollector' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Util/DeprecationCollector.php',
        'Twig_Util_TemplateDirIterator' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Util/TemplateDirIterator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb4824b33a160b6b1d628c7e0286c793b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb4824b33a160b6b1d628c7e0286c793b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb4824b33a160b6b1d628c7e0286c793b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb4824b33a160b6b1d628c7e0286c793b::$classMap;

        }, null, ClassLoader::class);
    }
}
