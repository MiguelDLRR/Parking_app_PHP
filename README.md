# Parking_app_PHP
Aplicación en PHP para la gestión de las plazas de un aparcamiento de vehículos

Éste tendrá dos zonas de aparcamientos: una consta de 10 plazas pequeñas y la otra de 14 plazas grandes. 
Cada zona de aparcamiento vendrá representada por un array que guardará el estado de cada plaza: 0 – libre, 1 – ocupada.
Los coches grandes sólo podrán aparcar en plazas grandes. Los coches pequeños preferiblemente aparcarán en plazas pequeñas pero, si éstas están todas ocupadas, aparcarán en plazas grandes, si hay libres.
El programa consta de las siguientes partes:
-Formulario de inicio que muestra las operaciones que puede realizar el operario del parking: aparcar coche, retirar coche o visualizar estado del parking.
Cada operación es representada con un radiobutton.
-Aparcar coche, donde se muestra un formulario en el que el operario introducirá el tipo de coche que intenta aparcar (pequeño o grande, puedes usar dos radiobuttons).
 
 El programa aparcará el coche siguiendo las restricciones que se han explicado anteriormente 
 (coche grande sólo puede aparcar en plaza grande, coche pequeño aparcará en plaza pequeña y, si no hay libres, aparcará en plaza grande).
El coche siempre aparcará en la primera plaza libre que encuentre (no hay que especificar número de plaza).
Si todas las plazas donde un coche puede aparcar estubieran ocupadas, se informaría de que el parking está completo.

-Retirar coche, en que el operario introducirá mediante un formulario el parking del que retira el coche (plazas grandes o plazas pequeñas) y el número de plaza.
-Visualizar estado del parking, donde se mostrará el estado de todas las plazas del parking.

El programa mantiene en todo momento el estado del parking mediante sesiones.
