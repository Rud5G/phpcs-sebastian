<?php
class Sebastian_Sniffs_Files_LineLengthSniff extends Generic_Sniffs_Files_LineLengthSniff
{
    /**
     * Checks if a line is too long.
     *
     * @param  PHP_CodeSniffer_File $phpcsFile   The file being scanned.
     * @param  int                  $stackPtr    The token at the end of the line.
     * @param  string               $lineContent The content of the line.
     * @return void
     */
    protected function checkLineLength(PHP_CodeSniffer_File $phpcsFile, $stackPtr, $lineContent)
    {
        // Ugly hack to exclude class/interface and
        // function/method declarations.
        $process = TRUE;
        $tokens  = @token_get_all('<?php ' . $lineContent);

        if (count($tokens) > 2) {
            foreach ($tokens as $token) {
                if (is_array($token)) {
                    if ($token[0] == T_CLASS ||
                        $token[0] == T_FUNCTION ||
                        $token[0] == T_INTERFACE) {
                        $process = FALSE;
                    }
                }
            }
        }

        // If the content is a CVS or SVN id in a version tag, or it is
        // a license tag with a name and URL, there is nothing the
        // developer can do to shorten the line, so don't throw errors.
        if ($process &&
            preg_match('|@version[^\$]+\$Id|', $lineContent) === 0 &&
            preg_match('|@license|', $lineContent) === 0) {
            $lineLength = strlen($lineContent);

            if ($this->absoluteLineLimit > 0 && $lineLength > $this->absoluteLineLimit) {
                $error = 'Line exceeds maximum limit of '.$this->absoluteLineLimit." characters; contains $lineLength characters";
                $phpcsFile->addError($error, $stackPtr);
            }

            else if ($lineLength > $this->lineLimit) {
                $warning = 'Line exceeds '.$this->lineLimit." characters; contains $lineLength characters";
                $phpcsFile->addWarning($warning, $stackPtr);
            }
        }
    }
}
?>
