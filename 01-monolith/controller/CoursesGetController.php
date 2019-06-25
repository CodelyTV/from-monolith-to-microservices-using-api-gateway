<?php

declare(strict_types = 1);

final class CoursesGetController extends Controller
{
    private const AUTHORS = [
        'b4b9ee99-8290-4064-8e3c-e4fd925fe0b9' => [
            'name'      => 'Javier Ferrer',
            'thumbnail' => 'https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2FCERdtqBcSWe4hKpoUeoz%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?crop=faces&fit=crop&h=250&ixlib=python-1.1.0&w=250&s=1f5c7a1eda9180240c52901a24af43df',
        ],
        '39402ea6-d5a0-4466-918d-e5eef75cc8a9' => [
            'name'      => 'Rafa Gómez',
            'thumbnail' => 'https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2FSkO7YnieTieDgWfev170%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?crop=faces&fit=crop&h=250&ixlib=python-1.1.0&w=250&s=3a11c0499b9dc9f31168e1b0285fb664',
        ],
        '6a8344bc-d527-4100-a83a-d2bb298fdbf7' => [
            'name'      => 'Jose Armesto',
            'thumbnail' => 'https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2Fc9nWZL8TlquzsW6So1jV%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?crop=faces&fit=crop&h=250&ixlib=python-1.1.0&w=250&s=9a6d348c3efd4df8f5076ff984f18d68',
        ],
        '9ebe81d3-0dd6-48d2-9e3a-2d60fd348b29' => [
            'name'      => 'Ramón Aranda',
            'thumbnail' => 'https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2F1v8Hwh0QgKLsQGBvzZ0h%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?crop=faces&fit=crop&h=250&ixlib=python-1.1.0&w=250&s=e06740a20d79cdd416391d028daf3457',
        ],
        'ce4a0077-2062-49f9-aaeb-a09ac3888f31' => [
            'name'      => 'Jordi Llonch',
            'thumbnail' => 'https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2FzzKesprROSzkyK8iwAbn%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?crop=faces&fit=crop&h=250&ixlib=python-1.1.0&w=250&s=0179a7c0e20f2e989393ddd2a95e5f80',
        ],
    ];

    private const COURSES = [
        '77070' => [
            'title'     => 'Principios SOLID aplicados',
            'thumbnail' => 'https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2FLfssR9kbRqyx2LaCMxp5%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?dpr=2&fit=crop&h=232&ixlib=python-1.1.0&w=310&s=b387f292e2d8ac9cd4509923c3148971',
            'url'       => 'https://pro.codely.tv/library/principios-solid-aplicados/77070/about/',
            'authors'   => [
                self::AUTHORS['b4b9ee99-8290-4064-8e3c-e4fd925fe0b9'],
                self::AUTHORS['39402ea6-d5a0-4466-918d-e5eef75cc8a9'],
            ],
            'path'      => [
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
            ]
        ],
        '66748' => [
            'title'     => 'Arquitectura Hexagonal',
            'thumbnail' => 'https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2FDYWJYE5RMC0bkd8nCp0u%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?dpr=2&fit=crop&h=232&ixlib=python-1.1.0&w=310&s=20ec61abaa2b3bcb181b06d9cd5fa5da',
            'url'       => 'https://pro.codely.tv/library/arquitectura-hexagonal/66748/about/',
            'authors'   => [
                self::AUTHORS['b4b9ee99-8290-4064-8e3c-e4fd925fe0b9'],
                self::AUTHORS['39402ea6-d5a0-4466-918d-e5eef75cc8a9'],
            ],
            'path'      => [
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
            ]
        ],
        '90916' => [
            'title'     => 'Testing: Introducción y buenas prácticas',
            'thumbnail' => 'https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2Fb3pxykWKS8auYDKgo0fg%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?dpr=2&fit=crop&h=232&ixlib=python-1.1.0&w=310&s=c0b219bd939f156a11ed42f3f5439852',
            'url'       => 'https://pro.codely.tv/library/testing-introduccion-y-buenas-practicas/90916/about/',
            'authors'   => [
                self::AUTHORS['b4b9ee99-8290-4064-8e3c-e4fd925fe0b9'],
                self::AUTHORS['39402ea6-d5a0-4466-918d-e5eef75cc8a9'],
            ],
            'path'      => [
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
            ]
        ],
        '87157' => [
            'title'     => 'Domain-Driven Design - DDD Aplicado',
            'thumbnail' => 'https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2F057B1vhnSuihianWMp0j%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?dpr=2&fit=crop&h=232&ixlib=python-1.1.0&w=310&s=30bd263228ec0c543b2d66ec314d978d',
            'url'       => 'https://pro.codely.tv/library/domain-driven-design-ddd/87157/about/',
            'authors'   => [
                self::AUTHORS['b4b9ee99-8290-4064-8e3c-e4fd925fe0b9'],
                self::AUTHORS['39402ea6-d5a0-4466-918d-e5eef75cc8a9'],
            ],
            'path'      => [
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
            ]
        ],
    ];

    public function handle(array $request): string
    {
        if (!isset($request['course_id'])) {
            return $this->jsonResponse(self::COURSES);
        }

        if (!isset(self::COURSES[$request['course_id']])) {
            return $this->jsonResponse([]);
        }

        return $this->jsonResponse(self::COURSES[$request['course_id']]);
    }
}
