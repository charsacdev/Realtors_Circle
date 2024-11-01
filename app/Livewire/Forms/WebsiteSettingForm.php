<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\WebsiteSetting;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class WebsiteSettingForm extends Form
{
    public $logo;
    public $hero_text;
    public $property_hero_text;
    public $realtor_hero_text;
    public $about;
    public $footer_text;
    public $banner_image;
    public $facebook_link;
    public $instagram_link;
    public $twitter_link;
    public $whatsapp_link;
    public $existing_logo;
    public $existing_banner_image;

    public $rules = [
        'logo' => ['image', 'mime:png,jpg,gif,jpeg'],
        'hero_text' => ['required', 'string'],
        'property_hero_text' => ['required', 'string'],
        'realtor_hero_text' => ['required', 'string'],
        'about' => ['required', 'string'],
        'footer_text' => ['required', 'string'],
        'banner_image' => ['image', 'mime:png,jpg,gif,jpeg'],
        'facebook_link' => ['required', 'url'],
        'instagram_link' => ['required', 'url'],
        'twitter_link' => ['required', 'url'],
        'whatsapp_link' => ['required', 'url'],
    ];

    public $messages = [
        'logo.image' => 'Please provide a valid image',
        'hero_text.required' => 'Please provide a hero text', 
        'property_hero_text.required' => 'Please provide a properties hero text', 
        'realtor_hero_text.required' => 'Please provide a realtors hero text', 
        'footer_text.required' => "Please provide a footer text",
        'banner_image.image' => 'Please provide a valid image',
        'facebook_link.url' => "Please provide a valid url",
        'facebook_link.required' => "Please provide your facebook link",
        'instagram_link.url' =>  "Please provide a valid url",
        'instagram_link.required' =>  "Please provide your instagram link",
        'twitter_link.url' =>  "Please provide a valid url",
        'twitter_link.required' =>  "Please provide your twitter/X link",
        'whatsapp_link.url' => "Please provide a valid url",
        'whatsapp_link.required' => "Please provide your whatsapp link"
    ];


    public function loadSettings($settings)
    {
        $this->hero_text = @$settings->hero_text;
        $this->property_hero_text = @$settings->property_hero_text;
        $this->realtor_hero_text = @$settings->realtor_hero_text;
        $this->about = @$settings->about;
        $this->footer_text = @$settings->footer_text;
        $this->facebook_link = @$settings->facebook_link;
        $this->instagram_link = @$settings->instagram_link;
        $this->twitter_link = @$settings->twitter_link;
        $this->whatsapp_link = @$settings->whatsapp_link;
        $this->existing_logo = @$settings->logo;
        $this->existing_banner_image = @$settings->banner_image;

    }


    public function store($settings)
    {

        // $this->validate($this->rules, $this->messages);
        $user_id = auth('web')->user()->id;

        try{

            /////// Check if user select new logo image ///////////////
            if($this->logo){

                // Check if there is an existing image and delete it
                if ($this->existing_logo && Storage::exists('public/uploads/' . $this->existing_logo)) {
                    Storage::delete('public/uploads/' . $this->existing_logo);
                }

                // Store the new image and retrieve only its name
                $new_logo_path = $this->logo->store('public/uploads');
                $new_logo = basename($new_logo_path);

            }else{

                //set new image to old image if no new image is selected
               $new_logo = @$settings->logo;
            }

  
            /////// Check if user select new banner image ///////////////
            if($this->banner_image){

                // Check if there is an existing image and delete it
                if ($this->existing_banner_image && Storage::exists('public/uploads/' . $this->existing_banner_image)) {
                    Storage::delete('public/uploads/' . $this->existing_banner_image);
                }

                // Store the new image and retrieve only its name
                $new_banner_image_path = $this->banner_image->store('public/uploads');
                $new_banner_image = basename($new_banner_image_path);

            }else{

                //set new image to old image if no new image is selected
               $new_banner_image = @$settings->banner_image;
            }


            ///////////////////// Check if settings exists /////////////////
            $exists = WebsiteSetting::where('user_id', $user_id)->exists();

            if($exists){
                $websettings = WebsiteSetting::where('user_id', $user_id)->first();

            }else{
                $websettings = new WebsiteSetting();
            }

            $details = json_encode([
                "logo" => $new_logo,
                "hero_text" => $this->hero_text,
                "property_hero_text" => $this->property_hero_text,
                "realtor_hero_text" => $this->realtor_hero_text,
                "about" => $this->about,
                "footer_text" => $this->footer_text,
                "banner_image" => $new_banner_image,
                "facebook_link" => $this->facebook_link,
                "instagram_link" => $this->instagram_link,
                "twitter_link" => $this->twitter_link,
                "whatsapp_link" => $this->whatsapp_link,
            ]);

            $websettings->settings = $details;
            $websettings->user_id = $user_id;
            $websettings->save();

            return true;


        }catch(\Exception $e){
            return false;
            // dd($e->getMessage());
            Log::error('website setting update failed: ' . $e->getMessage());
        }
    }


}


/*
{
    "logo": "logo_url_or_path",
    "hero_text": "Welcome to Our Website!",
    "footer_text": "© 2024 Your Company. All rights reserved.",
    "banner_image": "banner_image_url_or_path",
    "facebook_link": "https://facebook.com/yourpage",
    "instagram_link": "https://instagram.com/yourpage",
    "twitter_link": "https://twitter.com/yourpage",
    "whatsapp_link": "https://wa.me/yourwhatsappnumber"
}
*/