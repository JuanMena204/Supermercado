<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class InventoryRulesTest extends TestCase
{
    private string $root;

    protected function setUp(): void
    {
        $this->root = dirname(__DIR__);
    }

    public function testElModuloDeMovimientosUsaTransacciones(): void
    {
        $source = file_get_contents($this->root . '/public/movimientos.php');

        $this->assertNotFalse($source, 'No fue posible leer el módulo de movimientos.');
        $this->assertStringContainsString('beginTransaction()', $source, 'Debe iniciarse una transacción.');
        $this->assertStringContainsString('commit()', $source, 'Debe confirmarse la transacción.');
        $this->assertStringContainsString('rollBack()', $source, 'Debe revertirse la transacción cuando ocurra un error.');
    }

    public function testElModuloDeMovimientosRechazaCantidadesNoPositivas(): void
    {
        $source = file_get_contents($this->root . '/public/movimientos.php');

        $this->assertNotFalse($source, 'No fue posible leer el módulo de movimientos.');
        $this->assertStringContainsString('$cantidad<=0', $source, 'Debe existir una validación para cantidades menores o iguales a cero.');
        $this->assertStringContainsString(
            'La cantidad debe ser mayor que cero.',
            $source,
            'Debe mostrarse un mensaje indicando que la cantidad debe ser mayor que cero.'
        );
    }

    public function testElModuloDeMovimientosImpideStockNegativo(): void
    {
        $source = file_get_contents($this->root . '/public/movimientos.php');

        $this->assertNotFalse($source, 'No fue posible leer el módulo de movimientos.');
        $this->assertStringContainsString('$nueva<0', $source, 'Debe comprobarse que el nuevo stock no sea negativo.');
        $this->assertStringContainsString(
            'No hay existencias suficientes',
            $source,
            'Debe informarse cuando no existen suficientes unidades disponibles.'
        );
    }

    public function testLaReglaDeBajoStockEstaImplementada(): void
    {
        $source = file_get_contents($this->root . '/public/productos.php');

        $this->assertNotFalse($source, 'No fue posible leer el módulo de productos.');
        $this->assertStringContainsString(
            '$r[\'cantidad\']<=$r[\'stock_minimo\']',
            $source,
            'Debe compararse la cantidad disponible con el stock mínimo.'
        );
        $this->assertStringContainsString(
            'Bajo stock',
            $source,
            'Debe mostrarse la alerta "Bajo stock".'
        );
    }
}
