<?php

    $preguntas=array(
        1=>array("pregunta" => "¿Cuál es la descripción que crees que define mejor el concepto 'clase' en la programación orientada a objetos?",
             "respuesta" => "c",
             "a" => "Es un concepto similar al de 'array'",
             "b" => "Es un tipo particular de variable",
             "c" => "Es un modelo o plantilla a partir de la cual creamos objetos",
             "d" => "Es una categoria de datos ordenada secuencialmente"),
        2=>array("pregunta" => "¿Qué elementos crees que definen a un objeto?",
             "respuesta" => "b",
             "a" => "Sus cardinalidad y su tipo",
             "b" => "Sus atributos y sus métodos",
             "c" => "La forma en que establece comunicación e intercambia mensajes",
             "d" => "Su interfaz y los eventos asociados"),
        3=>array("pregunta" => "¿Qué código de los siguientes tiene que ver con la herencia?",
             "respuesta" => "a",
             "a" => "public class Componente extends Producto",
             "b" => "public class Componente inherit Producto",
             "c" => "public class Componente implements Producto",
             "d" => "public class Componente belong to Producto"),
        4=>array("pregunta" => "¿Qué significa instanciar una clase?",
             "respuesta" => "c",
             "a" => "Duplicar una clase",
             "b" => "Eliminar una clase",
             "c" => "Crear un objeto a partir de la clase",
             "d" => "Conectar dos clases entre sí"),
        5=>array("pregunta" => "En Java, ¿a qué nos estamos refiriendo si hablamos de 'Swing'?",
             "respuesta" => "d",
             "a" => "Una función utilizada para intercambiar valores",
             "b" => "Es el sobrenombre de la versión 1.3 del JDK",
             "c" => "Un framework específico para Android",
             "d" => "Una librería para construir interfaces gráficas"),
        6=>array("pregunta" => "¿Qué es Eclipse?",
             "respuesta" => "c",
             "a" => "Una libreria de Java",
             "b" => "Una versión de Java especial para servidores",
             "c" => "Un IDE para desarrollar aplicaciones",
             "d" => "Ninguna de las anteriores"),
        7=>array("pregunta" => "¿Qué es el bytecode en Java?",
             "respuesta" => "b",
             "a" => "El formato de intercambio de datos",
             "b" => "El formato que obtenemos tras compilar un fuente .java",
             "c" => "Un tipo de variable",
             "d" => "Un depurador de código"),
        8=>array("pregunta" => "¿Qué significa sobrecargar (overload) un método?",
             "respuesta" => "c",
             "a" => "Editarlo para modificar su comportamiento",
             "b" => "Cambiarle el nombre dejándolo con la misma funcionalidad",
             "c" => "Crear un método con el mismo nombre pero diferentes argumentos",
             "d" => "Añadirle funcionalidades a un método"),
        9=>array("pregunta" => "¿Qué es una excepción?",
             "respuesta" => "a",
             "a" => "Un error que lanza un método cuando algo va mal",
             "b" => "Un objeto que no puede ser instanciado",
             "c" => "Un bucle que no finaliza",
             "d" => "Un tipo de evento muy utilizado al crear interfaces"),
        10=>array("pregunta" => "¿Cuál método es correcto al imprimir texto?",
             "respuesta" => "b",
             "a" => "System.out()",
             "b" => "System.out.println()",
             "c" => "out.write.Text()",
             "d" => "System.printText()"),
        11=>array("pregunta" => "¿Cuál de las siguientes funciones completa la linea para leer una entrada del siguiente código?
             Scanner sc=new Scanner(System.in);
             String st=sc.______():",
             "respuesta" => "d",
             "a" => "input()",
             "b" => "getLine()",
             "c" => "nextGet()",
             "d" => "nextLine()"),
        12=>array("pregunta" => "Completa los espacios para declarar una variable entera y fija de valor 5
             ___ var=__;",
             "respuesta" => "c",
             "a" => "float,5.0",
             "b" => "double,5",
             "c" => "int,5",
             "d" => "entero,5"),
        13=>array("pregunta" => "¿Cuál es la linea de código que abre un archivo en modo de lectura?",
             "respuesta" => "a",
             "a" => "FileReader fr = new FileReader (archivo);",
             "b" => "FileReader fr = new FileWriter (archivo);",
             "c" => "File archivo = new File ('C:\\archivo.txt');",
             "d" => "String linea = br.readLine()"),
        14=>array("pregunta" => "¿Cuál es la linea de código que abre un archivo en modo de escritura?",
             "respuesta" => "b",
             "a" => "FileReader fr = new FileReader (archivo);",
             "b" => "FileReader fr = new FileWriter (archivo);",
             "c" => "File archivo = new File ('C:\\archivo.txt');",
             "d" => "String linea = br.readLine()")                );

$vector2=array();
for($i=0;$i<6;$i++){
    $band=0;
    $num=rand(1,14);
    for($j=0;$j<count($vector2);$j++){
        if($num==$vector2[$j]){
            $band=1;
            break;
        }
    }
    if($band==0){
        $vector2[]=$num;
    }else{
        $i--;
    }
}
$pregunta=array();
$pregunta[0]=$preguntas[$vector2[0]];
$pregunta[1]=$preguntas[$vector2[1]];
$pregunta[2]=$preguntas[$vector2[2]];
$pregunta[3]=$preguntas[$vector2[3]];
$pregunta[4]=$preguntas[$vector2[4]];
$pregunta[5]=$preguntas[$vector2[5]];

        require "examen.php";
        
?>


































