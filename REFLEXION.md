# Reflexión (Etapa 4)

Responde con tus palabras (mínimo 40 palabras por respuesta). Ver README, Etapa 4.

## Pregunta 1
Mi código personal es 221bceec.
gettype dice que es de tipo string.
substr devuelve string porque corta un trozo de un texto, y un trozo de texto sigue siendo texto.
Si lo usara en una suma, PHP tomaría el 221 del inicio, descartaría lo demás y avisaría con una advertencia.

## Pregunta 2
$precio vale 404.24 y gettype lo llama double.
Dice double y no float porque es el nombre histórico en PHP, pero es el mismo tipo decimal.
0.1 + 0.2 == 0.3 da false porque los decimales se guardan de forma aproximada y el resultado real es 0.30000000000000004.
$n1 vale 90 y es de tipo integer.
intdiv(90, 74) da 1 (solo la parte entera), y 90 / 74 da 1.22 (con decimales).

## Pregunta 3
define() se ejecuta mientras corre el programa y const se resuelve al compilar.
Mi redefinir dio false.
Dio false porque una constante ya definida no se puede cambiar.
Lo probé con PHP 8.2.12 y Apache 2.4.58.

Intenté cambiar SEMILLA_LAB8 a "otra", pero PHP no me dejó, por eso redefinir dio false. Las constantes sirven para guardar valores que no deben cambiar nunca, como la semilla con la que calculo mi código personal.