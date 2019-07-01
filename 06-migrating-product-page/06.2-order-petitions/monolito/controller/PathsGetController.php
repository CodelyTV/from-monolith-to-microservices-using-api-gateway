<?php

declare(strict_types = 1);

final class PathsGetController extends Controller
{
    private const PATHS = [
        '77070' => [
            [
                'title'   => 'Qué son los principios SOLID (Huyendo de STUPID) 🦄 - ¡Disponible sin registro! 💸',
                'visible' => true,
                'order'   => 1,
            ],
            [
                'title'   => 'UML, ese gran denostado 🤕',
                'visible' => true,
                'order'   => 2,
            ],
            [
                'title'   => 'Principio de Responsabilidad Única 🕺',
                'visible' => true,
                'order'   => 3,
            ],
        ],
        '66748' => [
            [
                'title'   => 'Bienvenida al curso 👋 ¡Disponible sin registro! 💸',
                'visible' => true,
                'order'   => 1,
            ],
            [
                'title'   => 'Qué es la Arquitectura de Software 💎',
                'visible' => true,
                'order'   => 2,
            ],
            [
                'title'   => 'Qué es la Arquitectura Hexagonal ⬢',
                'visible' => true,
                'order'   => 3,
            ],
        ],
        '90916' => [
            [
                'title'   => '🤔 ¿Qué es el testing y qué aporta? ¿Por qué deberíamos testear? - Disponible sin registro',
                'visible' => true,
                'order'   => 1,
            ],
            [
                'title'   => '🚀 ¡Al turrón!: Nuestros primeros tests',
                'visible' => true,
                'order'   => 2,
            ],
            [
                'title'   => '🌀 Exprimiendo nuestro framework de testing (PHP, Java, JavaScript, y Scala)',
                'visible' => true,
                'order'   => 3,
            ],
        ],
        '87157' => [
            [
                'title'   => '👋 DDD en 20 minutos - Disponible sin registro',
                'visible' => true,
                'order'   => 1,
            ],
            [
                'title'   => '🚀 Bounded Contexts, subdomains y modules: Creando nuestra aplicación',
                'visible' => true,
                'order'   => 2,
            ],
            [
                'title'   => '🎯 Arquitectura Hexagonal',
                'visible' => true,
                'order'   => 3,
            ],
        ],
    ];

    public function handle(array $request): string
    {
        if (!isset($request['course_id'])) {
            return $this->jsonResponse(self::PATHS);
        }

        if (!isset(self::PATHS[$request['course_id']])) {
            return $this->jsonResponse([]);
        }

        return $this->jsonResponse(self::PATHS[$request['course_id']]);
    }
}
