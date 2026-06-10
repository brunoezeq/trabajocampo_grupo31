# Resultados de ejecuciones repetidas

| iteración | test | argumentos | descripcion de la prueba | resultado esperado | resultado real |
|---:|---|---|---|---|---|
| 1 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1158 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.063, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.080]

Generating code coverage report in HTML format ... done [00:00.681]


Code Coverage Report:
  2026-06-10 16:45:37

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 1 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1162 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.679]


Code Coverage Report:
  2026-06-10 16:45:38

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 1 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1218 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.718]


Code Coverage Report:
  2026-06-10 16:45:40

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 1 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1239 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.046, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.743]


Code Coverage Report:
  2026-06-10 16:45:41

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 1 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1598 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.056, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.108]

Generating code coverage report in HTML format ... done [00:00.883]


Code Coverage Report:
  2026-06-10 16:45:42

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 1 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1284 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.054, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.770]


Code Coverage Report:
  2026-06-10 16:45:44

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 2 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1227 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.063, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.716]


Code Coverage Report:
  2026-06-10 16:45:45

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 2 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1208 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.063, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.726]


Code Coverage Report:
  2026-06-10 16:45:46

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 2 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1333 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.841]


Code Coverage Report:
  2026-06-10 16:45:48

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 2 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1208 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.046, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.739]


Code Coverage Report:
  2026-06-10 16:45:49

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 2 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1224 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.738]


Code Coverage Report:
  2026-06-10 16:45:50

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 2 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1239 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.046, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.782]


Code Coverage Report:
  2026-06-10 16:45:51

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 3 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1239 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.063, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.093]

Generating code coverage report in HTML format ... done [00:00.739]


Code Coverage Report:
  2026-06-10 16:45:52

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 3 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1226 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.065, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.733]


Code Coverage Report:
  2026-06-10 16:45:54

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 3 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1256 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.078, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.731]


Code Coverage Report:
  2026-06-10 16:45:55

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 3 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1272 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.052, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.113]

Generating code coverage report in HTML format ... done [00:00.754]


Code Coverage Report:
  2026-06-10 16:45:56

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 3 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1289 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.772]


Code Coverage Report:
  2026-06-10 16:45:57

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 3 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1239 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.047, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.737]


Code Coverage Report:
  2026-06-10 16:45:59

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 4 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1301 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.064, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.080]

Generating code coverage report in HTML format ... done [00:00.770]


Code Coverage Report:
  2026-06-10 16:46:00

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 4 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1255 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.769]


Code Coverage Report:
  2026-06-10 16:46:01

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 4 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1240 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.065, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.734]


Code Coverage Report:
  2026-06-10 16:46:03

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 4 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1240 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.046, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.756]


Code Coverage Report:
  2026-06-10 16:46:04

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 4 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1270 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.776]


Code Coverage Report:
  2026-06-10 16:46:05

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 4 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1271 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.046, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.789]


Code Coverage Report:
  2026-06-10 16:46:06

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 5 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1272 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.072, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.755]


Code Coverage Report:
  2026-06-10 16:46:08

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 5 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1272 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.775]


Code Coverage Report:
  2026-06-10 16:46:09

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 5 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1239 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.065, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.733]


Code Coverage Report:
  2026-06-10 16:46:10

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 5 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1271 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.046, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.769]


Code Coverage Report:
  2026-06-10 16:46:11

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 5 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1255 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.100]

Generating code coverage report in HTML format ... done [00:00.746]


Code Coverage Report:
  2026-06-10 16:46:13

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 5 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1240 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.056, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.743]


Code Coverage Report:
  2026-06-10 16:46:14

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 6 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1241 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.065, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.080]

Generating code coverage report in HTML format ... done [00:00.722]


Code Coverage Report:
  2026-06-10 16:46:15

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 6 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1243 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.744]


Code Coverage Report:
  2026-06-10 16:46:16

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 6 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1255 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.746]


Code Coverage Report:
  2026-06-10 16:46:18

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 6 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1227 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.046, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.725]


Code Coverage Report:
  2026-06-10 16:46:19

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 6 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1230 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.731]


Code Coverage Report:
  2026-06-10 16:46:20

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 6 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1287 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.792]


Code Coverage Report:
  2026-06-10 16:46:21

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 7 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1273 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.065, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.753]


Code Coverage Report:
  2026-06-10 16:46:23

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 7 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1258 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.065, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.754]


Code Coverage Report:
  2026-06-10 16:46:24

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 7 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1227 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.065, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.740]


Code Coverage Report:
  2026-06-10 16:46:25

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 7 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1253 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.048, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.763]


Code Coverage Report:
  2026-06-10 16:46:26

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 7 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1285 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.107]

Generating code coverage report in HTML format ... done [00:00.769]


Code Coverage Report:
  2026-06-10 16:46:28

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 7 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1238 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.047, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.761]


Code Coverage Report:
  2026-06-10 16:46:29

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 8 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1265 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.771]


Code Coverage Report:
  2026-06-10 16:46:30

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 8 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1292 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.786]


Code Coverage Report:
  2026-06-10 16:46:31

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 8 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1266 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.064, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.762]


Code Coverage Report:
  2026-06-10 16:46:33

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 8 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1266 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.046, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.096]

Generating code coverage report in HTML format ... done [00:00.768]


Code Coverage Report:
  2026-06-10 16:46:34

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 8 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1281 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.064, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.781]


Code Coverage Report:
  2026-06-10 16:46:35

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 8 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1296 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.048, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.780]


Code Coverage Report:
  2026-06-10 16:46:37

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 9 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1294 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.064, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.775]


Code Coverage Report:
  2026-06-10 16:46:38

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 9 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1295 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.781]


Code Coverage Report:
  2026-06-10 16:46:39

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 9 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1268 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.063, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.781]


Code Coverage Report:
  2026-06-10 16:46:40

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 9 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1271 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.092]

Generating code coverage report in HTML format ... done [00:00.773]


Code Coverage Report:
  2026-06-10 16:46:42

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 9 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1270 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.089]

Generating code coverage report in HTML format ... done [00:00.782]


Code Coverage Report:
  2026-06-10 16:46:43

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 9 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1269 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.058, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.768]


Code Coverage Report:
  2026-06-10 16:46:44

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 10 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1287 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.763]


Code Coverage Report:
  2026-06-10 16:46:46

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 10 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1257 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.756]


Code Coverage Report:
  2026-06-10 16:46:47

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 10 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1257 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.750]


Code Coverage Report:
  2026-06-10 16:46:48

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 10 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1241 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.045, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.095]

Generating code coverage report in HTML format ... done [00:00.757]


Code Coverage Report:
  2026-06-10 16:46:49

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 10 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1268 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.062, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.758]


Code Coverage Report:
  2026-06-10 16:46:51

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 10 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1286 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.048, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.793]


Code Coverage Report:
  2026-06-10 16:46:52

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 11 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1298 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.065, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.779]


Code Coverage Report:
  2026-06-10 16:46:53

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 11 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1329 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.803]


Code Coverage Report:
  2026-06-10 16:46:54

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 11 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1285 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.065, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.773]


Code Coverage Report:
  2026-06-10 16:46:56

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 11 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1272 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.048, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.793]


Code Coverage Report:
  2026-06-10 16:46:57

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 11 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1253 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.053, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.772]


Code Coverage Report:
  2026-06-10 16:46:58

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 11 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1286 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.048, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.788]


Code Coverage Report:
  2026-06-10 16:47:00

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 12 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1269 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.758]


Code Coverage Report:
  2026-06-10 16:47:01

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 12 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1284 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.779]


Code Coverage Report:
  2026-06-10 16:47:02

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 12 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1284 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.782]


Code Coverage Report:
  2026-06-10 16:47:03

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 12 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1273 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.046, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.793]


Code Coverage Report:
  2026-06-10 16:47:05

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 12 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1288 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.063, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.107]

Generating code coverage report in HTML format ... done [00:00.745]


Code Coverage Report:
  2026-06-10 16:47:06

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 12 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1258 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.752]


Code Coverage Report:
  2026-06-10 16:47:07

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 13 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1253 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.732]


Code Coverage Report:
  2026-06-10 16:47:08

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 13 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1274 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.757]


Code Coverage Report:
  2026-06-10 16:47:10

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 13 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1344 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.065, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.811]


Code Coverage Report:
  2026-06-10 16:47:11

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 13 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1330 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.820]


Code Coverage Report:
  2026-06-10 16:47:12

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 13 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1284 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.052, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.790]


Code Coverage Report:
  2026-06-10 16:47:14

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 13 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1270 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.048, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.786]


Code Coverage Report:
  2026-06-10 16:47:15

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 14 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1271 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.064, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.769]


Code Coverage Report:
  2026-06-10 16:47:16

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 14 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1286 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.772]


Code Coverage Report:
  2026-06-10 16:47:18

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 14 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1286 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.773]


Code Coverage Report:
  2026-06-10 16:47:19

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 14 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1272 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.048, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.776]


Code Coverage Report:
  2026-06-10 16:47:20

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 14 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1271 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.103]

Generating code coverage report in HTML format ... done [00:00.768]


Code Coverage Report:
  2026-06-10 16:47:21

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 14 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1240 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.740]


Code Coverage Report:
  2026-06-10 16:47:23

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 15 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1266 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.735]


Code Coverage Report:
  2026-06-10 16:47:24

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 15 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1283 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.073, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.744]


Code Coverage Report:
  2026-06-10 16:47:25

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 15 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1300 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.759]


Code Coverage Report:
  2026-06-10 16:47:26

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 15 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1264 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.047, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.774]


Code Coverage Report:
  2026-06-10 16:47:28

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 15 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1281 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.795]


Code Coverage Report:
  2026-06-10 16:47:29

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 15 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1264 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.784]


Code Coverage Report:
  2026-06-10 16:47:30

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 16 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1279 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.781]


Code Coverage Report:
  2026-06-10 16:47:32

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 16 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1312 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.071, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.784]


Code Coverage Report:
  2026-06-10 16:47:33

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 16 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1263 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.064, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.758]


Code Coverage Report:
  2026-06-10 16:47:34

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 16 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1267 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.764]


Code Coverage Report:
  2026-06-10 16:47:35

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 16 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1236 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.047, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.091]

Generating code coverage report in HTML format ... done [00:00.758]


Code Coverage Report:
  2026-06-10 16:47:37

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 16 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1267 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.780]


Code Coverage Report:
  2026-06-10 16:47:38

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 17 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1267 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.082, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.751]


Code Coverage Report:
  2026-06-10 16:47:39

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 17 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1253 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.094]

Generating code coverage report in HTML format ... done [00:00.745]


Code Coverage Report:
  2026-06-10 16:47:40

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 17 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1285 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.065, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.755]


Code Coverage Report:
  2026-06-10 16:47:42

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 17 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1271 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.744]


Code Coverage Report:
  2026-06-10 16:47:43

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 17 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1241 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.046, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.080]

Generating code coverage report in HTML format ... done [00:00.752]


Code Coverage Report:
  2026-06-10 16:47:44

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 17 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1299 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.090]

Generating code coverage report in HTML format ... done [00:00.769]


Code Coverage Report:
  2026-06-10 16:47:46

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 18 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1285 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.758]


Code Coverage Report:
  2026-06-10 16:47:47

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 18 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1300 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.090]

Generating code coverage report in HTML format ... done [00:00.789]


Code Coverage Report:
  2026-06-10 16:47:48

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 18 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1258 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.755]


Code Coverage Report:
  2026-06-10 16:47:49

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 18 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1256 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.046, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.776]


Code Coverage Report:
  2026-06-10 16:47:51

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 18 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1272 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.766]


Code Coverage Report:
  2026-06-10 16:47:52

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 18 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1303 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.804]


Code Coverage Report:
  2026-06-10 16:47:53

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 19 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1317 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.800]


Code Coverage Report:
  2026-06-10 16:47:55

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 19 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1286 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.777]


Code Coverage Report:
  2026-06-10 16:47:56

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 19 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1362 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.070, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.832]


Code Coverage Report:
  2026-06-10 16:47:57

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 19 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1332 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.798]


Code Coverage Report:
  2026-06-10 16:47:58

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 19 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1316 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.774]


Code Coverage Report:
  2026-06-10 16:48:00

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 19 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1287 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.783]


Code Coverage Report:
  2026-06-10 16:48:01

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 20 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1273 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.776]


Code Coverage Report:
  2026-06-10 16:48:02

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 20 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1285 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.072, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.757]


Code Coverage Report:
  2026-06-10 16:48:04

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 20 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1273 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.767]


Code Coverage Report:
  2026-06-10 16:48:05

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 20 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1240 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.757]


Code Coverage Report:
  2026-06-10 16:48:06

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 20 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1304 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.096]

Generating code coverage report in HTML format ... done [00:00.776]


Code Coverage Report:
  2026-06-10 16:48:07

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 20 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1301 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.787]


Code Coverage Report:
  2026-06-10 16:48:09

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 21 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1268 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.063, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.777]


Code Coverage Report:
  2026-06-10 16:48:10

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 21 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1315 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.081, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.105]

Generating code coverage report in HTML format ... done [00:00.763]


Code Coverage Report:
  2026-06-10 16:48:11

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 21 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1317 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.073, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.094]

Generating code coverage report in HTML format ... done [00:00.749]


Code Coverage Report:
  2026-06-10 16:48:13

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 21 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1301 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.768]


Code Coverage Report:
  2026-06-10 16:48:14

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 21 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1285 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.770]


Code Coverage Report:
  2026-06-10 16:48:15

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 21 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1331 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.797]


Code Coverage Report:
  2026-06-10 16:48:17

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 22 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1406 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.075, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.134]

Generating code coverage report in HTML format ... done [00:00.822]


Code Coverage Report:
  2026-06-10 16:48:18

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 22 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1282 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.772]


Code Coverage Report:
  2026-06-10 16:48:19

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 22 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1285 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.065, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.783]


Code Coverage Report:
  2026-06-10 16:48:21

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 22 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1271 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.048, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.782]


Code Coverage Report:
  2026-06-10 16:48:22

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 22 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1254 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.092]

Generating code coverage report in HTML format ... done [00:00.764]


Code Coverage Report:
  2026-06-10 16:48:23

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 22 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1255 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.103]

Generating code coverage report in HTML format ... done [00:00.747]


Code Coverage Report:
  2026-06-10 16:48:24

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 23 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1296 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.072, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.101]

Generating code coverage report in HTML format ... done [00:00.749]


Code Coverage Report:
  2026-06-10 16:48:26

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 23 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1280 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.740]


Code Coverage Report:
  2026-06-10 16:48:27

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 23 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1282 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.747]


Code Coverage Report:
  2026-06-10 16:48:28

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 23 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1265 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.094]

Generating code coverage report in HTML format ... done [00:00.757]


Code Coverage Report:
  2026-06-10 16:48:29

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 23 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1310 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.048, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.787]


Code Coverage Report:
  2026-06-10 16:48:31

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 23 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1291 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.048, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.777]


Code Coverage Report:
  2026-06-10 16:48:32

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 24 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1281 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.091]

Generating code coverage report in HTML format ... done [00:00.765]


Code Coverage Report:
  2026-06-10 16:48:33

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 24 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1266 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.070, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.750]


Code Coverage Report:
  2026-06-10 16:48:35

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 24 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1285 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.765]


Code Coverage Report:
  2026-06-10 16:48:36

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 24 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1237 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.047, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.753]


Code Coverage Report:
  2026-06-10 16:48:37

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 24 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1267 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.092]

Generating code coverage report in HTML format ... done [00:00.777]


Code Coverage Report:
  2026-06-10 16:48:38

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 24 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1302 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.813]


Code Coverage Report:
  2026-06-10 16:48:40

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 25 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1283 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.070, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.774]


Code Coverage Report:
  2026-06-10 16:48:41

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 25 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1300 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.070, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.787]


Code Coverage Report:
  2026-06-10 16:48:42

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 25 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1424 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.082, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.089]

Generating code coverage report in HTML format ... done [00:00.816]


Code Coverage Report:
  2026-06-10 16:48:44

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 25 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1532 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.092]

Generating code coverage report in HTML format ... done [00:00.924]


Code Coverage Report:
  2026-06-10 16:48:45

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 25 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1314 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.791]


Code Coverage Report:
  2026-06-10 16:48:47

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 25 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1301 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.800]


Code Coverage Report:
  2026-06-10 16:48:48

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 26 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1346 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.820]


Code Coverage Report:
  2026-06-10 16:48:49

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 26 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1316 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.072, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.798]


Code Coverage Report:
  2026-06-10 16:48:51

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 26 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1287 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.763]


Code Coverage Report:
  2026-06-10 16:48:52

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 26 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1332 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.047, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.820]


Code Coverage Report:
  2026-06-10 16:48:53

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 26 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1269 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.089]

Generating code coverage report in HTML format ... done [00:00.758]


Code Coverage Report:
  2026-06-10 16:48:54

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 26 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1286 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.092]

Generating code coverage report in HTML format ... done [00:00.760]


Code Coverage Report:
  2026-06-10 16:48:56

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 27 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1286 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.765]


Code Coverage Report:
  2026-06-10 16:48:57

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 27 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1302 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.065, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.764]


Code Coverage Report:
  2026-06-10 16:48:58

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 27 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1270 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.064, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.769]


Code Coverage Report:
  2026-06-10 16:49:00

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 27 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1301 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.055, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.093]

Generating code coverage report in HTML format ... done [00:00.795]


Code Coverage Report:
  2026-06-10 16:49:01

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 27 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1286 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.052, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.795]


Code Coverage Report:
  2026-06-10 16:49:02

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 27 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1300 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.052, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.791]


Code Coverage Report:
  2026-06-10 16:49:03

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 28 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1361 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.083, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.821]


Code Coverage Report:
  2026-06-10 16:49:05

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 28 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1320 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.070, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.786]


Code Coverage Report:
  2026-06-10 16:49:06

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 28 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1315 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.075, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.101]

Generating code coverage report in HTML format ... done [00:00.779]


Code Coverage Report:
  2026-06-10 16:49:07

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 28 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1258 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.052, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.089]

Generating code coverage report in HTML format ... done [00:00.745]


Code Coverage Report:
  2026-06-10 16:49:09

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 28 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1286 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.053, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.089]

Generating code coverage report in HTML format ... done [00:00.762]


Code Coverage Report:
  2026-06-10 16:49:10

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 28 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1271 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.047, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.759]


Code Coverage Report:
  2026-06-10 16:49:11

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 29 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1315 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.063, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.796]


Code Coverage Report:
  2026-06-10 16:49:13

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 29 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1272 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.769]


Code Coverage Report:
  2026-06-10 16:49:14

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 29 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1269 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.758]


Code Coverage Report:
  2026-06-10 16:49:15

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 29 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1302 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.047, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.094]

Generating code coverage report in HTML format ... done [00:00.806]


Code Coverage Report:
  2026-06-10 16:49:16

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 29 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1317 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.052, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.090]

Generating code coverage report in HTML format ... done [00:00.795]


Code Coverage Report:
  2026-06-10 16:49:18

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 29 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1285 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.779]


Code Coverage Report:
  2026-06-10 16:49:19

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 30 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1286 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.065, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.782]


Code Coverage Report:
  2026-06-10 16:49:20

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 30 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1303 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.063, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.787]


Code Coverage Report:
  2026-06-10 16:49:22

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 30 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1358 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.113]

Generating code coverage report in HTML format ... done [00:00.790]


Code Coverage Report:
  2026-06-10 16:49:23

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 30 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1313 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.048, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.769]


Code Coverage Report:
  2026-06-10 16:49:24

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 30 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1297 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.055, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.091]

Generating code coverage report in HTML format ... done [00:00.772]


Code Coverage Report:
  2026-06-10 16:49:26

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 30 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1327 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.047, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.804]


Code Coverage Report:
  2026-06-10 16:49:27

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 31 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1325 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.092]

Generating code coverage report in HTML format ... done [00:00.791]


Code Coverage Report:
  2026-06-10 16:49:28

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 31 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1337 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.089]

Generating code coverage report in HTML format ... done [00:00.779]


Code Coverage Report:
  2026-06-10 16:49:30

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 31 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1387 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.860]


Code Coverage Report:
  2026-06-10 16:49:31

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 31 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1321 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.052, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.090]

Generating code coverage report in HTML format ... done [00:00.789]


Code Coverage Report:
  2026-06-10 16:49:32

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 31 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1385 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.055, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.114]

Generating code coverage report in HTML format ... done [00:00.818]


Code Coverage Report:
  2026-06-10 16:49:34

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 31 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1376 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.055, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.092]

Generating code coverage report in HTML format ... done [00:00.833]


Code Coverage Report:
  2026-06-10 16:49:35

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 32 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1321 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.073, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.775]


Code Coverage Report:
  2026-06-10 16:49:36

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 32 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1362 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.818]


Code Coverage Report:
  2026-06-10 16:49:38

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 32 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1333 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.810]


Code Coverage Report:
  2026-06-10 16:49:39

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 32 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1303 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.048, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.817]


Code Coverage Report:
  2026-06-10 16:49:40

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 32 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1257 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.057, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.768]


Code Coverage Report:
  2026-06-10 16:49:42

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 32 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1339 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.832]


Code Coverage Report:
  2026-06-10 16:49:43

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 33 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1319 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.784]


Code Coverage Report:
  2026-06-10 16:49:44

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 33 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1335 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.078, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.100]

Generating code coverage report in HTML format ... done [00:00.775]


Code Coverage Report:
  2026-06-10 16:49:46

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 33 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1370 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.071, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.801]


Code Coverage Report:
  2026-06-10 16:49:47

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 33 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1417 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.057, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.090]

Generating code coverage report in HTML format ... done [00:00.872]


Code Coverage Report:
  2026-06-10 16:49:48

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 33 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1325 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.053, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.780]


Code Coverage Report:
  2026-06-10 16:49:50

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 33 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1345 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.817]


Code Coverage Report:
  2026-06-10 16:49:51

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 34 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1303 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.072, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.103]

Generating code coverage report in HTML format ... done [00:00.772]


Code Coverage Report:
  2026-06-10 16:49:52

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 34 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1315 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.071, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.783]


Code Coverage Report:
  2026-06-10 16:49:54

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 34 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1316 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.065, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.090]

Generating code coverage report in HTML format ... done [00:00.786]


Code Coverage Report:
  2026-06-10 16:49:55

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 34 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1302 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.105]

Generating code coverage report in HTML format ... done [00:00.768]


Code Coverage Report:
  2026-06-10 16:49:56

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 34 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1299 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.060, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.089]

Generating code coverage report in HTML format ... done [00:00.769]


Code Coverage Report:
  2026-06-10 16:49:58

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 34 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1256 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.754]


Code Coverage Report:
  2026-06-10 16:49:59

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 35 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1344 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.803]


Code Coverage Report:
  2026-06-10 16:50:00

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 35 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1345 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.073, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.798]


Code Coverage Report:
  2026-06-10 16:50:02

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 35 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1302 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.092]

Generating code coverage report in HTML format ... done [00:00.776]


Code Coverage Report:
  2026-06-10 16:50:03

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 35 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1284 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.777]


Code Coverage Report:
  2026-06-10 16:50:04

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 35 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1285 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.090]

Generating code coverage report in HTML format ... done [00:00.788]


Code Coverage Report:
  2026-06-10 16:50:05

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 35 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1301 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.052, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.106]

Generating code coverage report in HTML format ... done [00:00.786]


Code Coverage Report:
  2026-06-10 16:50:07

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 36 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1287 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.775]


Code Coverage Report:
  2026-06-10 16:50:08

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 36 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1302 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.074, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.790]


Code Coverage Report:
  2026-06-10 16:50:09

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 36 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1301 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.070, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.095]

Generating code coverage report in HTML format ... done [00:00.786]


Code Coverage Report:
  2026-06-10 16:50:11

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 36 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1272 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.090]

Generating code coverage report in HTML format ... done [00:00.746]


Code Coverage Report:
  2026-06-10 16:50:12

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 36 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1271 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.763]


Code Coverage Report:
  2026-06-10 16:50:13

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 36 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1255 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.048, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.753]


Code Coverage Report:
  2026-06-10 16:50:14

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 37 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1300 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.765]


Code Coverage Report:
  2026-06-10 16:50:16

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 37 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1300 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.778]


Code Coverage Report:
  2026-06-10 16:50:17

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 37 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1283 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.780]


Code Coverage Report:
  2026-06-10 16:50:18

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 37 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1270 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.089]

Generating code coverage report in HTML format ... done [00:00.771]


Code Coverage Report:
  2026-06-10 16:50:20

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 37 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1257 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.766]


Code Coverage Report:
  2026-06-10 16:50:21

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 37 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1252 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.047, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.101]

Generating code coverage report in HTML format ... done [00:00.771]


Code Coverage Report:
  2026-06-10 16:50:22

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 38 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1293 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.065, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.785]


Code Coverage Report:
  2026-06-10 16:50:23

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 38 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1324 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.094]

Generating code coverage report in HTML format ... done [00:00.802]


Code Coverage Report:
  2026-06-10 16:50:25

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 38 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1298 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.093]

Generating code coverage report in HTML format ... done [00:00.781]


Code Coverage Report:
  2026-06-10 16:50:26

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 38 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1379 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.062, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.141]

Generating code coverage report in HTML format ... done [00:00.813]


Code Coverage Report:
  2026-06-10 16:50:27

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 38 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1398 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.055, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.089]

Generating code coverage report in HTML format ... done [00:00.835]


Code Coverage Report:
  2026-06-10 16:50:29

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 38 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1339 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.090]

Generating code coverage report in HTML format ... done [00:00.813]


Code Coverage Report:
  2026-06-10 16:50:30

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 39 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1366 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.091]

Generating code coverage report in HTML format ... done [00:00.797]


Code Coverage Report:
  2026-06-10 16:50:32

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 39 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1335 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.075, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.093]

Generating code coverage report in HTML format ... done [00:00.788]


Code Coverage Report:
  2026-06-10 16:50:33

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 39 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1321 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.071, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.781]


Code Coverage Report:
  2026-06-10 16:50:34

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 39 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1350 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.059, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.820]


Code Coverage Report:
  2026-06-10 16:50:36

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 39 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1338 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.053, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.097]

Generating code coverage report in HTML format ... done [00:00.806]


Code Coverage Report:
  2026-06-10 16:50:37

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 39 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1380 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.059, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.095]

Generating code coverage report in HTML format ... done [00:00.825]


Code Coverage Report:
  2026-06-10 16:50:38

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 40 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1385 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.094]

Generating code coverage report in HTML format ... done [00:00.807]


Code Coverage Report:
  2026-06-10 16:50:40

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 40 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1411 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.073, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.092]

Generating code coverage report in HTML format ... done [00:00.823]


Code Coverage Report:
  2026-06-10 16:50:41

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 40 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1411 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.073, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.848]


Code Coverage Report:
  2026-06-10 16:50:42

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 40 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1385 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.054, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.098]

Generating code coverage report in HTML format ... done [00:00.828]


Code Coverage Report:
  2026-06-10 16:50:44

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 40 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1304 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.054, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.799]


Code Coverage Report:
  2026-06-10 16:50:45

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 40 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1325 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.097]

Generating code coverage report in HTML format ... done [00:00.822]


Code Coverage Report:
  2026-06-10 16:50:47

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 41 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1368 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.074, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.094]

Generating code coverage report in HTML format ... done [00:00.780]


Code Coverage Report:
  2026-06-10 16:50:48

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 41 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1351 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.076, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.092]

Generating code coverage report in HTML format ... done [00:00.801]


Code Coverage Report:
  2026-06-10 16:50:49

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 41 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1368 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.070, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.090]

Generating code coverage report in HTML format ... done [00:00.813]


Code Coverage Report:
  2026-06-10 16:50:51

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 41 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1306 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.048, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.798]


Code Coverage Report:
  2026-06-10 16:50:52

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 41 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1339 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.052, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.092]

Generating code coverage report in HTML format ... done [00:00.805]


Code Coverage Report:
  2026-06-10 16:50:53

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 41 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1349 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.095]

Generating code coverage report in HTML format ... done [00:00.824]


Code Coverage Report:
  2026-06-10 16:50:55

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 42 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1354 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.094]

Generating code coverage report in HTML format ... done [00:00.798]


Code Coverage Report:
  2026-06-10 16:50:56

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 42 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1343 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.071, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.107]

Generating code coverage report in HTML format ... done [00:00.801]


Code Coverage Report:
  2026-06-10 16:50:57

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 42 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1317 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.070, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.090]

Generating code coverage report in HTML format ... done [00:00.766]


Code Coverage Report:
  2026-06-10 16:50:59

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 42 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1315 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.091]

Generating code coverage report in HTML format ... done [00:00.769]


Code Coverage Report:
  2026-06-10 16:51:00

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 42 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1318 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.048, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.792]


Code Coverage Report:
  2026-06-10 16:51:01

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 42 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1328 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.091]

Generating code coverage report in HTML format ... done [00:00.817]


Code Coverage Report:
  2026-06-10 16:51:03

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 43 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1370 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.844]


Code Coverage Report:
  2026-06-10 16:51:04

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 43 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1289 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.773]


Code Coverage Report:
  2026-06-10 16:51:05

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 43 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1305 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.792]


Code Coverage Report:
  2026-06-10 16:51:07

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 43 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1350 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.830]


Code Coverage Report:
  2026-06-10 16:51:08

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 43 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1318 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.048, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.114]

Generating code coverage report in HTML format ... done [00:00.785]


Code Coverage Report:
  2026-06-10 16:51:09

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 43 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1373 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.093]

Generating code coverage report in HTML format ... done [00:00.827]


Code Coverage Report:
  2026-06-10 16:51:11

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 44 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1325 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.793]


Code Coverage Report:
  2026-06-10 16:51:12

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 44 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1388 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.829]


Code Coverage Report:
  2026-06-10 16:51:13

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 44 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1314 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.070, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.800]


Code Coverage Report:
  2026-06-10 16:51:15

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 44 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1284 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.795]


Code Coverage Report:
  2026-06-10 16:51:16

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 44 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1373 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.089]

Generating code coverage report in HTML format ... done [00:00.868]


Code Coverage Report:
  2026-06-10 16:51:17

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 44 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1374 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.052, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.090]

Generating code coverage report in HTML format ... done [00:00.846]


Code Coverage Report:
  2026-06-10 16:51:19

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 45 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1313 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.094]

Generating code coverage report in HTML format ... done [00:00.804]


Code Coverage Report:
  2026-06-10 16:51:20

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 45 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1312 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.083, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.090]

Generating code coverage report in HTML format ... done [00:00.775]


Code Coverage Report:
  2026-06-10 16:51:21

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 45 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1338 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.093]

Generating code coverage report in HTML format ... done [00:00.762]


Code Coverage Report:
  2026-06-10 16:51:23

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 45 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1479 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.057, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.096]

Generating code coverage report in HTML format ... done [00:00.875]


Code Coverage Report:
  2026-06-10 16:51:24

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 45 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1321 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.054, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.802]


Code Coverage Report:
  2026-06-10 16:51:25

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 45 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1330 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.089]

Generating code coverage report in HTML format ... done [00:00.830]


Code Coverage Report:
  2026-06-10 16:51:27

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 46 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1374 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.073, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.090]

Generating code coverage report in HTML format ... done [00:00.821]


Code Coverage Report:
  2026-06-10 16:51:28

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 46 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1345 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.073, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.825]


Code Coverage Report:
  2026-06-10 16:51:29

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 46 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1346 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.070, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.096]

Generating code coverage report in HTML format ... done [00:00.817]


Code Coverage Report:
  2026-06-10 16:51:31

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 46 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1393 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.071, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.099]

Generating code coverage report in HTML format ... done [00:00.843]


Code Coverage Report:
  2026-06-10 16:51:32

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 46 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1361 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.092]

Generating code coverage report in HTML format ... done [00:00.803]


Code Coverage Report:
  2026-06-10 16:51:34

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 46 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1347 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.047, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.090]

Generating code coverage report in HTML format ... done [00:00.812]


Code Coverage Report:
  2026-06-10 16:51:35

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 47 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1361 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.070, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.858]


Code Coverage Report:
  2026-06-10 16:51:36

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 47 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1344 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.078, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.826]


Code Coverage Report:
  2026-06-10 16:51:38

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 47 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1394 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.087, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.093]

Generating code coverage report in HTML format ... done [00:00.845]


Code Coverage Report:
  2026-06-10 16:51:39

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 47 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1286 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.092]

Generating code coverage report in HTML format ... done [00:00.791]


Code Coverage Report:
  2026-06-10 16:51:40

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 47 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1257 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.054, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.097]

Generating code coverage report in HTML format ... done [00:00.749]


Code Coverage Report:
  2026-06-10 16:51:42

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 47 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1254 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.057, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.098]

Generating code coverage report in HTML format ... done [00:00.745]


Code Coverage Report:
  2026-06-10 16:51:43

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 48 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1319 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.070, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.790]


Code Coverage Report:
  2026-06-10 16:51:44

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 48 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1483 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.070, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.090]

Generating code coverage report in HTML format ... done [00:00.908]


Code Coverage Report:
  2026-06-10 16:51:46

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 48 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1435 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.092]

Generating code coverage report in HTML format ... done [00:00.870]


Code Coverage Report:
  2026-06-10 16:51:47

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 48 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1289 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.045, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.089]

Generating code coverage report in HTML format ... done [00:00.792]


Code Coverage Report:
  2026-06-10 16:51:48

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 48 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1268 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.054, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.775]


Code Coverage Report:
  2026-06-10 16:51:50

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 48 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1270 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.056, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.775]


Code Coverage Report:
  2026-06-10 16:51:51

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 49 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1301 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.783]


Code Coverage Report:
  2026-06-10 16:51:52

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 49 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1319 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.070, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.109]

Generating code coverage report in HTML format ... done [00:00.783]


Code Coverage Report:
  2026-06-10 16:51:54

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 49 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1347 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.082, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.781]


Code Coverage Report:
  2026-06-10 16:51:55

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 49 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1283 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.046, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.762]


Code Coverage Report:
  2026-06-10 16:51:56

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 49 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1302 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.052, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.781]


Code Coverage Report:
  2026-06-10 16:51:57

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 49 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1301 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.769]


Code Coverage Report:
  2026-06-10 16:51:59

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 50 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

<details>
<summary>Detalle de salida (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1316 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.094]

Generating code coverage report in HTML format ... done [00:00.810]


Code Coverage Report:
  2026-06-10 16:52:00

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

</details>

| 50 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1311 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 4 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.780]


Code Coverage Report:
  2026-06-10 16:52:01

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 50 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1312 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.092]

Generating code coverage report in HTML format ... done [00:00.778]


Code Coverage Report:
  2026-06-10 16:52:03

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 50 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1315 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.804]


Code Coverage Report:
  2026-06-10 16:52:04

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

| 50 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1263 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.095]

Generating code coverage report in HTML format ... done [00:00.771]


Code Coverage Report:
  2026-06-10 16:52:05

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.93% (1/108)
  Lines:    0.28% (2/717)

App\Services\ValidationException
  Methods:  50.00% ( 1/ 2)   Lines:  66.67% (  2/  3)
```

</details>

| 50 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

<details>
<summary>Detalle de salida (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1341 ms</summary>

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.054, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.092]

Generating code coverage report in HTML format ... done [00:00.810]


Code Coverage Report:
  2026-06-10 16:52:07

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

</details>

