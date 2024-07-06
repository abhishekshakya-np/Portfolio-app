<?php

namespace App\Constants;

use Filament\Support\Contracts\HasLabel;

/**
 * this is directly based of file publicwp.php
 * use in ElementResource for preview
 */
enum PageConstant: string implements HasLabel
{
    case HOME = 'home';
    case PRODUCT = 'product';
    case ABOUTUS = 'about-us';
    case FAQ = 'faq';

    public function getLabel(): string
    {
        return match ($this) {
            self::HOME => 'Home',
            self::PRODUCT => 'Product',
            self::ABOUTUS => 'About Us',
            self::FAQ => 'FAQ',
        };
    }
}
