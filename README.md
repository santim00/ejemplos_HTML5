ejemplos_HTML5
==============

En este repositorio voy a ir subiendo ejemplos que voy a ir haciendo en mis prácticas con HTML5.

A su vez a continuación voy a agregar artículos sobre diferentes temas relacionados con HTML5 que voy a ir investigando a medida que aprendo sobre esta nueva tecnología web.

<h3>Web semántica con HTML5</h3>

Básicamente, HTML es el lenguaje que se usa para escribir páginas web. Es entendido por Navegadores Web estándares(como Chrome, Firefox, IE, entre otros) y docenas de otros tipos de user-agents como celulares, spider-bots, etc.
Ahora bien, HTML trabaja con dos tipos de elementos principales:

*  Tags
*	Contenido (texto)

Algunos tags serán de tipo contenido, como imágenes, películas Flash, metadata, etc; pero la mayoría de los tags tendrán como finalidad brindar estructura y organización al contenido.

> “La Web es texto y el texto tiene un significado. 
> En última instancia, el contenido que leen los navegadores es puro texto.”
> (http://www.html5rocks.com/es/features/semantics)

Entonces, llamamos <b>html semántico</b> a un documento HTML que usa correctamente las etiquetas para que la estructura resultante, quitandole la capa de estilos, tenga sentido por si sola. O sea que <b>los tags estructuran contenido pero a la vez, éstos se aplican de manera coherente con el significado que poseen.</b> Así, si yo uso 200 divs o sections en mi página con contenido sin relación, por mucho que use CSS para dibujar cajas y añadir fondos de mil colores para diferenciarlos, sin este CSS el contenido no va a estar estructurado de manera correcta semánticamente. 

En una página con html semántico, las tablas solo tienen sentido para mostrar datos tabulados, los divs solo se usan como bloques contenedores como pueden ser la cabecera o pie de la página, la barra lateral, etc. El resto de elementos deben incluirse con las etiquetas html que los representan: titulares, parrafos, listas, citas, estilos de letra, etc. 
Pero, en HTML tenemos una gama bastante limitada de elementos para construir la estructura de nuestros sitios web. Una de las deficiencias encontradas por varios años de desarrollos web es que no habían tags para construir semánticamente noticias, historias o recetas por ejemplo. Este problema es uno de los que intenta solucionar la nueva definición semántica de HTML5 con el agregado de nuevos tags estructurales semánticos, que serán comentados a continuación (para mas información: http://html5doctor.com/lets-talk-about-semantics/ ).

<h4>Elementos estructurales de HTML5</h4>

Entre otras cosas, HTML5 nos aporta una serie de etiquetas nuevas que permiten mejorar la semántica de nuestra página:

    * <header/>
    * <footer/>
    * <nav/>
    * <aside/>
    * <section/>
    * <article/>

Las 3 primeras apenas se prestan a confusión:

    * <header/>: Utilizado comúnmente para situar los elementos del encabezado de un sitio web o una sección.
    * <footer/>: debe contener información sobre su elemento contenedor(la pagina web o una sección) 
                - quien lo ha escrito, información de propiedad intelectual, enlaces, etc..-
    * <nav/>: Nos permite marcar conjunto de links como menús y por tanto ayudar a los buscadores 
              a detectar nuestra estructura web.

<h6>Section</h6>
El uso del <b> tag section </b> es muy parecido al de un div pero aportando una carga de significado al contenido. Englobando distintos elementos dentro de una etiqueta section lo que estamos haciendo es declarar que todo su contenido está relacionado y forma parte de un mismo significado o elemento.

La regla para saber cuando usar el nuevo elemento section  es sencilla, tan solo debes hacerte esta pregunta, “¿está todo el contenido que va a albergar, relacionado entre sí?”:

    <section>
      <h1>Introducción al elemento section</h1>
      <p>El elemento section se usa para agrupar contenido relacionado entre si.</p>
      <p>Puede ser usado como un reemplazo al elemento div en ciertas circunstancias</p>
    </section>

<h6>Article</h6>

el elemento <b>article</b> deberá utilizarse cuando se tenga un contenido que sea independiente, distribuible o reusable, es decir, cuando al mover el contenido a otro lugar de la página, a otra página distinta, o se quite, no afecte al resto de la página. 

Un ejemplo podría ser una entrada de un blog, el cual es un contenido totalmente independiente del resto del blog, y podemos reutilizarlo en otras páginas o incluso llevarlo a otro blog distinto y el blog seguiría teniendo el mismo significado. 
Otros ejemplos pueden ser las noticias de un periódico o una revista, un comentario en una entrada de un blog, un widget o un gadget, etc. 

Cuando se anidan distintos elementos article, el elemento interior está relacionado con el que lo contiene. Un ejemplo de esta forma de utilizar este elemento seria la entrada de un blog y sus comentarios, los cuales son independientes unos de otros.

<h6>Aside</h6>

El elemento <b>aside</b> debe utilizarse para agrupar contenido relacionado tangencialmente, en el contexto de que su relación con el contenido principal no se relaciona directamente sino de forma lateral. Si tienes contenido que consideras que debe de estar apartado del contenido principal, entonces, debes utilizar un elemento aside para él.

Una regla sencilla para saber cuando puede ser necesario utilizar un elemento aside es cuando la respuesta a la pregunta “¿si se elimina el contenido que agrupa el elemento aside, se reduce el significado del contenido principal?” sea <b>negativa</b>.

<h5>Posibles Layouts</h5>

![Alt text](/img/layout1.png)

![Alt text](/img/layout2.png)
