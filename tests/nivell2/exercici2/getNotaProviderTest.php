<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\CoversNothing;

require_once './src/nivell1/exercici2/getNota.php';

use function Nivell1\Exercici2\getNota;

#[CoversNothing]
final class getNotaProviderTest extends TestCase{

    public static function dataForTests(): array{
        
        return [
            [102, "Nota fora dels límits."],
            [-7, "Nota fora dels límits."],
            [6, "Primera Divisió"],
            [63, "Primera Divisió"],
            [59, "Segona Divisió"],
            [45, "Segona Divisió"],
            [5.5, "Segona Divisió"],
            [33, "Tercera Divisió"],
            [44, "Tercera Divisió"],
            [3.76, "Tercera Divisió"],
            [0, "Cal reprovar."],
            [22, "Cal reprovar."],
            [3.1, "Cal reprovar."],
        ];
    }

    
    #[DataProvider('dataForTests')]
    public function testInputValidation(float $nota, string $expected): void{
        $result = getNota($nota);
        $this->assertSame($expected, $result);
    }
}