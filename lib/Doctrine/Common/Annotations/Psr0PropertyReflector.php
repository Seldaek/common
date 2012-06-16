<?php

namespace Doctrine\Common\Annotations;

class Psr0PropertyReflector extends ReflectionClass {
  function __construct($psr0Parser, $propertyName) {
    $this->psr0Parser = $psr0Parser;
    $this->propertyName = $propertyName;
  }

  function getName() {
    return $this->propertyName;
  }

  function getDeclaringClass() {
    return $this->psr0Parser->getDeclaringPropertyClass($this->propertyName);
  }

  function getDocComment() {
    return $this->psr0Parser->getPropertyDoxygen($this->propertyName);
  }
}
