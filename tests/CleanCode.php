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
    public const TEST_CONSTANT = 'test';

    /** @var string */
    private $privateClassMember = 'private-string';

    public function thisIsANiceFunction($arg1, $arg2): string
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

    public function iHaveAnArray(): array
    {
        $multilineArray = [
            3,
            5,
            7,
            123,
        ];

        return [3, 5, 7, 123];
    }

    public function iHaveALoop(): int
    {
        $array = $this->iHaveAnArray();
        $test = 0;
        foreach ($array as $key => $entry) {
            $test = $entry;
        }

        return $test;
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
