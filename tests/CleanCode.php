<?php
declare(strict_types=1);

/*
 * Created by netlogix GmbH & Co. KG
 *
 * @copyright netlogix GmbH & Co. KG
 */

namespace tests\sd\examples;

class CleanCode
{
    /** @var string */
    private $privateClassMember = 'private-string';

    public function thisIsANiceFunction(string $arg1, int $arg2): string
    {
        return 'teststring';
    }

    public function thisTouchesPrivateClassMember(): void
    {
        $this->privateClassMember = 'new-private-string';
    }

    public function thisReadsPrivateClassMember(): string
    {
        return $this->privateClassMember;
    }

    public function thisUsesAnInternalFunction(): string
    {
        // Uses '\md5' instead of 'md5' to improve opcode handling
        return \md5('hashMe');
    }

    /**
     * @todo Do something useful
     *
     * @dataProvider thisIsANiceFunction
     */
    public function dataProviderAndTodoAreAllowed(): bool
    {
        return true;
    }
}
