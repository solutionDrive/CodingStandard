<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\FunctionNotation\NativeFunctionInvocationFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([__DIR__ . '/tests/']);

    $ecsConfig->parallel();

    $ecsConfig->rules([
        PHP_CodeSniffer\Standards\PSR2\Sniffs\Namespaces\NamespaceDeclarationSniff::class,
        PHP_CodeSniffer\Standards\PSR2\Sniffs\Namespaces\UseDeclarationSniff::class,
        PHP_CodeSniffer\Standards\PSR2\Sniffs\Classes\ClassDeclarationSniff::class,
        PHP_CodeSniffer\Standards\PSR2\Sniffs\Classes\PropertyDeclarationSniff::class,
        PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\EndFileNewlineSniff::class,
        PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\ClosingTagSniff::class,
        PHP_CodeSniffer\Standards\PSR2\Sniffs\ControlStructures\ControlStructureSpacingSniff::class,
        PHP_CodeSniffer\Standards\PSR2\Sniffs\ControlStructures\SwitchDeclarationSniff::class,
        PHP_CodeSniffer\Standards\PSR2\Sniffs\ControlStructures\ElseIfDeclarationSniff::class,
        PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\FunctionCallSignatureSniff::class,
        PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\MethodDeclarationSniff::class,
        PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\FunctionClosingBraceSniff::class,
        PHP_CodeSniffer\Standards\Generic\Sniffs\Files\ByteOrderMarkSniff::class,
        PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\ValidClassNameSniff::class,
        PHP_CodeSniffer\Standards\Generic\Sniffs\NamingConventions\UpperCaseConstantNameSniff::class,
        PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\DisallowMultipleStatementsSniff::class,
        PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowTabIndentSniff::class,
        PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseKeywordSniff::class,
        PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseConstantSniff::class,
        PHP_CodeSniffer\Standards\Squiz\Sniffs\Scope\MethodScopeSniff::class,
        PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ScopeKeywordSpacingSniff::class,
        PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDeclarationSniff::class,
        PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\LowercaseFunctionKeywordsSniff::class,
        PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\ValidDefaultValueSniff::class,
        PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\MultiLineFunctionDeclarationSniff::class,
        PHP_CodeSniffer\Standards\Generic\Sniffs\Functions\FunctionCallArgumentSpacingSniff::class,
        PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ControlSignatureSniff::class,
        PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ControlStructureSpacingSniff::class,
        PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ScopeClosingBraceSniff::class,
        PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ForEachLoopDeclarationSniff::class,
        PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ForLoopDeclarationSniff::class,
        PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\LowercaseDeclarationSniff::class,
        PHP_CodeSniffer\Standards\Generic\Sniffs\ControlStructures\InlineControlStructureSniff::class,
        PhpCsFixer\Fixer\Basic\EncodingFixer::class,
        PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class,
        PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer::class,
        PhpCsFixer\Fixer\Basic\BracesFixer::class,
        PhpCsFixer\Fixer\ControlStructure\ElseifFixer::class,
        PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer::class,
        PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class,
        PhpCsFixer\Fixer\Whitespace\LineEndingFixer::class,
        PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer::class,
        PhpCsFixer\Fixer\ControlStructure\NoBreakCommentFixer::class,
        PhpCsFixer\Fixer\PhpTag\NoClosingTagFixer::class,
        PhpCsFixer\Fixer\FunctionNotation\NoSpacesAfterFunctionNameFixer::class,
        PhpCsFixer\Fixer\Whitespace\NoSpacesInsideParenthesisFixer::class,
        PhpCsFixer\Fixer\Whitespace\NoTrailingWhitespaceFixer::class,
        PhpCsFixer\Fixer\Comment\NoTrailingWhitespaceInCommentFixer::class,
        PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class,
        PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer::class,
        PhpCsFixer\Fixer\Import\SingleLineAfterImportsFixer::class,
        PhpCsFixer\Fixer\ControlStructure\SwitchCaseSemicolonToColonFixer::class,
        PhpCsFixer\Fixer\ControlStructure\SwitchCaseSpaceFixer::class,
        PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class,
        PhpCsFixer\Fixer\Import\NoUnusedImportsFixer::class,
        PhpCsFixer\Fixer\Import\OrderedImportsFixer::class,
        PhpCsFixer\Fixer\Semicolon\NoEmptyStatementFixer::class,
        PhpCsFixer\Fixer\ClassNotation\ProtectedToPrivateFixer::class,
        PhpCsFixer\Fixer\ControlStructure\NoUnneededControlParenthesesFixer::class,
        PhpCsFixer\Fixer\ControlStructure\NoUnneededCurlyBracesFixer::class,
        PhpCsFixer\Fixer\Operator\NewWithBracesFixer::class,
        PhpCsFixer\Fixer\Operator\UnaryOperatorSpacesFixer::class,
        PhpCsFixer\Fixer\CastNotation\CastSpacesFixer::class,
        PhpCsFixer\Fixer\LanguageConstruct\DeclareEqualNormalizeFixer::class,
        PhpCsFixer\Fixer\FunctionNotation\FunctionTypehintSpaceFixer::class,
        PhpCsFixer\Fixer\ControlStructure\IncludeFixer::class,
        PhpCsFixer\Fixer\CastNotation\LowercaseCastFixer::class,
        PhpCsFixer\Fixer\Casing\NativeFunctionCasingFixer::class,
        PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer::class,
        PhpCsFixer\Fixer\Phpdoc\NoBlankLinesAfterPhpdocFixer::class,
        PhpCsFixer\Fixer\Comment\NoEmptyCommentFixer::class,
        PhpCsFixer\Fixer\Phpdoc\NoEmptyPhpdocFixer::class,
        PhpCsFixer\Fixer\NamespaceNotation\NoLeadingNamespaceWhitespaceFixer::class,
        PhpCsFixer\Fixer\ArrayNotation\NoMultilineWhitespaceAroundDoubleArrowFixer::class,
        PhpCsFixer\Fixer\CastNotation\NoShortBoolCastFixer::class,
        PhpCsFixer\Fixer\Semicolon\NoSinglelineWhitespaceBeforeSemicolonsFixer::class,
        PhpCsFixer\Fixer\Whitespace\NoSpacesAroundOffsetFixer::class,
        PhpCsFixer\Fixer\ControlStructure\NoTrailingCommaInListCallFixer::class,
        PhpCsFixer\Fixer\ArrayNotation\NoTrailingCommaInSinglelineArrayFixer::class,
        PhpCsFixer\Fixer\ArrayNotation\NoWhitespaceBeforeCommaInArrayFixer::class,
        PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer::class,
        PhpCsFixer\Fixer\ArrayNotation\NormalizeIndexBraceFixer::class,
        PhpCsFixer\Fixer\Operator\ObjectOperatorWithoutWhitespaceFixer::class,
        PhpCsFixer\Fixer\Phpdoc\PhpdocAnnotationWithoutDotFixer::class,
        PhpCsFixer\Fixer\Phpdoc\PhpdocIndentFixer::class,
        PhpCsFixer\Fixer\Phpdoc\PhpdocNoAccessFixer::class,
        PhpCsFixer\Fixer\Phpdoc\PhpdocNoEmptyReturnFixer::class,
        PhpCsFixer\Fixer\Phpdoc\PhpdocNoPackageFixer::class,
        PhpCsFixer\Fixer\Phpdoc\PhpdocNoUselessInheritdocFixer::class,
        PhpCsFixer\Fixer\Phpdoc\PhpdocScalarFixer::class,
        PhpCsFixer\Fixer\Phpdoc\PhpdocSingleLineVarSpacingFixer::class,
        PhpCsFixer\Fixer\Phpdoc\PhpdocToCommentFixer::class,
        PhpCsFixer\Fixer\Phpdoc\PhpdocTrimFixer::class,
        PhpCsFixer\Fixer\Phpdoc\PhpdocTypesFixer::class,
        PhpCsFixer\Fixer\Phpdoc\PhpdocVarWithoutNameFixer::class,
        PhpCsFixer\Fixer\ClassNotation\SelfAccessorFixer::class,
        PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer::class,
        PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer::class,
        PhpCsFixer\Fixer\Semicolon\SpaceAfterSemicolonFixer::class,
        PhpCsFixer\Fixer\Operator\StandardizeNotEqualsFixer::class,
        PhpCsFixer\Fixer\Operator\TernaryOperatorSpacesFixer::class,
        PhpCsFixer\Fixer\ArrayNotation\TrimArraySpacesFixer::class,
        PhpCsFixer\Fixer\ArrayNotation\WhitespaceAfterCommaInArrayFixer::class,
        PhpCsFixer\Fixer\Casing\MagicConstantCasingFixer::class,
        PhpCsFixer\Fixer\PhpUnit\PhpUnitFqcnAnnotationFixer::class,
        PhpCsFixer\Fixer\Phpdoc\PhpdocNoAliasTagFixer::class,
        PhpCsFixer\Fixer\NamespaceNotation\SingleBlankLineBeforeNamespaceFixer::class,
        PhpCsFixer\Fixer\ClassNotation\NoUnneededFinalMethodFixer::class,
        PhpCsFixer\Fixer\Semicolon\SemicolonAfterInstructionFixer::class,
        PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer::class,
        PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class,
        SlevomatCodingStandard\Sniffs\TypeHints\ParameterTypeHintSniff::class,
        SlevomatCodingStandard\Sniffs\TypeHints\ReturnTypeHintSniff::class,
        SlevomatCodingStandard\Sniffs\Functions\UnusedInheritedVariablePassedToClosureSniff::class,
        SlevomatCodingStandard\Sniffs\PHP\UselessSemicolonSniff::class,
        SlevomatCodingStandard\Sniffs\PHP\UselessParenthesesSniff::class,
        SlevomatCodingStandard\Sniffs\ControlStructures\RequireShortTernaryOperatorSniff::class,
        SlevomatCodingStandard\Sniffs\Operators\RequireCombinedAssignmentOperatorSniff::class,
        SlevomatCodingStandard\Sniffs\Exceptions\ReferenceThrowableOnlySniff::class,
        SlevomatCodingStandard\Sniffs\Commenting\RequireOneLinePropertyDocCommentSniff::class,
    ]);

    $ecsConfig->ruleWithConfiguration(NativeFunctionInvocationFixer::class, ['include' => ['@all'], 'scope' => 'all']);
    $ecsConfig->ruleWithConfiguration(
        PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineEndingsSniff::class,
        ['eolChar' => '\n']
    );
    $ecsConfig->ruleWithConfiguration(
        PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SuperfluousWhitespaceSniff::class,
        ['ignoreBlankLines' => true]
    );
    $ecsConfig->ruleWithConfiguration(
        PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\ScopeIndentSniff::class,
        ['ignoreIndentationTokens' => ['T_COMMENT', 'T_DOC_COMMENT_OPEN_TAG']]
    );
    $ecsConfig->ruleWithConfiguration(
        PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDeclarationArgumentSpacingSniff::class,
        ['equalsSpacing' => 1]
    );
    $ecsConfig->ruleWithConfiguration(
        PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class,
        ['on_multiline' => 'ensure_fully_multiline']
    );
    $ecsConfig->ruleWithConfiguration(
        PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer::class,
        ['elements' => ['property']]
    );
    $ecsConfig->ruleWithConfiguration(
        PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class,
        ['syntax' => 'short']
    );
    $ecsConfig->ruleWithConfiguration(
        PhpCsFixer\Fixer\Operator\ConcatSpaceFixer::class,
        ['spacing' => 'one']
    );
    $ecsConfig->ruleWithConfiguration(
        PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer::class,
        ['tags' => ['param']]
    );
    $ecsConfig->ruleWithConfiguration(
        PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class,
        ['single_line' => true]
    );
    $ecsConfig->ruleWithConfiguration(
        PhpCsFixer\Fixer\Alias\NoMixedEchoPrintFixer::class,
        ['use' => 'echo']
    );
    $ecsConfig->ruleWithConfiguration(
        PhpCsFixer\Fixer\Alias\RandomApiMigrationFixer::class,
        ['replacements' => ['mt_rand' => 'random_int', 'rand' => 'random_int']]
    );
    $ecsConfig->ruleWithConfiguration(
        PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer::class,
        ['space_before' => 'none']
    );
    $ecsConfig->ruleWithConfiguration(
        SlevomatCodingStandard\Sniffs\Commenting\DocCommentSpacingSniff::class,
        [
            'linesCountBeforeFirstContent' => 0,
            'linesCountBetweenDifferentAnnotationsTypes' => 1,
        ]
    );
    $ecsConfig->ruleWithConfiguration(
        PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\MemberVarSpacingSniff::class,
        [
            'spacing' => 1,
            'spacingBeforeFirst' => 0,
        ]
    );
    $ecsConfig->ruleWithConfiguration(
        PhpCsFixer\Fixer\Comment\HeaderCommentFixer::class,
        [
            'header' => <<<TEXT
Created by netlogix GmbH & Co. KG

@copyright netlogix GmbH & Co. KG
TEXT,
            'location' => 'after_declare_strict',
        ]
    );
};
