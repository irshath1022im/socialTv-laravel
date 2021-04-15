<?php

namespace App\Http\Livewire;

use App\Ads;
use Livewire\Component;

class HomePageSocialAds extends Component
{
    public function render()
    {

        $ads = Ads::get();
        return view('livewire.home-page-social-ads',['ads' =>$ads]);
    }
}
