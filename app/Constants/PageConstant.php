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

    case ABOUT = 'about-us';

    case PORTFOLIO = 'portfolio';

    case BLOGS = 'blogs';

    public function getLabel(): string
    {
        return match ($this) {
            self::HOME => 'Home',
            self::ABOUT => 'About Us',
            self::PORTFOLIO => 'Portfolio',
            self::BLOGS => 'Blogs',
        };
    }
}
