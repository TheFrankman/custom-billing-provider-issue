<?php

namespace App\Providers;

use App\Http\Middleware\RedirectIfOrganisationNotSubscribed;
use Filament\Billing\Providers\Contracts\Provider;

class CustomBillingProvider implements Provider
{
    public function getRouteAction(): string
    {
        return route('filament.admin.pages.subscription-management');
    }

    public function getSubscribedMiddleware(): string
    {
        return RedirectIfOrganisationNotSubscribed::class;
    }
}
