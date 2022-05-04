<?php

namespace App\Http\Controllers;

const FUNAS = [
    [
        "Id" => 1,
        "Nombre" => "Fuwako Yuni",
        "Altura" => 1.69,
        "Habilidad" => "Vuela por que es un alicornio",
        "Imagen" => "https://storage.cloud.google.com/funatubers/fuwakoYuni.png",
        "Frase Filosofica" => "Volar o no volar, esa es la cuestion"
    ],
    [
        "Id" => 2,
        "Nombre" => "Rocco Pops",
        "Altura" => 1.57,
        "Habilidad" => "Se transforma en lobo",
        "Imagen" => "https://storage.cloud.google.com/funatubers/RoccoPops.jpg",
        "Frase Filosofica" => "Aullando a la luna como Michal Jackson"
    ],
    [
        "Id" => 3,
        "Nombre" => "Kakashi Rushi",
        "Altura" => 1.62,
        "Habilidad" => "Esta hecha de paja de la de granja",
        "Imagen" => "https://storage.cloud.google.com/funatubers/KakashiRushi.png",
        "Frase Filosofica" => "Hay un hombre de paja dentro de una casa de paja, se pregunta a si mismo, esta el hombre hecho de casa o esta la casa hecha de hombre, el hombre grita por que no sabe."
    ],
    [
        "Id" => 4,
        "Nombre" => "Almadeia Ciana",
        "Altura" => 1.65,
        "Habilidad" => "Desarrrolla jueguitos",
        "Imagen" => "https://storage.cloud.google.com/funatubers/AlmadeiaCiana.jpeg",
        "Frase Filosofica" => "Cuando miras al vacio, el vacio te devuelve la mirada"
    ],
    [
        "Id" => 5,
        "Nombre" => "Tulip Blossom",
        "Altura" => 1.73,
        "Habilidad" => "Se monta en su ovni",
        "Imagen" => "https://storage.cloud.google.com/funatubers/TulipBlossom.jpg",
        "Frase Filosofica" => "Los tulipanes cuando florecen"
    ],
    [
        "Id" => 6,
        "Nombre" => "Reina Hardgore",
        "Altura" => 1.66,
        "Habilidad" => "Juega al League of Legends",
        "Imagen" => "https://storage.cloud.google.com/funatubers/ReinaHardgore.jpg",
        "Frase Filosofica" => "No lloren por mi, ya estoy muerto"
    ],
    [
        "Id" => 7,
        "Nombre" => "Poneko",
        "Altura" => 1.80,
        "Habilidad" => "Ser un gato estilista",
        "Imagen" => "https://storage.cloud.google.com/funatubers/POneko.jpg",
        "Frase Filosofica" => "El arte es subjetivo"
    ],
    [
        "Id" => 8,
        "Nombre" => "Tachbiana Mitsuki",
        "Altura" => 1.67,
        "Habilidad" => "No se, no conozca a esta funatuber xD",
        "Imagen" => "https://storage.cloud.google.com/funatubers/TachibanaMitsuki.jpg",
        "Frase Filosofica" => "Se me acabaron als frases filosoficas"
    ],
    [
        "Id" => 9,
        "Nombre" => "Rawberry Preserves",
        "Altura" => 1.54,
        "Habilidad" => "Devorar todo a su paso",
        "Imagen" => "https://storage.cloud.google.com/funatubers/RawberryPreserves.jpg",
        "Frase Filosofica" => "Los insectos son amigos!"
    ],
    [
        "Id" => 10,
        "Nombre" => "Etihw",
        "Altura" => 1.66,
        "Habilidad" => "Ser dios",
        "Imagen" => "https://storage.cloud.google.com/funatubers/Etihw.jpg",
        "Frase Filosofica" => "Somos esencialmente creaturas que fundamentalmente no se pueden comprender la una a la otra."
    ]
];

class FunaController extends Controller
{
    public function info()
    {
        $funa = FUNAS[array_rand(FUNAS, 1)];
        return response()->json([
            "Id" => $funa["Id"],
            "Nombre" => $funa["Nombre"],
            "Altura" => $funa["Altura"],
            "Habilidad" => $funa["Habilidad"]
        ]);
    }

    public function filosoficPhrase()
    {
        $funa = FUNAS[array_rand(FUNAS, 1)];
        return "<img src=\"".$funa["Imagen"]."\"><br><p>".$funa["Frase Filosofica"]."</p><br><p>".gethostbyname(gethostname())."</p>";
    }
}