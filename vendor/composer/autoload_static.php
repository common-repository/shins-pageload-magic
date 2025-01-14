<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

use Composer\AutoloadShinSenterDeferWordpress\ClassLoader as ClassLoaderShinSenterDeferWordpress;


class ComposerStaticInit76768edc54cda7d6dc94a6a820afc178
{
    public static $files = array (
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\OptionsResolver\\' => 34,
            'Symfony\\Component\\CssSelector\\' => 30,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
        ),
        'D' => 
        array (
            'Dangoodman\\ComposerForWordpress\\' => 32,
        ),
        'A' => 
        array (
            'AppSeeds\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\OptionsResolver\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/options-resolver',
        ),
        'Symfony\\Component\\CssSelector\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/css-selector',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Dangoodman\\ComposerForWordpress\\' => 
        array (
            0 => __DIR__ . '/..' . '/dangoodman/composer-for-wordpress',
        ),
        'AppSeeds\\' => 
        array (
            0 => __DIR__ . '/..' . '/shinsenter/defer.php/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JSMin\\' => 
            array (
                0 => __DIR__ . '/..' . '/mrclay/jsmin-php/src',
            ),
        ),
    );

    public static $classMap = array (
        'AppSeeds\\Bugs\\BugAmpAttribute' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Bugs/BugAmpAttribute.php',
        'AppSeeds\\Bugs\\BugCharset' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Bugs/BugCharset.php',
        'AppSeeds\\Bugs\\BugHtml5DocType' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Bugs/BugHtml5DocType.php',
        'AppSeeds\\Bugs\\BugLongLine' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Bugs/BugLongLine.php',
        'AppSeeds\\Bugs\\BugTemplateScripts' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Bugs/BugTemplateScripts.php',
        'AppSeeds\\Contracts\\DeferLazyable' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Contracts/DeferLazyable.php',
        'AppSeeds\\Contracts\\DeferMinifyable' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Contracts/DeferMinifyable.php',
        'AppSeeds\\Contracts\\DeferNormalizable' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Contracts/DeferNormalizable.php',
        'AppSeeds\\Contracts\\DeferOptimizable' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Contracts/DeferOptimizable.php',
        'AppSeeds\\Contracts\\DeferPreloadable' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Contracts/DeferPreloadable.php',
        'AppSeeds\\Contracts\\DeferReorderable' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Contracts/DeferReorderable.php',
        'AppSeeds\\Contracts\\PatchInterface' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Contracts/PatchInterface.php',
        'AppSeeds\\Defer' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Defer.php',
        'AppSeeds\\Elements\\CommentNode' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Elements/CommentNode.php',
        'AppSeeds\\Elements\\CommonDomTraits' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Elements/CommonDomTraits.php',
        'AppSeeds\\Elements\\DocumentNode' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Elements/DocumentNode.php',
        'AppSeeds\\Elements\\ElementNode' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Elements/ElementNode.php',
        'AppSeeds\\Elements\\NodeList' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Elements/NodeList.php',
        'AppSeeds\\Elements\\TextNode' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Elements/TextNode.php',
        'AppSeeds\\Helpers\\DeferAssetUtil' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Helpers/DeferAssetUtil.php',
        'AppSeeds\\Helpers\\DeferCache' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Helpers/DeferCache.php',
        'AppSeeds\\Helpers\\DeferConstant' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Helpers/DeferConstant.php',
        'AppSeeds\\Helpers\\DeferException' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Helpers/DeferException.php',
        'AppSeeds\\Helpers\\DeferJs' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Helpers/DeferJs.php',
        'AppSeeds\\Helpers\\DeferMinifier' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Helpers/DeferMinifier.php',
        'AppSeeds\\Helpers\\DeferOptimizer' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Helpers/DeferOptimizer.php',
        'AppSeeds\\Helpers\\DeferOptions' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Helpers/DeferOptions.php',
        'AppSeeds\\Resolvers\\AnchorResolver' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Resolvers/AnchorResolver.php',
        'AppSeeds\\Resolvers\\DeferResolver' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Resolvers/DeferResolver.php',
        'AppSeeds\\Resolvers\\IframeResolver' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Resolvers/IframeResolver.php',
        'AppSeeds\\Resolvers\\InlineStyleResolver' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Resolvers/InlineStyleResolver.php',
        'AppSeeds\\Resolvers\\LinkResolver' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Resolvers/LinkResolver.php',
        'AppSeeds\\Resolvers\\MediaResolver' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Resolvers/MediaResolver.php',
        'AppSeeds\\Resolvers\\MetaResolver' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Resolvers/MetaResolver.php',
        'AppSeeds\\Resolvers\\ScriptResolver' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Resolvers/ScriptResolver.php',
        'AppSeeds\\Resolvers\\StyleResolver' => __DIR__ . '/..' . '/shinsenter/defer.php/src/Resolvers/StyleResolver.php',
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Dangoodman\\ComposerForWordpress\\ComposerForWordpress' => __DIR__ . '/..' . '/dangoodman/composer-for-wordpress/ComposerForWordpress.php',
        'JSMin\\JSMin' => __DIR__ . '/..' . '/mrclay/jsmin-php/src/JSMin/JSMin.php',
        'JSMin\\UnterminatedCommentException' => __DIR__ . '/..' . '/mrclay/jsmin-php/src/JSMin/UnterminatedCommentException.php',
        'JSMin\\UnterminatedRegExpException' => __DIR__ . '/..' . '/mrclay/jsmin-php/src/JSMin/UnterminatedRegExpException.php',
        'JSMin\\UnterminatedStringException' => __DIR__ . '/..' . '/mrclay/jsmin-php/src/JSMin/UnterminatedStringException.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Psr\\SimpleCache\\CacheException' => __DIR__ . '/..' . '/psr/simple-cache/src/CacheException.php',
        'Psr\\SimpleCache\\CacheInterface' => __DIR__ . '/..' . '/psr/simple-cache/src/CacheInterface.php',
        'Psr\\SimpleCache\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/simple-cache/src/InvalidArgumentException.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'Symfony\\Component\\CssSelector\\CssSelectorConverter' => __DIR__ . '/..' . '/symfony/css-selector/CssSelectorConverter.php',
        'Symfony\\Component\\CssSelector\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/css-selector/Exception/ExceptionInterface.php',
        'Symfony\\Component\\CssSelector\\Exception\\ExpressionErrorException' => __DIR__ . '/..' . '/symfony/css-selector/Exception/ExpressionErrorException.php',
        'Symfony\\Component\\CssSelector\\Exception\\InternalErrorException' => __DIR__ . '/..' . '/symfony/css-selector/Exception/InternalErrorException.php',
        'Symfony\\Component\\CssSelector\\Exception\\ParseException' => __DIR__ . '/..' . '/symfony/css-selector/Exception/ParseException.php',
        'Symfony\\Component\\CssSelector\\Exception\\SyntaxErrorException' => __DIR__ . '/..' . '/symfony/css-selector/Exception/SyntaxErrorException.php',
        'Symfony\\Component\\CssSelector\\Node\\AbstractNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/AbstractNode.php',
        'Symfony\\Component\\CssSelector\\Node\\AttributeNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/AttributeNode.php',
        'Symfony\\Component\\CssSelector\\Node\\ClassNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/ClassNode.php',
        'Symfony\\Component\\CssSelector\\Node\\CombinedSelectorNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/CombinedSelectorNode.php',
        'Symfony\\Component\\CssSelector\\Node\\ElementNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/ElementNode.php',
        'Symfony\\Component\\CssSelector\\Node\\FunctionNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/FunctionNode.php',
        'Symfony\\Component\\CssSelector\\Node\\HashNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/HashNode.php',
        'Symfony\\Component\\CssSelector\\Node\\NegationNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/NegationNode.php',
        'Symfony\\Component\\CssSelector\\Node\\NodeInterface' => __DIR__ . '/..' . '/symfony/css-selector/Node/NodeInterface.php',
        'Symfony\\Component\\CssSelector\\Node\\PseudoNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/PseudoNode.php',
        'Symfony\\Component\\CssSelector\\Node\\SelectorNode' => __DIR__ . '/..' . '/symfony/css-selector/Node/SelectorNode.php',
        'Symfony\\Component\\CssSelector\\Node\\Specificity' => __DIR__ . '/..' . '/symfony/css-selector/Node/Specificity.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\CommentHandler' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/CommentHandler.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\HandlerInterface' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/HandlerInterface.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\HashHandler' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/HashHandler.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\IdentifierHandler' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/IdentifierHandler.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\NumberHandler' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/NumberHandler.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\StringHandler' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/StringHandler.php',
        'Symfony\\Component\\CssSelector\\Parser\\Handler\\WhitespaceHandler' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Handler/WhitespaceHandler.php',
        'Symfony\\Component\\CssSelector\\Parser\\Parser' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Parser.php',
        'Symfony\\Component\\CssSelector\\Parser\\ParserInterface' => __DIR__ . '/..' . '/symfony/css-selector/Parser/ParserInterface.php',
        'Symfony\\Component\\CssSelector\\Parser\\Reader' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Reader.php',
        'Symfony\\Component\\CssSelector\\Parser\\Shortcut\\ClassParser' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Shortcut/ClassParser.php',
        'Symfony\\Component\\CssSelector\\Parser\\Shortcut\\ElementParser' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Shortcut/ElementParser.php',
        'Symfony\\Component\\CssSelector\\Parser\\Shortcut\\EmptyStringParser' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Shortcut/EmptyStringParser.php',
        'Symfony\\Component\\CssSelector\\Parser\\Shortcut\\HashParser' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Shortcut/HashParser.php',
        'Symfony\\Component\\CssSelector\\Parser\\Token' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Token.php',
        'Symfony\\Component\\CssSelector\\Parser\\TokenStream' => __DIR__ . '/..' . '/symfony/css-selector/Parser/TokenStream.php',
        'Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\Tokenizer' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Tokenizer/Tokenizer.php',
        'Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\TokenizerEscaping' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Tokenizer/TokenizerEscaping.php',
        'Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\TokenizerPatterns' => __DIR__ . '/..' . '/symfony/css-selector/Parser/Tokenizer/TokenizerPatterns.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\AbstractExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/AbstractExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\AttributeMatchingExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/AttributeMatchingExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\CombinationExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/CombinationExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\ExtensionInterface' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/ExtensionInterface.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\FunctionExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/FunctionExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\HtmlExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/HtmlExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\NodeExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/NodeExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Extension\\PseudoClassExtension' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Extension/PseudoClassExtension.php',
        'Symfony\\Component\\CssSelector\\XPath\\Translator' => __DIR__ . '/..' . '/symfony/css-selector/XPath/Translator.php',
        'Symfony\\Component\\CssSelector\\XPath\\TranslatorInterface' => __DIR__ . '/..' . '/symfony/css-selector/XPath/TranslatorInterface.php',
        'Symfony\\Component\\CssSelector\\XPath\\XPathExpr' => __DIR__ . '/..' . '/symfony/css-selector/XPath/XPathExpr.php',
        'Symfony\\Component\\OptionsResolver\\Debug\\OptionsResolverIntrospector' => __DIR__ . '/..' . '/symfony/options-resolver/Debug/OptionsResolverIntrospector.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\AccessException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/AccessException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/ExceptionInterface.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/InvalidOptionsException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\MissingOptionsException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/MissingOptionsException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/NoConfigurationException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\NoSuchOptionException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/NoSuchOptionException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\OptionDefinitionException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/OptionDefinitionException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/UndefinedOptionsException.php',
        'Symfony\\Component\\OptionsResolver\\Options' => __DIR__ . '/..' . '/symfony/options-resolver/Options.php',
        'Symfony\\Component\\OptionsResolver\\OptionsResolver' => __DIR__ . '/..' . '/symfony/options-resolver/OptionsResolver.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'Symfony\\Polyfill\\Php80\\PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/PhpToken.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoaderShinSenterDeferWordpress $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit76768edc54cda7d6dc94a6a820afc178::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit76768edc54cda7d6dc94a6a820afc178::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit76768edc54cda7d6dc94a6a820afc178::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit76768edc54cda7d6dc94a6a820afc178::$classMap;

        }, null, ClassLoaderShinSenterDeferWordpress::class);
    }
}
