<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('tl-PH', array (
));

$catalogueTl = new MessageCatalogue('tl', array (
));
$catalogue->addFallbackCatalogue($catalogueTl);

return $catalogue;
