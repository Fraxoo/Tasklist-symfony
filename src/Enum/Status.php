<?php



namespace App\Enum;

enum Status: string
{
    case pending = "En attente";
    case completed = "Fini";
    case archived = "Archivé";
}
