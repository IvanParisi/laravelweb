<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $nproductos = array("","Baby Cat Milk","Indoor Intense Hairball 34","Persian","Babydog Milk","Bulldog","Giant Adult","Giant Puppy","Miniature Schnauzer Puppy","Starter Mousse","Bebedero","Comedero",
            "Comedor Multi Feeder","Correa Para Perros","Juguete","Pelota Para Perros");

        $descripciones = array("","Una combinación de diferentes tipos de fibras que estimula el transito intestinal y ayuda a facilitar la eliminación del pelo que su gato traga todos los días","Revela la belleza del pelaje largo y denso del Persa gracias al complejo Beauty Shine Complex que limita la irritación de la piel, refuerza la función barrera de la piel e intensifica el color, el brillo y la suavidad del pelaje.","Para favorecer un crecimiento seguro y armonioso, la composición de Babydog milk, es lo más parecida posible a la leche materna, aportando un nivel elevado de energía y proteínas.","Alimento completo especial para Bulldog Inglés a partir de los 12 meses de edad. 
Cubre las necesidades especificas y reduce el olor en las heces.","La condroitina ayuda a la hidratación del cartílago y la glucosamina estimula su regeneración. Esta combinación sinérgica, con un suplemento de EPA y DHA, ayuda a mantener la salud articular","Mientras crece, su cachorro experimenta grandes cambios y nuevos descubrimientos. Durante este periodo clave, el sistema inmunológico del cachorro sigue desarrollándose. GIANT PUPPY ayuda a reforzar las defensas naturales de su cachorro ","Esta exclusiva croqueta ha sido desarrollada para adaptarse perfectamente a la mandíbula del cachorro de raza Schnauzer Miniatura. 
Facilita la prensión y estimula la masticación en el Schnauzer Miniatura.","Una solución nutricional única que satisface las necesidades de la madre y sus cachorros en cinco etapas del ciclo de la vida: gestación, nacimiento, lactancia, destete y crecimiento hasta los 2 meses de edad.","Bebedero A Bolilla Drinky 75 0,075 L Estas botellas de bebida para los animales domésticos pequeños son adecuadas para todo tipo de jaulas de red de alambre gracias al práctico gancho con el que cuentan. 
La boquilla de acero inoxidable con válvula de es","El Comedero Interactivo Catit Multi Feeder es perfecto para servir comida húmeda y seca. 
Su diseño compacto e inteligente combina 3 prácticas funciones en 1 comedero, brindandote una hendidura especial donde se coloca el alimento seco, un plato de fácil"," Correa Trixie Tracking Para Perros 5mm 10m    ","El Wave Circuit consta de una bola que se mueve en una pista cerrada conformada por 7 piezas que poseen elevaciones para movimientos más diversos","Pelota Para Perros Con Estetica Deportes 63mm  Se venden por unidad. Color sujeto a disponibilidad","Para favorecer un crecimiento seguro y armonioso, la composición de Babydog milk, es lo más parecida posible a la leche materna, aportando un nivel elevado de energía y proteínas.","Para un crecimiento estable y armonioso, la composición de la leche Babycat milk, es lo más cercano posible a la leche materna, con altos niveles de energía y proteína.");
  $tipo = 0;


        for($i = 1; $i<= 15;$i++):
         if($i <= 3) {$tipo = 1;} elseif($i <= 9) {$tipo = 2;} else {$tipo = 3;};
        DB::table("productos")->insert
        (
        [


                "id" => $i,
                "nombre" => $nproductos[$i],
                "imagen" => "img/" . $nproductos[$i] . ".jpg",
                "descripcion" => $descripciones[$i],
                "precio" => $faker->numberBetween(250,1000),
                "stock" => $faker->numberBetween(150,500),
                "tipo_productos_id" => $tipo,
                "created_at" => date("Y-m-d h:i:s",time()),

        ]);
        endfor;
    }
}
