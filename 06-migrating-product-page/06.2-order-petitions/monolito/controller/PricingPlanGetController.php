<?php

declare(strict_types = 1);

final class PricingPlanGetController extends Controller
{
    public const ALL_PRICING_PLANS = [
        '4c5be45d-799b-49c5-93bc-859a832a2a65' => [
            'id'                  => '4c5be45d-799b-49c5-93bc-859a832a2a65',
            'name'                => 'Standard',
            'monthly_cost_in_eur' => 29,
        ],
        'f1f62b61-e123-434f-99ff-4c64d7f34f3b' => [
            'id'                  => 'f1f62b61-e123-434f-99ff-4c64d7f34f3b',
            'name'                => 'Premium',
            'monthly_cost_in_eur' => 49,
        ],
    ];

    public function handle(array $request): string
    {
        if (!$this->hasResourceId($request)) {
            $this->notFoundResponse('You should pass the pricing plan id');
        }

        $pricingPlanId = $this->resourceId($request);

        return isset(self::ALL_PRICING_PLANS[$pricingPlanId])
            ? $this->jsonResponse(self::ALL_PRICING_PLANS[$pricingPlanId])
            : $this->notFoundResponse("The pricing plan `$pricingPlanId` doesn't exist");
    }
}
