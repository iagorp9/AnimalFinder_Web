<?php

$senha = 'anderson1234';

$hash = password_hash($senha, PASSWORD_DEFAULT);

echo "O hash gerado é $hash";
