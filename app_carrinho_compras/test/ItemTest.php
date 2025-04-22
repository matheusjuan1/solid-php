<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use src\Item;

class ItemTest extends TestCase
{

    // methods
    public function testInitalState()
    {
        $item = new Item();

        $this->assertEquals('', $item->getDescription());
        $this->assertEquals(0, $item->getValue());
    }

    public function testGetAndSetDescription()
    {
        $description = 'Smartphone';

        $item = new Item();
        $item->setDescription($description);

        $this->assertEquals($description, $item->getDescription());
    }

    #[DataProvider('dataValues')]
    public function testGetAndSetValue($value)
    {
        $item = new Item();
        $item->setValue($value);

        $this->assertEquals($value, $item->getValue());
    }

    public function testValidItem()
    {
        $item = new Item();

        // valid item
        $item->setDescription('Smartphone');
        $item->setValue(100);

        $this->assertEquals(true, $item->validItem());

        // invalid description
        $item->setDescription('');
        $item->setValue(100);

        $this->assertEquals(false, $item->validItem());

        // invalid value
        $item->setDescription('Smartphone');
        $item->setValue(0);

        $this->assertEquals(false, $item->validItem());

        // invalid description and value
        $item->setDescription('Smartphone');
        $item->setValue(0);

        $this->assertEquals(false, $item->validItem());
    }

    public static function dataValues()
    {
        return [
            [100],
            [-2],
            [0]
        ];
    }
}
