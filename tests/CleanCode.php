<?php
declare(strict_types=1);

/*
 * Created by solutionDrive GmbH
 *
 * @copyright 2018 solutionDrive GmbH
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
}
