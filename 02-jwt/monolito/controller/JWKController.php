<?php

declare(strict_types = 1);

final class JWKController extends Controller
{
    public function handle(array $request): string
    {
        return $this->jsonResponse(
			[
				"keys" => [
					[
						"kty" => "oct",
						"alg" => "A128KW",
						"k" => "GawgguFyGrWKav7AX4VKUg",
						"kid" => "sim1"
					],
					[
						"kty" => "oct",
						"k" => "AyM1SysPpbyDfgZld3umj1qzKObwVMkoqQ-EstJQLr_T-1qS0gZH75aKtMN3Yj0iPS4hcgUuTwjAzZr1Z9CAow",
						"kid" => "sim2",
						"alg" => "HS256"
					]
				]
			]
		);
	}
}