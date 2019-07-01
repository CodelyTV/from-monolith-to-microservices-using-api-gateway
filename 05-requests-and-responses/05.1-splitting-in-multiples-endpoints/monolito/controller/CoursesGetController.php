<?php

declare(strict_types = 1);

final class CoursesGetController extends Controller
{
    public function handle(array $request): string
    {
        return $this->jsonResponse(
            [
                [
                    'id'        => '77070',
                    'title'     => 'Principios SOLID aplicados',
                    'thumbnail' => 'https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2FLfssR9kbRqyx2LaCMxp5%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?dpr=2&fit=crop&h=232&ixlib=python-1.1.0&w=310&s=b387f292e2d8ac9cd4509923c3148971',
                    'url'       => 'https://pro.codely.tv/library/principios-solid-aplicados/77070/about/',
                    'authors'   => ['b4b9ee99-8290-4064-8e3c-e4fd925fe0b9', '39402ea6-d5a0-4466-918d-e5eef75cc8a9'],
                ],
                [
                    'id'        => '66748',
                    'title'     => 'Arquitectura Hexagonal',
                    'thumbnail' => 'https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2FDYWJYE5RMC0bkd8nCp0u%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?dpr=2&fit=crop&h=232&ixlib=python-1.1.0&w=310&s=20ec61abaa2b3bcb181b06d9cd5fa5da',
                    'url'       => 'https://pro.codely.tv/library/arquitectura-hexagonal/66748/about/',
                    'authors'   => ['b4b9ee99-8290-4064-8e3c-e4fd925fe0b9', '39402ea6-d5a0-4466-918d-e5eef75cc8a9'],
                ],
                [
                    'id'        => '90916',
                    'title'     => 'Testing: Introducción y buenas prácticas',
                    'thumbnail' => 'https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2Fb3pxykWKS8auYDKgo0fg%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?dpr=2&fit=crop&h=232&ixlib=python-1.1.0&w=310&s=c0b219bd939f156a11ed42f3f5439852',
                    'url'       => 'https://pro.codely.tv/library/testing-introduccion-y-buenas-practicas/90916/about/',
                    'authors'   => ['b4b9ee99-8290-4064-8e3c-e4fd925fe0b9', '39402ea6-d5a0-4466-918d-e5eef75cc8a9'],
                ],
                [
                    'id'        => '87157',
                    'title'     => 'Domain-Driven Design - DDD Aplicado',
                    'thumbnail' => 'https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2F057B1vhnSuihianWMp0j%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?dpr=2&fit=crop&h=232&ixlib=python-1.1.0&w=310&s=30bd263228ec0c543b2d66ec314d978d',
                    'url'       => 'https://pro.codely.tv/library/domain-driven-design-ddd/87157/about/',
                    'authors'   => ['b4b9ee99-8290-4064-8e3c-e4fd925fe0b9', '39402ea6-d5a0-4466-918d-e5eef75cc8a9'],
                ]
            ]
        );
    }
}
