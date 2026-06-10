# Resultados de ejecuciones repetidas

| iteración | test | argumentos | descripcion de la prueba | resultado esperado | resultado real |
|---:|---|---|---|---|---|
| 1 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1180 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.071, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.680]


Code Coverage Report:
  2026-06-10 17:43:42

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 1 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1189 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.693]


Code Coverage Report:
  2026-06-10 17:43:43

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 1 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1253 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.096, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.730]


Code Coverage Report:
  2026-06-10 17:43:44

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 1 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1438 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.057, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.096]

Generating code coverage report in HTML format ... done [00:00.903]


Code Coverage Report:
  2026-06-10 17:43:46

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 1 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1449 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.095]

Generating code coverage report in HTML format ... done [00:00.985]


Code Coverage Report:
  2026-06-10 17:43:47

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 1 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1497 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00.002]

Generating code coverage report in Clover XML format ... done [00:00.110]

Generating code coverage report in HTML format ... done [00:00.913]


Code Coverage Report:
  2026-06-10 17:43:49

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 2 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1542 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.087, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.778]


Code Coverage Report:
  2026-06-10 17:43:50

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 2 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1269 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.754]


Code Coverage Report:
  2026-06-10 17:43:52

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 2 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1230 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.089]

Generating code coverage report in HTML format ... done [00:00.680]


Code Coverage Report:
  2026-06-10 17:43:53

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 2 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1165 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.052, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.687]


Code Coverage Report:
  2026-06-10 17:43:54

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 2 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1164 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.705]


Code Coverage Report:
  2026-06-10 17:43:55

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 2 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1150 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.692]


Code Coverage Report:
  2026-06-10 17:43:56

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 3 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1194 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.676]


Code Coverage Report:
  2026-06-10 17:43:57

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 3 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1179 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.669]


Code Coverage Report:
  2026-06-10 17:43:59

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 3 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1181 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.080]

Generating code coverage report in HTML format ... done [00:00.669]


Code Coverage Report:
  2026-06-10 17:44:00

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 3 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1149 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.671]


Code Coverage Report:
  2026-06-10 17:44:01

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 3 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1119 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.669]


Code Coverage Report:
  2026-06-10 17:44:02

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 3 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1101 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.656]


Code Coverage Report:
  2026-06-10 17:44:03

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 4 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1192 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.676]


Code Coverage Report:
  2026-06-10 17:44:04

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 4 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1191 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.681]


Code Coverage Report:
  2026-06-10 17:44:06

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 4 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1220 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.692]


Code Coverage Report:
  2026-06-10 17:44:07

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 4 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1172 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.677]


Code Coverage Report:
  2026-06-10 17:44:08

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 4 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1100 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.091]

Generating code coverage report in HTML format ... done [00:00.653]


Code Coverage Report:
  2026-06-10 17:44:09

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 4 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1130 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.679]


Code Coverage Report:
  2026-06-10 17:44:10

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 5 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1201 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.682]


Code Coverage Report:
  2026-06-10 17:44:11

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 5 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1177 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.672]


Code Coverage Report:
  2026-06-10 17:44:13

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 5 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1179 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.671]


Code Coverage Report:
  2026-06-10 17:44:14

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 5 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1178 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.677]


Code Coverage Report:
  2026-06-10 17:44:15

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 5 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1149 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.691]


Code Coverage Report:
  2026-06-10 17:44:16

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 5 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1179 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.705]


Code Coverage Report:
  2026-06-10 17:44:17

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 6 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1240 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.698]


Code Coverage Report:
  2026-06-10 17:44:19

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 6 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1195 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.682]


Code Coverage Report:
  2026-06-10 17:44:20

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 6 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1194 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.694]


Code Coverage Report:
  2026-06-10 17:44:21

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 6 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1180 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.677]


Code Coverage Report:
  2026-06-10 17:44:22

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 6 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1134 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.684]


Code Coverage Report:
  2026-06-10 17:44:23

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 6 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1226 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.776]


Code Coverage Report:
  2026-06-10 17:44:24

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 7 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1271 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.080]

Generating code coverage report in HTML format ... done [00:00.731]


Code Coverage Report:
  2026-06-10 17:44:26

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 7 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1239 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.697]


Code Coverage Report:
  2026-06-10 17:44:27

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 7 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1212 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.080]

Generating code coverage report in HTML format ... done [00:00.693]


Code Coverage Report:
  2026-06-10 17:44:28

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 7 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1226 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.714]


Code Coverage Report:
  2026-06-10 17:44:29

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 7 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1181 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.090]

Generating code coverage report in HTML format ... done [00:00.699]


Code Coverage Report:
  2026-06-10 17:44:31

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 7 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1166 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.091]

Generating code coverage report in HTML format ... done [00:00.710]


Code Coverage Report:
  2026-06-10 17:44:32

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 8 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1271 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.097]

Generating code coverage report in HTML format ... done [00:00.722]


Code Coverage Report:
  2026-06-10 17:44:33

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 8 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1209 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.694]


Code Coverage Report:
  2026-06-10 17:44:34

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 8 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1237 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.716]


Code Coverage Report:
  2026-06-10 17:44:35

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 8 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1211 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.690]


Code Coverage Report:
  2026-06-10 17:44:37

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 8 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1210 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.089]

Generating code coverage report in HTML format ... done [00:00.735]


Code Coverage Report:
  2026-06-10 17:44:38

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 8 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1164 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.709]


Code Coverage Report:
  2026-06-10 17:44:39

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 9 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1226 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.071, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.685]


Code Coverage Report:
  2026-06-10 17:44:40

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 9 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1227 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.080]

Generating code coverage report in HTML format ... done [00:00.706]


Code Coverage Report:
  2026-06-10 17:44:41

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 9 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1255 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.707]


Code Coverage Report:
  2026-06-10 17:44:43

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 9 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1301 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.052, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.759]


Code Coverage Report:
  2026-06-10 17:44:44

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 9 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1211 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.742]


Code Coverage Report:
  2026-06-10 17:44:45

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 9 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1300 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.825]


Code Coverage Report:
  2026-06-10 17:44:47

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 10 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1331 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.801]


Code Coverage Report:
  2026-06-10 17:44:48

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 10 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1242 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.070, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.727]


Code Coverage Report:
  2026-06-10 17:44:49

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 10 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1241 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.070, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.743]


Code Coverage Report:
  2026-06-10 17:44:50

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 10 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1255 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.052, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.766]


Code Coverage Report:
  2026-06-10 17:44:52

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 10 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1241 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.091]

Generating code coverage report in HTML format ... done [00:00.782]


Code Coverage Report:
  2026-06-10 17:44:53

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 10 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1243 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.777]


Code Coverage Report:
  2026-06-10 17:44:54

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 11 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1240 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.084]

Generating code coverage report in HTML format ... done [00:00.745]


Code Coverage Report:
  2026-06-10 17:44:55

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 11 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1225 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.727]


Code Coverage Report:
  2026-06-10 17:44:57

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 11 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1270 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.075, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.737]


Code Coverage Report:
  2026-06-10 17:44:58

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 11 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1192 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.052, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.720]


Code Coverage Report:
  2026-06-10 17:44:59

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 11 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1176 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.723]


Code Coverage Report:
  2026-06-10 17:45:00

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 11 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1202 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.738]


Code Coverage Report:
  2026-06-10 17:45:01

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 12 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1234 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.726]


Code Coverage Report:
  2026-06-10 17:45:03

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 12 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1246 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.736]


Code Coverage Report:
  2026-06-10 17:45:04

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 12 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1264 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.070, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.739]


Code Coverage Report:
  2026-06-10 17:45:05

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 12 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1210 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.739]


Code Coverage Report:
  2026-06-10 17:45:06

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 12 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1224 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.091]

Generating code coverage report in HTML format ... done [00:00.747]


Code Coverage Report:
  2026-06-10 17:45:08

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 12 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1179 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.742]


Code Coverage Report:
  2026-06-10 17:45:09

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 13 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1253 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.108]

Generating code coverage report in HTML format ... done [00:00.716]


Code Coverage Report:
  2026-06-10 17:45:10

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 13 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1241 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.082, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.720]


Code Coverage Report:
  2026-06-10 17:45:11

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 13 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1257 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.071, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.714]


Code Coverage Report:
  2026-06-10 17:45:13

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 13 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1211 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.049, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.720]


Code Coverage Report:
  2026-06-10 17:45:14

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 13 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1181 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.717]


Code Coverage Report:
  2026-06-10 17:45:15

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 13 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1183 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.713]


Code Coverage Report:
  2026-06-10 17:45:16

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 14 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1254 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.726]


Code Coverage Report:
  2026-06-10 17:45:17

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 14 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1258 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.066, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.083]

Generating code coverage report in HTML format ... done [00:00.732]


Code Coverage Report:
  2026-06-10 17:45:19

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 14 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1285 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.733]


Code Coverage Report:
  2026-06-10 17:45:20

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 14 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1225 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.052, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.725]


Code Coverage Report:
  2026-06-10 17:45:21

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 14 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1270 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.809]


Code Coverage Report:
  2026-06-10 17:45:22

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 14 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1211 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.751]


Code Coverage Report:
  2026-06-10 17:45:24

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 15 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1243 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.747]


Code Coverage Report:
  2026-06-10 17:45:25

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 15 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1256 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.074, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.734]


Code Coverage Report:
  2026-06-10 17:45:26

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 15 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1284 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.774]


Code Coverage Report:
  2026-06-10 17:45:27

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 15 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1213 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.051, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.743]


Code Coverage Report:
  2026-06-10 17:45:29

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 15 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1177 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.721]


Code Coverage Report:
  2026-06-10 17:45:30

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 15 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1199 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.093]

Generating code coverage report in HTML format ... done [00:00.756]


Code Coverage Report:
  2026-06-10 17:45:31

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 16 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1239 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.747]


Code Coverage Report:
  2026-06-10 17:45:32

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 16 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1272 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.770]


Code Coverage Report:
  2026-06-10 17:45:34

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 16 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1290 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.068, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.780]


Code Coverage Report:
  2026-06-10 17:45:35

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 16 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1271 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.050, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.768]


Code Coverage Report:
  2026-06-10 17:45:36

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 16 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1227 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.094]

Generating code coverage report in HTML format ... done [00:00.750]


Code Coverage Report:
  2026-06-10 17:45:37

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 16 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1228 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.109]

Generating code coverage report in HTML format ... done [00:00.750]


Code Coverage Report:
  2026-06-10 17:45:39

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 17 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1302 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.082, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.757]


Code Coverage Report:
  2026-06-10 17:45:40

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 17 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1254 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.720]


Code Coverage Report:
  2026-06-10 17:45:41

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 17 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1318 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.072, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.755]


Code Coverage Report:
  2026-06-10 17:45:42

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 17 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1243 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.052, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.087]

Generating code coverage report in HTML format ... done [00:00.705]


Code Coverage Report:
  2026-06-10 17:45:44

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 17 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1261 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.790]


Code Coverage Report:
  2026-06-10 17:45:45

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 17 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1252 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.091]

Generating code coverage report in HTML format ... done [00:00.743]


Code Coverage Report:
  2026-06-10 17:45:46

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 18 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1284 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.070, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.750]


Code Coverage Report:
  2026-06-10 17:45:47

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 18 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1385 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.071, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.089]

Generating code coverage report in HTML format ... done [00:00.839]


Code Coverage Report:
  2026-06-10 17:45:49

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 18 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1326 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.071, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.782]


Code Coverage Report:
  2026-06-10 17:45:50

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 18 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1280 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.052, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.102]

Generating code coverage report in HTML format ... done [00:00.760]


Code Coverage Report:
  2026-06-10 17:45:51

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 18 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1221 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.093]

Generating code coverage report in HTML format ... done [00:00.765]


Code Coverage Report:
  2026-06-10 17:45:53

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 18 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1220 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00.001]

Generating code coverage report in Clover XML format ... done [00:00.091]

Generating code coverage report in HTML format ... done [00:00.758]


Code Coverage Report:
  2026-06-10 17:45:54

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 19 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1267 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.082]

Generating code coverage report in HTML format ... done [00:00.759]


Code Coverage Report:
  2026-06-10 17:45:55

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 19 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1342 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.077, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.090]

Generating code coverage report in HTML format ... done [00:00.775]


Code Coverage Report:
  2026-06-10 17:45:56

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 19 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1299 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.067, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.776]


Code Coverage Report:
  2026-06-10 17:45:58

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 19 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1284 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.052, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.093]

Generating code coverage report in HTML format ... done [00:00.758]


Code Coverage Report:
  2026-06-10 17:45:59

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 19 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1271 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00.002]

Generating code coverage report in Clover XML format ... done [00:00.111]

Generating code coverage report in HTML format ... done [00:00.785]


Code Coverage Report:
  2026-06-10 17:46:00

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 19 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1225 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.088]

Generating code coverage report in HTML format ... done [00:00.720]


Code Coverage Report:
  2026-06-10 17:46:02

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 20 | CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar | ['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5] | agregarProducto llama al adaptador con id, nombre, precio y qty=1 | adapter->agregar llamado con (101, "Producto Test", 12.5, 1) | OK |

**Salida completa (CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar) - 1314 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.070, Memory: 14.00 MB

OK (1 test, 5 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.081]

Generating code coverage report in HTML format ... done [00:00.736]


Code Coverage Report:
  2026-06-10 17:46:03

 Summary:
  Classes:  0.00% (0/29)
  Methods:  1.85% (2/108)
  Lines:    0.98% (7/717)

App\Services\CarritoService
  Methods:  25.00% ( 2/ 8)   Lines:  18.42% (  7/ 38)
```

| 20 | VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk | clienteId=7, medioPagoId=2 | crearVenta retorna id cuando insert del modelo devuelve id | retorna id (int) | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk) - 1288 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.069, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.091]

Generating code coverage report in HTML format ... done [00:00.738]


Code Coverage Report:
  2026-06-10 17:46:04

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 20 | VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla | clienteId=1, medioPagoId=1 | crearVenta retorna null cuando insert falla | retorna null | OK |

**Salida completa (VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla) - 1287 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.074, Memory: 14.00 MB

OK (1 test, 2 assertions)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.085]

Generating code coverage report in HTML format ... done [00:00.754]


Code Coverage Report:
  2026-06-10 17:46:05

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 20 | VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk | items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1 | registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK | true | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk) - 1222 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

.                                                                  1 / 1 (100%)

Time: 00:00.053, Memory: 14.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.086]

Generating code coverage report in HTML format ... done [00:00.728]


Code Coverage Report:
  2026-06-10 17:46:07

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 20 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla | items con stock insuficiente | registrarVenta retorna false cuando validarStock lanza ValidationException | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla) - 1240 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.092]

Generating code coverage report in HTML format ... done [00:00.775]


Code Coverage Report:
  2026-06-10 17:46:08

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

| 20 | VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla | crearVenta devuelve null | registrarVenta retorna false si crearVenta falla | false | OK |

**Salida completa (VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla) - 1212 ms**

```text
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.12 with Xdebug 3.5.3
Configuration: C:\xampp\htdocs\trabajocampo_grupo31\phpunit.xml.dist

No tests executed!

Generating code coverage report in PHP format ... done [00:00]

Generating code coverage report in Clover XML format ... done [00:00.089]

Generating code coverage report in HTML format ... done [00:00.751]


Code Coverage Report:
  2026-06-10 17:46:09

 Summary:
  Classes:  0.00% (0/29)
  Methods:  0.00% (0/108)
  Lines:    0.00% (0/717)

```

