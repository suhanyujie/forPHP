<?php

use \NoahBuscher\Macaw\Macaw;

Macaw::get('fuck', function() {
    echo 'I <3 GET commands!';
});

Macaw::error(function() {
    echo '404 :: Not Found';
});

Macaw::dispatch();

