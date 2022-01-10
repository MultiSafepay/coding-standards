<?php

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
use PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\EndFileNewlineSniff;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $parameters = $containerConfigurator->parameters();

    $parameters->set(Option::LINE_ENDING, PHP_EOL);

    $services->set(\PhpCsFixer\Fixer\Basic\EncodingFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class);
    $services->set(\PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer::class);
    $services->set(\PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\ElseifFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class);
    $services->set(\PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class)->call('configure', [['on_multiline' => 'ensure_fully_multiline']]);
    $services->set(\PhpCsFixer\Fixer\PhpTag\NoClosingTagFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\NoSpacesAfterFunctionNameFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer::class);
    $services->set(\PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer::class);
    $services->set(\PhpCsFixer\Fixer\Import\SingleLineAfterImportsFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSemicolonToColonFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSpaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\NoUselessElseFixer::class);
    $services->set(\PhpCsFixer\Fixer\Semicolon\SemicolonAfterInstructionFixer::class);
    $services->set(\PhpCsFixer\Fixer\Semicolon\NoEmptyStatementFixer::class);
    $services->set(\PhpCsFixer\Fixer\Basic\BracesFixer::class)->call('configure', [['allow_single_line_closure' => \false, 'position_after_functions_and_oop_constructs' => 'next', 'position_after_control_structures' => 'same', 'position_after_anonymous_constructs' => 'same']]);
    $services->set(\PhpCsFixer\Fixer\Whitespace\NoTrailingWhitespaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Comment\NoTrailingWhitespaceInCommentFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\SimplifiedIfReturnFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\VoidReturnFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer::class);
    $services->set(\PhpCsFixer\Fixer\Semicolon\SpaceAfterSemicolonFixer::class);
    $services->set(ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\WhitespaceAfterCommaInArrayFixer::class);
    $services->set(\PhpCsFixer\Fixer\Import\OrderedImportsFixer::class)->call('configure', [['imports_order' => ['class', 'function', 'const']]]);
    $services->set(\PhpCsFixer\Fixer\LanguageConstruct\IsNullFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer::class)->call('configure', [['equal' => \false, 'identical' => \false, 'less_and_greater' => \false]]);;
    $services->set(\PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer::class);
    $services->set(\PhpCsFixer\Fixer\Semicolon\SpaceAfterSemicolonFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\ProtectedToPrivateFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer::class);
    $services->set(\SlevomatCodingStandard\Sniffs\PHP\UselessSemicolonSniff::class);
    $services->set(\PhpCsFixer\Fixer\Semicolon\MultilineWhitespaceBeforeSemicolonsFixer::class);
};