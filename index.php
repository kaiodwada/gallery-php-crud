<?php
require_once 'vendor/autoload.php';
require_once 'app/core/Core.php';
require_once 'app/controller/CadastroController.php';

require_once 'app/model/Gallery.php';
require_once 'lib/Server/Connection.php';

$core = new Core;
echo $core->start($_GET);