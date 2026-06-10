#!/usr/bin/env bash
# Wrapper para ejecutar el script PHP que repite pruebas.
# Uso: ./run_tests_repeat.sh 50

ITER=${1:-10}
php "$(dirname "$0")/run_tests_repeat.php" "$ITER"