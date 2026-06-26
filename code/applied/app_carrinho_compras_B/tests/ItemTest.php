<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use src\Item;

class ItemTest extends TestCase
{
    public function testEstadoInicial()
    {
        $item = new Item();

        $this->assertEquals(
            '',
            $item->getDescricao()
        );

        $this->assertEquals(
            0,
            $item->getValor()
        );
    }

    public function testGetSetDescricao()
    {
        $descricao = 'Cadeira de plástico';

        $item = new Item();

        $item->setDescricao($descricao);

        $this->assertEquals(
            $descricao,
            $item->getDescricao()
        );
    }

    /**
     * @dataProvider dataValores
     */
    public function testGetSetValor($valor)
    {
        $item = new Item();

        $item->setValor($valor);

        $this->assertEquals(
            $valor,
            $item->getValor()
        );
    }

    public function dataValores()
    {
        return [
            [100],
            [-20],
            [0]
        ];
    }

    public function testItemValido()
    {
        $descricao = 'Cadeira de plástico';

        $item = new Item();

        $item->setValor(55);
        $item->setDescricao($descricao);

        $this->assertTrue(
            $item->itemValido()
        );

        $item->setDescricao('');

        $this->assertFalse(
            $item->itemValido()
        );

        $item->setDescricao($descricao);
        $item->setValor(0);

        $this->assertFalse(
            $item->itemValido()
        );

        $item->setDescricao('');
        $item->setValor(0);

        $this->assertFalse(
            $item->itemValido()
        );
    }
}