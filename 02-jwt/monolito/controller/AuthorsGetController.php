<?php

declare(strict_types = 1);

final class AuthorsGetController extends Controller
{
    public function handle(array $request): string
    {
        return $this->jsonResponse(
            [
                [
                    'id'        => 'b4b9ee99-8290-4064-8e3c-e4fd925fe0b9',
                    'name'      => 'Javier Ferrer',
                    'thumbnail' => 'https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2FCERdtqBcSWe4hKpoUeoz%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?crop=faces&fit=crop&h=250&ixlib=python-1.1.0&w=250&s=1f5c7a1eda9180240c52901a24af43df',
                ],
                [
                    'id'        => '39402ea6-d5a0-4466-918d-e5eef75cc8a9',
                    'name'      => 'Rafa Gómez',
                    'thumbnail' => 'https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2FSkO7YnieTieDgWfev170%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?crop=faces&fit=crop&h=250&ixlib=python-1.1.0&w=250&s=3a11c0499b9dc9f31168e1b0285fb664',
                ],
                [
                    'id'        => '6a8344bc-d527-4100-a83a-d2bb298fdbf7',
                    'name'      => 'Jose Armesto',
                    'thumbnail' => 'https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2Fc9nWZL8TlquzsW6So1jV%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?crop=faces&fit=crop&h=250&ixlib=python-1.1.0&w=250&s=9a6d348c3efd4df8f5076ff984f18d68',
                ],
                [
                    'id'        => '9ebe81d3-0dd6-48d2-9e3a-2d60fd348b29',
                    'name'      => 'Ramón Aranda',
                    'thumbnail' => 'https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2F1v8Hwh0QgKLsQGBvzZ0h%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?crop=faces&fit=crop&h=250&ixlib=python-1.1.0&w=250&s=e06740a20d79cdd416391d028daf3457',
                ],
                [
                    'id'        => 'ce4a0077-2062-49f9-aaeb-a09ac3888f31',
                    'name'      => 'Jordi Llonch',
                    'thumbnail' => 'https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2FzzKesprROSzkyK8iwAbn%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?crop=faces&fit=crop&h=250&ixlib=python-1.1.0&w=250&s=0179a7c0e20f2e989393ddd2a95e5f80',
                ],
            ]
        );
    }
}
