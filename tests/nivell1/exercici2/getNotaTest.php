<?php  declare(strict_types=1);

require_once './src/nivell1/exercici2/getNota.php';

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversNothing;
use function Nivell1\Exercici2\getNota;

#[CoversNothing]
final class getNotaTest extends TestCase {

    public function testInputValidValues(): void{
        $input = [102, -7];
        $expectedOutput = "Nota fora dels límits.";

        foreach($input as $key=>$value){
            $result = getNota($value);
            $this->assertSame($expectedOutput, $result);
        }
    }

    public function testPrimeraDivisio(): void{
        $input = [6, 63];
        $expectedOutput = "Primera Divisió";

        foreach($input as $key=>$value){
            $result = getNota($value);
            $this->assertSame($expectedOutput, $result, "Falla el valor: $value");
        }
    }
    public function testSegonaDivisio(): void{
        $input = [59, 45, 5.5];
        $expectedOutput = "Segona Divisió";

        foreach($input as $key=>$value){
            $result = getNota($value);
            $this->assertSame($expectedOutput, $result, "Falla el valor: $value");
        }
    }

    public function testTerceraDivisio(): void{
        $input = [33, 44, 3.76];
        $expectedOutput = "Tercera Divisió";

        foreach($input as $key=>$value){
            $result = getNota($value);
            $this->assertSame($expectedOutput, $result, "Falla el valor: $value");
        }
    }

    public function testReprovar(): void{
        $input = [0, 22, 3.1];
        $expectedOutput = "Cal reprovar.";

        foreach($input as $key=>$value){
            $result = getNota($value);
            $this->assertSame($expectedOutput, $result, "Falla el valor: $value");
        }
    }

}