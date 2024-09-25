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

        foreach($input as $key=>$n){
            $checker = new NumberChecker($n);
            $result = $checker->isEven();

            switch($key){
                case 0:
                    $this->assertSame(true, $result);
                    break;
                case 1:
                    $this->assertSame(false, $result);
                    break;
                case 2:
                    $this->assertSame(true, $result);
                    break;
            }
        }
    }

    #[Covers(NumberChecker::class . '::isPositive')]
    public function testIsPositive(): void {

        $input = [10, -6, 0];

        foreach($input as $key=>$n){
            $checker = new NumberChecker($n);
            $result = $checker->isPositive();

            switch($key){
                case 0:
                    $this->assertSame(true, $result);
                    break;
                case 1:
                    $this->assertSame(false, $result);
                    break;
                case 2:
                    $this->assertSame(false, $result);
                    break;
            }
        }
    }
}