<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// Base repositories already autoloaded via PSR-4
// Contracts
use App\Repositories\Contracts\AboutRepositoryInterface;
use App\Repositories\Contracts\AboutGoalsRepositoryInterface;
use App\Repositories\Contracts\AboutValuesRepositoryInterface;
use App\Repositories\Contracts\BlogRepositoryInterface;
use App\Repositories\Contracts\BlogCategoryRepositoryInterface;
use App\Repositories\Contracts\BlogFileRepositoryInterface;
use App\Repositories\Contracts\ContactAddressRepositoryInterface;
use App\Repositories\Contracts\ContactMessageRepositoryInterface;
use App\Repositories\Contracts\ContactSettingRepositoryInterface;
use App\Repositories\Contracts\ContactSocialRepositoryInterface;
use App\Repositories\Contracts\DonationRepositoryInterface;
use App\Repositories\Contracts\DonationBankRepositoryInterface;
use App\Repositories\Contracts\DonationMobileRepositoryInterface;
use App\Repositories\Contracts\GeneralRepositoryInterface;
use App\Repositories\Contracts\HomeRepositoryInterface;
use App\Repositories\Contracts\HomeCarouselRepositoryInterface;
use App\Repositories\Contracts\ImageRepositoryInterface;
use App\Repositories\Contracts\ImageCategoryRepositoryInterface;
use App\Repositories\Contracts\PartnerRepositoryInterface;
use App\Repositories\Contracts\TeamRepositoryInterface;
use App\Repositories\Contracts\VideoRepositoryInterface;
use App\Repositories\Contracts\VideoCategoryRepositoryInterface;
use App\Repositories\Contracts\AreaIntroRepositoryInterface;
use App\Repositories\Contracts\AreaRepositoryInterface;
// Eloquent implementations
use App\Repositories\Eloquent\AboutRepository;
use App\Repositories\Eloquent\AboutGoalsRepository;
use App\Repositories\Eloquent\AboutValuesRepository;
use App\Repositories\Eloquent\BlogRepository;
use App\Repositories\Eloquent\BlogCategoryRepository;
use App\Repositories\Eloquent\BlogFileRepository;
use App\Repositories\Eloquent\ContactAddressRepository;
use App\Repositories\Eloquent\ContactMessageRepository;
use App\Repositories\Eloquent\ContactSettingRepository;
use App\Repositories\Eloquent\ContactSocialRepository;
use App\Repositories\Eloquent\DonationRepository;
use App\Repositories\Eloquent\DonationBankRepository;
use App\Repositories\Eloquent\DonationMobileRepository;
use App\Repositories\Eloquent\GeneralRepository;
use App\Repositories\Eloquent\HomeRepository;
use App\Repositories\Eloquent\HomeCarouselRepository;
use App\Repositories\Eloquent\ImageRepository;
use App\Repositories\Eloquent\ImageCategoryRepository;
use App\Repositories\Eloquent\PartnerRepository;
use App\Repositories\Eloquent\TeamRepository;
use App\Repositories\Eloquent\VideoRepository;
use App\Repositories\Eloquent\VideoCategoryRepository;
use App\Repositories\Eloquent\AreaIntroRepository;
use App\Repositories\Eloquent\AreaRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Bind all repository interfaces to their Eloquent implementations
        $this->app->bind(AboutRepositoryInterface::class, AboutRepository::class);
        $this->app->bind(AboutGoalsRepositoryInterface::class, AboutGoalsRepository::class);
        $this->app->bind(AboutValuesRepositoryInterface::class, AboutValuesRepository::class);
        $this->app->bind(BlogRepositoryInterface::class, BlogRepository::class);
        $this->app->bind(BlogCategoryRepositoryInterface::class, BlogCategoryRepository::class);
        $this->app->bind(BlogFileRepositoryInterface::class, BlogFileRepository::class);
        $this->app->bind(ContactAddressRepositoryInterface::class, ContactAddressRepository::class);
        $this->app->bind(ContactMessageRepositoryInterface::class, ContactMessageRepository::class);
        $this->app->bind(ContactSettingRepositoryInterface::class, ContactSettingRepository::class);
        $this->app->bind(ContactSocialRepositoryInterface::class, ContactSocialRepository::class);
        $this->app->bind(DonationRepositoryInterface::class, DonationRepository::class);
        $this->app->bind(DonationBankRepositoryInterface::class, DonationBankRepository::class);
        $this->app->bind(DonationMobileRepositoryInterface::class, DonationMobileRepository::class);
        $this->app->bind(GeneralRepositoryInterface::class, GeneralRepository::class);
        $this->app->bind(HomeRepositoryInterface::class, HomeRepository::class);
        $this->app->bind(HomeCarouselRepositoryInterface::class, HomeCarouselRepository::class);
        $this->app->bind(ImageRepositoryInterface::class, ImageRepository::class);
        $this->app->bind(ImageCategoryRepositoryInterface::class, ImageCategoryRepository::class);
        $this->app->bind(PartnerRepositoryInterface::class, PartnerRepository::class);
        $this->app->bind(TeamRepositoryInterface::class, TeamRepository::class);
        $this->app->bind(VideoRepositoryInterface::class, VideoRepository::class);
        $this->app->bind(VideoCategoryRepositoryInterface::class, VideoCategoryRepository::class);
        $this->app->bind(AreaIntroRepositoryInterface::class, AreaIntroRepository::class);
        $this->app->bind(AreaRepositoryInterface::class, AreaRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
