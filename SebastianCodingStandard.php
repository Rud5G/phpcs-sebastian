<?php
class PHP_CodeSniffer_Standards_Sebastian_SebastianCodingStandard extends PHP_CodeSniffer_Standards_CodingStandard
{
    public function getIncludedSniffs()
    {
        return array(
          'Generic/Sniffs/CodeAnalysis/EmptyStatementSniff.php',
          'Generic/Sniffs/CodeAnalysis/ForLoopShouldBeWhileLoopSniff.php',
          'Generic/Sniffs/CodeAnalysis/ForLoopWithTestFunctionCallSniff.php',
          'Generic/Sniffs/CodeAnalysis/JumbledIncrementerSniff.php',
          'Generic/Sniffs/CodeAnalysis/UnconditionalIfStatementSniff.php',
          'Generic/Sniffs/CodeAnalysis/UnnecessaryFinalModifierSniff.php',
          'Generic/Sniffs/CodeAnalysis/UselessOverridingMethodSniff.php',

          'Generic/Sniffs/Commenting/TodoSniff.php',

          'Generic/Sniffs/ControlStructures/InlineControlStructureSniff.php',

          'Generic/Sniffs/Files/LineEndingsSniff.php',

          'Generic/Sniffs/Formatting/DisallowMultipleStatementsSniff.php',
          'Generic/Sniffs/Formatting/MultipleStatementAlignmentSniff.php',
          'Generic/Sniffs/Formatting/NoSpaceAfterCastSniff.php',

          'Generic/Sniffs/Functions/OpeningFunctionBraceBsdAllmanSniff.php',
          'PEAR/Sniffs/Functions/ValidDefaultValueSniff.php',

          'Generic/Sniffs/NamingConventions/ConstructorNameSniff.php',
          'Generic/Sniffs/NamingConventions/UpperCaseConstantNameSniff.php',
          'PEAR/Sniffs/NamingConventions/ValidClassNameSniff.php',

          'Generic/Sniffs/PHP/DisallowShortOpenTagSniff.php',
          'Generic/Sniffs/PHP/NoSilencedErrorsSniff.php',
          'Generic/Sniffs/PHP/UpperCaseConstantSniff.php',

          'Generic/Sniffs/WhiteSpace/DisallowTabIndentSniff.php',
          'Generic/Sniffs/WhiteSpace/ScopeIndentSniff.php',
          'Squiz/Sniffs/WhiteSpace/SuperfluousWhitespaceSniff.php',
        );
    }
}
