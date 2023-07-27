<?php

namespace Iqbal\DataSet;

class Set
{
     private int $size = 0;
     private array $array = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'];

     public function add(string $value): bool
     {
          if ($this->contains($value)) {
               return false;
          } else {
               $this->array[$this->size] = $value;
               $this->size++;
               return true;
          }
     }

     public function contains(string $value): bool
     {
          foreach ($this->array as $item) {
               if ($value == $item) {
                    return true;
               }
          }
          return false;
     }

     public function size(): int
     {
          return $this->size;
     }

     private function indexOf(string $value): int
     {
          for ($i = 0; $i < count($this->array); $i++) {
               if ($value == $this->array[$i]) {
                    return $i;
               }
          }
          return -1;
     }

     public function remove(string $value): bool
     {
          $indexRemoved = $this->indexOf($value);

          if ($this->contains($value)) {
               for ($i = $indexRemoved; $i < $this->size; $i++) {
                    $this->array[$i] = $this->array[$i + 1];
               }
               $this->size--;
               return true;
          } else {
               return false;
          }
     }
}
