<?php

namespace Iqbal\DataSet;

use PHPUnit\Framework\TestCase;

class DataSetTest extends TestCase
{
     public function testAdd()
     {
          $set = new Set();
          $this->assertTrue($set->add("Iqbal"));
          $this->assertFalse($set->add("Iqbal"));
          $this->assertTrue($set->add("Menggala"));
          $this->assertFalse($set->add("Menggala"));
     }

     public function testContains()
     {
          $set = new Set();
          $set->add("Iqbal");
          $set->add("Menggala");

          $this->assertTrue($set->contains("Iqbal"));
          $this->assertTrue($set->contains("Menggala"));
          $this->assertFalse($set->contains("Maulana"));
     }

     public function testSize()
     {
          $set = new Set();

          $this->assertEquals(0, $set->size());
          $set->add("Iqbal");
          $this->assertEquals(1, $set->size());
          $set->add("Iqbal");
          $this->assertEquals(1, $set->size());
          $set->add("Menggala");
          $this->assertEquals(2, $set->size());
     }

     public function testRemove()
     {
          $set = new Set();
          $set->add("iqbal");
          $set->add("maulana");
          $set->add("menggala");
          $set->add("budi");
          $set->add("eko");

          $this->assertEquals(5, $set->size());

          $set->remove("menggala");
          $this->assertEquals(4, $set->size());

          $this->assertTrue($set->contains("iqbal"));
          $this->assertTrue($set->contains("maulana"));
          $this->assertTrue($set->contains("budi"));
          $this->assertTrue($set->contains("eko"));
          $this->assertFalse($set->contains("menggala"));
     }
}
