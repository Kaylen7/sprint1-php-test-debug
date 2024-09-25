<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Covers;

use Nivell1\Exercici1\NumberChecker;

#[CoversClass(NumberChecker::class)]
final class NumberCheckerTest extends TestCase {
    
    #[Covers(NumberChecker::class . '::isEven')]
    public function testIsEven(): void {

        $input = [10, 3, 0];
        $expectedOutput = [true, false, true];

        foreach($input as $key=>$value){
            $checker = new NumberChecker($value);
            $result = $checker->isEven();
            $this->assertSame($expectedOutput[$key], $result);
        }
    }

    #[Covers(NumberChecker::class . '::isPositive')]
    public function testIsPositive(): void {

        $input = [10, -6, 0];
        $expectedOutput = [true, false, false];

        foreach($input as $key=>$value){
            $checker = new NumberChecker($value);
            $result = $checker->isPositive();
            $this->assertSame($expectedOutput[$key], $result);

        }
    }
}