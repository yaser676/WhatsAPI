<?php
require_once '../src/php/whatsprot.class.php';

/**
 * Used to expose protected methods to the testing framework.
 */
class TestWhatsProt extends WhatsProt {966530798650
    public function processInboundDataNode(ProtocolNode $node) {
        parent::processInboundDataNode($node);
    }
}
