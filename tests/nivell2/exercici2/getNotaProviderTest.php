<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\CoversNothing;

require_once './src/nivell1/exercici2/getNota.php';

use function Nivell1\Exercici2\getNota;

#[CoversNothing]
final class getNotaProviderTest extends TestCase{

    public static function dataForInputValidation(): array{
        $str = "Nota fora dels límits.";
        
        return [
            [102, $str],
            [-7, $str],
        ];
    }
    public static function dataForPrimera(): array{
        $str = "Primera Divisió";
        return [
            [6, $str],
            [63, $str],
        ];
    }

    public static function dataForSegona(): array{
        $str = "Segona Divisió";
        return [
            [59, $str],
            [45, $str],
            [5.5, $str],
        ];
    }

    public static function dataForTercera(): array{
        $str = "Tercera Divisió";
        return [
            [33, $str],
            [44, $str],
            [3.76, $str],
        ];
    }

    public static function dataForRecuperar(): array{
        $str = "Cal reprovar.";
        return [
            [0, $str],
            [22, $str],
            [3.1, $str],
        ];
    }

    
    #[DataProvider('dataForInputValidation')]
    public function testInputValidation(float $nota, string $expected): void{
        $result = getNota($nota);
        $this->assertSame($expected, $result);
    }

    #[DataProvider('dataForPrimera')]
    public function testPrimera(float $nota, string $expected): void{
        $result = getNota($nota);
        $this->assertSame($expected, $result);
    }

    #[DataProvider('dataForSegona')]
    public function testSegona(float $nota, string $expected): void{
        $result = getNota($nota);
        $this->assertSame($expected, $result);
    }

    #[DataProvider('dataForTercera')]
    public function testTercera(float $nota, string $expected): void{
        $result = getNota($nota);
        $this->assertSame($expected, $result);
    }

    #[DataProvider('dataForRecuperar')]
    public function testReprovar(float $nota, string $expected): void{
        $result = getNota($nota);
        $this->assertSame($expected, $result);
    }
}