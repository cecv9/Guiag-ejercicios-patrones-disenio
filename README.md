# Guía de Ejercicios - Patrones de Diseño

Esta guía presenta una serie de ejercicios prácticos para aprender y aplicar los patrones de diseño más utilizados en el desarrollo de software.

## Tabla de Contenidos

1. [Patrones Creacionales](#patrones-creacionales)
   - [Singleton](#1-singleton)
   - [Factory Method](#2-factory-method)
   - [Builder](#3-builder)
   - [Prototype](#4-prototype)
2. [Patrones Estructurales](#patrones-estructurales)
   - [Adapter](#5-adapter)
   - [Decorator](#6-decorator)
   - [Facade](#7-facade)
   - [Composite](#8-composite)
3. [Patrones de Comportamiento](#patrones-de-comportamiento)
   - [Strategy](#9-strategy)
   - [Observer](#10-observer)
   - [Command](#11-command)
   - [Template Method](#12-template-method)

---

## Patrones Creacionales

Los patrones creacionales proporcionan mecanismos de creación de objetos que incrementan la flexibilidad y la reutilización del código existente.

### 1. Singleton

**Descripción:** Garantiza que una clase tenga una única instancia y proporciona un punto de acceso global a ella.

**Ejercicio:**
Implementa un sistema de configuración de aplicación utilizando el patrón Singleton. El sistema debe:
- Almacenar configuraciones como idioma, tema (claro/oscuro) y zona horaria
- Proporcionar métodos para obtener y modificar las configuraciones
- Garantizar que solo exista una única instancia de la configuración en toda la aplicación

```
Ejemplo de uso esperado:
config1 = ConfiguracionApp.obtenerInstancia()
config2 = ConfiguracionApp.obtenerInstancia()
// config1 y config2 deben ser la misma instancia
```

---

### 2. Factory Method

**Descripción:** Define una interfaz para crear objetos, pero permite que las subclases decidan qué clase instanciar.

**Ejercicio:**
Crea un sistema de generación de documentos utilizando Factory Method. El sistema debe:
- Soportar diferentes tipos de documentos: PDF, Word y HTML
- Cada documento debe tener métodos para `crear()`, `abrir()` y `guardar()`
- Implementar una fábrica que cree el documento correcto según el tipo solicitado

```
Ejemplo de uso esperado:
fabrica = FabricaDocumentos()
documento = fabrica.crearDocumento("PDF")
documento.crear()
documento.guardar("mi_archivo")
```

---

### 3. Builder

**Descripción:** Permite construir objetos complejos paso a paso, separando la construcción de un objeto de su representación.

**Ejercicio:**
Implementa un constructor de pizzas personalizado utilizando el patrón Builder. El sistema debe permitir:
- Seleccionar el tamaño de la pizza (pequeña, mediana, grande)
- Elegir el tipo de masa (delgada, gruesa, rellena)
- Agregar ingredientes uno por uno (queso, pepperoni, champiñones, etc.)
- Seleccionar salsa (tomate, barbacoa, pesto)
- Construir la pizza final con un método `construir()`

```
Ejemplo de uso esperado:
pizza = PizzaBuilder()
    .conTamaño("grande")
    .conMasa("delgada")
    .conSalsa("tomate")
    .agregarIngrediente("queso")
    .agregarIngrediente("pepperoni")
    .construir()
```

---

### 4. Prototype

**Descripción:** Permite copiar objetos existentes sin hacer que el código dependa de sus clases.

**Ejercicio:**
Crea un sistema de clonación de figuras geométricas usando el patrón Prototype. El sistema debe:
- Definir figuras base: Círculo, Rectángulo y Triángulo
- Cada figura debe tener propiedades como color, posición (x, y) y dimensiones
- Implementar un método `clonar()` que cree una copia exacta de la figura
- Permitir modificar la copia sin afectar al original

```
Ejemplo de uso esperado:
circuloOriginal = Circulo(radio=5, color="rojo", x=10, y=20)
circuloCopia = circuloOriginal.clonar()
circuloCopia.color = "azul"
// circuloOriginal.color sigue siendo "rojo"
```

---

## Patrones Estructurales

Los patrones estructurales explican cómo ensamblar objetos y clases en estructuras más grandes, manteniendo la flexibilidad y eficiencia.

### 5. Adapter

**Descripción:** Permite que objetos con interfaces incompatibles colaboren entre sí.

**Ejercicio:**
Implementa un adaptador para integrar un sistema de pago antiguo con uno nuevo. El sistema debe:
- Tener una interfaz de pago moderna que usa `procesarPago(monto, moneda)`
- Adaptar un sistema legacy que usa `realizarTransferencia(cantidad, tipoDivisa, codigoSeguridad)`
- El adaptador debe traducir las llamadas del sistema moderno al formato del sistema antiguo

```
Ejemplo de uso esperado:
sistemaAntiguo = SistemaPagoLegacy()
adaptador = AdaptadorPago(sistemaAntiguo)
// Usar el adaptador como si fuera el sistema moderno
adaptador.procesarPago(100.00, "USD")
```

---

### 6. Decorator

**Descripción:** Permite añadir funcionalidades a objetos colocándolos dentro de objetos envolventes especiales.

**Ejercicio:**
Crea un sistema de personalización de café utilizando el patrón Decorator. El sistema debe:
- Tener un café base con un precio y descripción
- Permitir añadir decoradores como: leche, crema, chocolate, caramelo, canela
- Cada decorador debe modificar el precio y la descripción del café
- Los decoradores deben poder combinarse en cualquier orden

```
Ejemplo de uso esperado:
cafe = CafeSimple()  // $2.00 - "Café simple"
cafe = DecoradorLeche(cafe)  // $2.50 - "Café simple, con leche"
cafe = DecoradorChocolate(cafe)  // $3.00 - "Café simple, con leche, con chocolate"
```

---

### 7. Facade

**Descripción:** Proporciona una interfaz simplificada a una biblioteca, framework o conjunto de clases complejo.

**Ejercicio:**
Implementa una fachada para un sistema de cine en casa. El sistema interno tiene:
- `Proyector`: métodos `encender()`, `apagar()`, `configurarResolucion()`
- `SistemaSonido`: métodos `encender()`, `apagar()`, `ajustarVolumen()`, `configurarModoSonido()`
- `ReproductorBluRay`: métodos `encender()`, `apagar()`, `reproducir()`, `pausar()`
- `Luces`: métodos `encender()`, `apagar()`, `ajustarIntensidad()`

La fachada debe proporcionar métodos simples:
- `verPelicula(titulo)`: configura todo el sistema para ver una película
- `finalizarPelicula()`: apaga todo el sistema de forma ordenada

```
Ejemplo de uso esperado:
cineEnCasa = FachadaCineEnCasa()
cineEnCasa.verPelicula("Matrix")
// Internamente: enciende proyector, ajusta luces, configura sonido, etc.
cineEnCasa.finalizarPelicula()
```

---

### 8. Composite

**Descripción:** Permite componer objetos en estructuras de árbol y trabajar con ellas como si fueran objetos individuales.

**Ejercicio:**
Crea un sistema de organización de archivos y carpetas usando el patrón Composite. El sistema debe:
- Definir una interfaz común para archivos y carpetas con método `obtenerTamaño()`
- Los archivos tienen un tamaño fijo
- Las carpetas pueden contener archivos y otras carpetas
- El tamaño de una carpeta es la suma de los tamaños de todo su contenido

```
Ejemplo de uso esperado:
archivo1 = Archivo("doc.txt", 100)
archivo2 = Archivo("imagen.png", 500)
carpeta1 = Carpeta("Documentos")
carpeta1.agregar(archivo1)
carpeta1.agregar(archivo2)
carpetaRaiz = Carpeta("Root")
carpetaRaiz.agregar(carpeta1)
print(carpetaRaiz.obtenerTamaño())  // Output: 600
```

---

## Patrones de Comportamiento

Los patrones de comportamiento se encargan de la comunicación efectiva y la asignación de responsabilidades entre objetos.

### 9. Strategy

**Descripción:** Permite definir una familia de algoritmos, colocar cada uno en una clase separada y hacer que sus objetos sean intercambiables.

**Ejercicio:**
Implementa un sistema de cálculo de descuentos para una tienda online usando el patrón Strategy. El sistema debe soportar diferentes estrategias de descuento:
- `SinDescuento`: no aplica ningún descuento
- `DescuentoPorcentaje`: aplica un porcentaje de descuento (ej: 10%, 20%)
- `DescuentoFijo`: aplica un monto fijo de descuento
- `DescuentoClienteVIP`: aplica 15% + envío gratis (valor del envío: $5)

El carrito de compras debe poder cambiar su estrategia de descuento en tiempo de ejecución.

```
Ejemplo de uso esperado:
carrito = CarritoCompras()
carrito.agregarProducto("Laptop", 1000)
carrito.setEstrategiaDescuento(DescuentoPorcentaje(20))
print(carrito.calcularTotal())  // Output: 800
carrito.setEstrategiaDescuento(DescuentoClienteVIP())
print(carrito.calcularTotal())  // Output: 845 (15% descuento + envío gratis)
```

---

### 10. Observer

**Descripción:** Permite definir un mecanismo de suscripción para notificar a múltiples objetos sobre cualquier evento que ocurra en el objeto que están observando.

**Ejercicio:**
Crea un sistema de notificaciones para una red social usando el patrón Observer. El sistema debe:
- Permitir que usuarios sigan a otros usuarios
- Cuando un usuario publica algo, todos sus seguidores son notificados
- Los seguidores pueden elegir el tipo de notificación: email, push o SMS
- Debe ser posible dejar de seguir a un usuario

```
Ejemplo de uso esperado:
usuario1 = Usuario("Alice")
usuario2 = Usuario("Bob")
usuario3 = Usuario("Charlie")
usuario1.agregarSeguidor(usuario2, TipoNotificacion.EMAIL)
usuario1.agregarSeguidor(usuario3, TipoNotificacion.PUSH)
usuario1.publicar("¡Hola mundo!")
// Bob recibe notificación por email
// Charlie recibe notificación push
```

---

### 11. Command

**Descripción:** Convierte una solicitud en un objeto independiente que contiene toda la información sobre la solicitud.

**Ejercicio:**
Implementa un sistema de control de dispositivos domésticos inteligentes usando el patrón Command. El sistema debe:
- Soportar dispositivos: Luz, Termostato, Televisor
- Crear comandos para: encender, apagar, subir/bajar intensidad o temperatura
- Implementar un control remoto que ejecute los comandos
- Incluir funcionalidad de deshacer (undo) para cada comando

```
Ejemplo de uso esperado:
luz = Luz()
comandoEncenderLuz = ComandoEncender(luz)
comandoApagarLuz = ComandoApagar(luz)
controlRemoto = ControlRemoto()
controlRemoto.setComando(0, comandoEncenderLuz, comandoApagarLuz)
controlRemoto.presionarBoton(0)  // Enciende la luz
controlRemoto.presionarDeshacer()  // Apaga la luz
```

---

### 12. Template Method

**Descripción:** Define el esqueleto de un algoritmo en una clase base y permite que las subclases redefinan ciertos pasos sin cambiar la estructura general.

**Ejercicio:**
Crea un sistema de preparación de bebidas usando el patrón Template Method. El sistema debe:
- Definir un método plantilla `preparar()` con los pasos: hervir agua, preparar ingrediente principal, verter en taza, agregar condimentos
- Implementar clases para Café y Té que hereden de la clase base
- El café usa café molido como ingrediente y puede llevar azúcar y leche
- El té usa hojas de té como ingrediente y puede llevar limón

```
Ejemplo de uso esperado:
cafe = Cafe()
cafe.preparar()
// Output:
// Hirviendo agua...
// Preparando café molido...
// Vertiendo en taza...
// Agregando azúcar y leche...

te = Te()
te.preparar()
// Output:
// Hirviendo agua...
// Preparando hojas de té...
// Vertiendo en taza...
// Agregando limón...
```

---

## Recursos Adicionales

### Libros Recomendados
- "Design Patterns: Elements of Reusable Object-Oriented Software" - Gang of Four
- "Head First Design Patterns" - Freeman & Freeman
- "Refactoring to Patterns" - Joshua Kerievsky

### Consejos para Resolver los Ejercicios

1. **Identifica el problema**: Antes de implementar, asegúrate de entender qué problema resuelve cada patrón.
2. **Dibuja diagramas**: Un diagrama UML puede ayudarte a visualizar las relaciones entre clases.
3. **Empieza simple**: Implementa primero la versión más básica y luego añade complejidad.
4. **Prueba tu código**: Escribe pruebas unitarias para verificar que tu implementación funciona correctamente.
5. **Refactoriza**: Una vez que funcione, revisa si puedes mejorar el código.

---

## Licencia

Este material está disponible bajo la licencia MIT. Siéntete libre de usar, modificar y compartir estos ejercicios.
