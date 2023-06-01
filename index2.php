<?php
function checkTypeBehavior($declaredType, $argumentType, $strictMode)
{
    $strictModeEnabled = $strictMode ? 'OK' : 'Chyba';
    $coerciveModeEnabled = !$strictMode ? 'Přetypování' : 'N/A';

    // Pokud je deklarovaný typ int nebo float
    if ($declaredType === 'int' || $declaredType === 'float') {
        if ($argumentType === 'int' || $argumentType === 'float') {
            return $strictModeEnabled;
        } else {
            return $coerciveModeEnabled;
        }
    }

    // Pokud je deklarovaný typ bool
    if ($declaredType === 'bool') {
        if ($argumentType === 'bool') {
            return $strictModeEnabled;
        } else {
            return $coerciveModeEnabled;
        }
    }

    // Pokud je deklarovaný typ int|bool nebo bool|int
    if ($declaredType === 'int|bool' || $declaredType === 'bool|int') {
        if ($argumentType === 'int' || $argumentType === 'bool') {
            return $strictModeEnabled;
        } else {
            return $coerciveModeEnabled;
        }
    }

    // Pokud je deklarovaný typ string
    if ($declaredType === 'string') {
        if ($argumentType === 'string') {
            return $strictModeEnabled;
        } else {
            return $coerciveModeEnabled;
        }
    }

    // Pokud je deklarovaný typ array
    if ($declaredType === 'array') {
        if ($argumentType === 'array') {
            return $strictModeEnabled;
        } else {
            return $coerciveModeEnabled;
        }
    }

    // Pokud je deklarovaný typ mixed nebo object
    if ($declaredType === 'mixed' || $declaredType === 'object') {
        return $strictModeEnabled;
    }

    return 'N/A'; // N/A - Kombinace typů není podporována
}

// Deklarace vstupních typů
$declaredTypes = [
    'int', 'float', 'bool', 'int|bool', 'bool|int', 'string', 'array', 'mixed', 'object'
];

// Vstupní argumenty
$argumentTypes = [
    'int', 'float', 'bool', 'string', 'array', 'object'
];

$strictModeEnabled = true;

// Generování tabulky
echo "| Deklarovaný typ  | Předaný argument | Striktní režim | Ne-striktní režim |\n";
echo "|------------------|------------------|---------------|------------------|\n";

foreach ($declaredTypes as $declaredType) {
    foreach ($argumentTypes as $argumentType) {
        $behavior = checkTypeBehavior($declaredType, $argumentType, $strictModeEnabled);
        echo "| $declaredType\t\t | $argumentType\t\t | $behavior\t\t\t | ";
        echo $strictModeEnabled ? "N/A\t\t\t   |\n" : "$behavior\t\t |\n";
    }
}

?>
