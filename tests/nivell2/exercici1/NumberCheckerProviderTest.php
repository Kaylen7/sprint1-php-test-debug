<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Covers;

use Nivell1\Exercici1\NumberChecker;

#[CoversClass(NumberChecker::class)]
final class NumberCheckerProviderTest extends TestCase{
    
    public static function dataForIsEven(): iterable{
        yield [10, true];
        yield [3, false];
        yield [0, true];
    }

    public static function dataForIsPositive(): iterable{
        yield [10, true];
        yield [-6, false];
        yield [0, false];
    }

    #[Covers(NumberChecker::class . '::isEven')]
    #[DataProvider('dataForIsEven')]
    public function testIsEven(int $number, bool $expected): void{
        $checker = new NumberChecker($number);
        $result = $checker->isEven();
        $this->assertSame($expected, $result);
    }

    #[Covers(NumberChecker::class . '::isPositive')]
    #[DataProvider('dataForIsPositive')]
    public function testIsPositive(int $number, bool $expected): void{
        $checker = new NumberChecker($number);
        $result = $checker->isPositive();
        $this->assertSame($expected, $result);
    }

}