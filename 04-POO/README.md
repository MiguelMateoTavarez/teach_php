# Programación orientada a objetos con PHP

La programación orientada a objetos (POO) es una forma de escribir código en la que organizamos nuestros programas alrededor de "objetos". Estos objetos son como pequeñas cajas que contienen tanto datos como funciones (métodos) que actúan sobre esos datos.

Un ejemplo perfecto de esto es un auto. El mismo en sí es un objeto y tiene varias funcionalidades, como frenar, acelerar, cambiar de velocidades, bocina, luces, etc.

Hablemos de las ventajas de la POO:

* **Reutilización de código:** Una de las principales ventajas de la POO es la capacidad de reutilizar el código. Como los objetos pueden ser utilizados en diferentes partes de un programa o incluso en programas diferentes, podemos escribir código una vez y utilizarlo en múltiples lugares.

* **Modularidad:** La POO permite dividir un programa en módulos más pequeños y manejables, llamados objetos. Cada objeto es responsable de una parte específica del funcionamiento del programa, lo que facilita la comprensión y el mantenimiento del código.

* **Abstracción:** La POO nos permite abstraer los detalles internos de un objeto y enfocarnos en cómo interactuar con él. Esto significa que podemos utilizar objetos sin necesidad de conocer todos los detalles de su implementación interna, lo que simplifica el desarrollo y hace que el código sea más fácil de entender.

* **Encapsulamiento:** En la POO, los objetos encapsulan tanto los datos como el comportamiento relacionado en una sola entidad. Esto significa que los datos son protegidos dentro del objeto y sólo pueden ser accedidos y modificados a través de métodos específicos del objeto, lo que ayuda a prevenir errores y asegurar la consistencia de los datos.

* **Facilita la gestión de proyectos grandes:** En proyectos grandes, la POO facilita la gestión del código al dividirlo en objetos y clases. Esto hace que sea más fácil trabajar en equipo, ya que cada miembro puede trabajar en partes específicas del programa sin interferir con el trabajo de los demás.

La POO cuenta con cuatro pilares que la sustentan, vamos a darles un vistazo:

* **Abstracción:** La abstracción es el proceso de identificar las características importantes de un objeto y ignorar los detalles que no son relevantes para el contexto en el que se está trabajando. En la POO, la abstracción nos permite modelar objetos del mundo real como entidades abstractas con propiedades y comportamientos específicos. Por ejemplo, podemos representar un coche como un objeto con propiedades como color, marca y modelo, y comportamientos como arrancar, detenerse y acelerar.

* **Encapsulamiento:** El encapsulamiento es el proceso de ocultar los detalles internos de un objeto y exponer sólo la interfaz pública a través de la cual otros objetos pueden interactuar con él. Esto se logra definiendo atributos como privados, lo que significa que sólo pueden ser accedidos y modificados por métodos específicos del objeto. El encapsulamiento ayuda a proteger los datos de un objeto y asegura la coherencia del estado interno.

* **Herencia:** La herencia es un mecanismo que permite que una clase (o tipo de objeto) herede atributos y métodos de otra clase. Esto significa que una clase puede extender el comportamiento de otra clase, añadiendo nuevas características o modificando el comportamiento existente según sea necesario. La herencia nos permite reutilizar el código y organizar las clases en una jerarquía de relaciones de "es un".

* **Polimorfismo:** El polimorfismo es la capacidad de un objeto de comportarse de diferentes maneras dependiendo del contexto en el que se utiliza. Esto se logra mediante el uso de métodos que pueden ser sobrescritos en las clases derivadas para proporcionar un comportamiento específico para cada una. El polimorfismo nos permite escribir código que puede funcionar con objetos de diferentes tipos sin necesidad de conocer el tipo específico en tiempo de compilación.

## ¡Vamos a practicar!

Primero, vamos a aprender a montar un proyecto con PHP y su mejor acompañante: Composer. Para ello debemos tener instaladas ambas herramientas en nuestro equipo (PHP y Composer). Una vez tengamos instalado todo, vamos a proceder a ejecutar el siguiente comando.

```
composer init
```

Rellenamos toda la información que nos pide y generará la estructura base del proyecto con `src/` como ruta principal del proyecto, luego, creamos un `index.php` fuera del src para que sea nuestro punto de entrada, verifica cómo está hecho en este proyecto para que puedas replicarlo, nuestro punto de entrada requiere el `autoload.php` del composer para funcionar e importar las clases que vamos a crear.

Si bajas este repositorio, y ya entraste a la carpeta 04-POO, debes ejecutar `composer install` en vez de `composer init`, también puedes cambiar el enrutamiento del autoload en el `composer.json`, así podrás personalizar el identificador base de los espacios de nombre de tus clases.
