<?php

use Carbon\Carbon;
use App\Models\User;
use App\Mail\AdminSendMail;
use Illuminate\Support\Facades\DB;
use App\Mail\BroadcastMessageAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


// Checks for active route
if (!function_exists('isRouteActive')) {
    function isRouteActive(array $routes)
    {
        foreach ($routes as $route) {
            if (Route::is($route)) {
                return 'active';
            }
        }

        return '';
    }
}

// Method to generate a unique slug
if(!function_exists('generateUniqueSlug')){

    function generateUniqueSlug()
    {
        $slug = generateRandomSlug();
    
        // Keep generating new slugs if the one generated already exists
        while (User::where('slug', $slug)->exists()) {
            $slug = generateRandomSlug();
        }
    
        return $slug;
    }
};

if(!function_exists('generateRandomSlug')){

    // Method to generate a random slug with uppercase, lowercase letters, and numbers
    function generateRandomSlug($length = 16)
    {
        // You can customize the character set as needed
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle(str_repeat($characters, $length)), 0, $length);
    }
}




//Formate date to may 1st, 2024 10:00 am
if(!function_exists('formatDate'))
{
    function formatDate($date)
    {
        $d = new DateTime($date);

        // Format the date as "May 1st, 2024 10:00AM"
        $formattedDate = $d->format('F jS, Y g:iA');

        return $formattedDate;
    }
}


//Get the first letter of a string

if(!function_exists('getFirstLetter'))
{
    function getFirstLetter($str)
    {
        $firstLetter = substr($str, 0, 1);

        return $firstLetter;
    }
}


//Time base greeting
if(!function_exists('greetings'))
{
    function greetings() {
        // Get the current hour in 24-hour format
        $hour = date("H");
    
        // Determine the appropriate greeting based on the time of day
        if ($hour >= 0 && $hour <= 11) {
            return "Good Morning!";
        } elseif ($hour >= 12 && $hour < 16) {
            return "Good Afternoon!";
        } elseif ($hour >= 16 && $hour <= 23) {
            return "Good Evening!";
        }else{
            return "Good Night!";
        }
    }
}


// Custom function to generate fake video URLs
if(!function_exists('fakeVideoUrl'))
{

    function fakeVideoUrl() {
        $videoIds = [
            'dQw4w9WgXcQ', // Sample YouTube video ID
            '3JZ_D3ELwOQ',
            'eYq7WapuDLU',
            'tVj0ZTS4WF4',
        ];
        
        // Randomly select a video ID
        $randomVideoId = $videoIds[array_rand($videoIds)];
    
        // Return a fake YouTube video URL
        return "https://www.youtube.com/watch?v=" . $randomVideoId;
    }
}



if(!function_exists('fakePropertyName'))
{
    // Function to generate a random property name (building or land)
    function fakePropertyName($faker) {
        // Arrays for building-related terms
        $roomTypes = ['flat', 'apartment', 'penthouse', 'studio', 'condo', 'duplex'];
        $buildingDescriptions = ['spacious', 'luxury', 'modern', 'cozy', 'affordable', 'elegant'];
        
        // Arrays for land-related terms
        $landSizes = ['plot', 'hectare', 'acre'];
        
        // Randomly decide if the property is a building or land
        $isBuilding = $faker->boolean(70); // 70% chance of being a building
    
        if ($isBuilding) {
            // Generate building property
            $rooms = $faker->numberBetween(1, 5); // e.g., 1 to 5-bedroom
            $roomType = $roomTypes[array_rand($roomTypes)];
            $description = $buildingDescriptions[array_rand($buildingDescriptions)];
            $property = "$rooms-bedroom $description $roomType";
    
            return ['property' => $property, 'type' => 'building'];
        } else {
            // Generate land property
            $landQuantity = $faker->numberBetween(1, 10); // e.g., 1 to 10 plots/hectares
            $landSize = $landSizes[array_rand($landSizes)];
            $property = "$landQuantity $landSize" . ($landQuantity > 1 ? 's' : '') . " of land";
    
            return ['property' => $property, 'type' => 'land'];
        }
    }
}



if(!function_exists('randomImageUrls'))
{
    // Function to generate an array of random image URLs based on the specified category
    function randomImageUrls($faker, $count = 5, $category = 'nature') {
        $imageUrls = [];
        for ($i = 0; $i < $count; $i++) {
            // Generate random image URL based on the provided category
            $imageUrls[$i] = $faker->imageUrl(640, 480, $category, true); // Dynamic category
        }
       
        return json_encode(['images' => $imageUrls]);
    }
}


if(!function_exists('randomPexelsVideoUrls'))
{
    // Function to generate an array of random Pexels video URLs based on the specified category
    function randomPexelsVideoUrls($faker, $count = 5, $category = 'land') {
        // Define arrays of actual Pexels video URLs for each category
        $landVideos = [
            "https://www.pexels.com/video/landscape-nature-802776/", // Beautiful Landscape
            "https://www.pexels.com/video/landscape-with-mountains-1975647/", // Mountainous Land
            "https://www.pexels.com/video/time-lapse-of-crops-growing-4535800/", // Crops Growing
            "https://www.pexels.com/video/aerial-view-of-farm-fields-2994175/", // Aerial View of Farm
            "https://www.pexels.com/video/aerial-shot-of-farm-fields-2023738/" // Aerial View of Fields
        ];

        $buildingVideos = [
            "https://www.pexels.com/video/modern-office-building-3501247/", // Modern Office Building
            "https://www.pexels.com/video/aerial-shot-of-a-modern-building-3195124/", // Aerial Shot of Building
            "https://www.pexels.com/video/timelapse-of-building-under-construction-2566224/", // Building Under Construction
            "https://www.pexels.com/video/aerial-view-of-modern-skyscraper-2609568/", // Aerial View of Skyscraper
            "https://www.pexels.com/video/modern-building-in-the-city-2122063/" // Modern Building in City
        ];

        // Select the appropriate array based on the category
        $videoUrls = ($category === 'buildings') ? $buildingVideos : $landVideos;

        // Shuffle the array and select the specified count of unique video URLs
        shuffle($videoUrls);
        $data = array_slice($videoUrls, 0, $count);
        $json = json_encode(['videos' => $data]);

        return $json;
    }


}

//Return the appropriate notification url for all users
if(!function_exists('getNotificationUrl'))
{
    function getNotificationUrl($type, $id)
    {
        $user_role = auth('web')->user()->role;
        
        if($type == 'realtor-application')
        {
            if($user_role == 'agency'){

                return route('agency.realtors-application', $id);
            }
        }elseif($type == 'booking')
        {
            if($user_role == 'realtor'){

                return route('realtor.customer-schedule-details', $id);

            }elseif($user_role == 'agency'){

                return route('agency.message-inquiry', $id);
            }
            
        }elseif($type == 'new-customer')
        {
            if($user_role == 'realtor'){

                return route('realtor.customer-details', $id);

            }elseif($user_role == 'agency'){

                return route('agency.customers-details', $id);
            }
        }elseif($type == 'new-user')
        {
            if($user_role == 'admin'){

                return route('admin.user', $id);
            }

        }elseif($type == 'new-agency')
        {
            if($user_role == 'admin')
            {
                return route('admin.agency', $id);
            }
        }
    }
}


//Returns the percentage change of this month record compared to last month
if(!function_exists('percentageChange'))
{
    function percentageChange($table, $status = null, $status_column = null, $id = null, $id_column = null)
    {
        // Get the current date and the start of this month and last month
        $thisMonthStart = Carbon::now()->startOfMonth();
        $lastMonthStart = Carbon::now()->subMonth()->startOfMonth();
        $lastMonthEnd = Carbon::now()->subMonth()->endOfMonth();

        // Query to get the count of available properties this month
        if($status == null){
            if($id == null){
                $thisMonthCount = DB::table($table)
                ->whereDate('created_at', '>=', $thisMonthStart)
                ->count();
        
                // Query to get the count of available properties last month
                $lastMonthCount = DB::table($table)
                ->whereBetween('created_at', [$lastMonthStart, $lastMonthEnd])
                ->count();
            }else{
                $thisMonthCount = DB::table($table)
                ->where($id_column, $id)
                ->whereDate('created_at', '>=', $thisMonthStart)
                ->count();
        
                // Query to get the count of available properties last month
                $lastMonthCount = DB::table($table)
                ->where($id_column, $id)
                ->whereBetween('created_at', [$lastMonthStart, $lastMonthEnd])
                ->count();
            } 
        }else{
            if($id == null){

                $thisMonthCount = DB::table($table)
                ->where($status_column, $status)
                ->whereDate('created_at', '>=', $thisMonthStart)
                ->count();
        
                // Query to get the count of available properties last month
                $lastMonthCount = DB::table($table)
                ->where($status_column, $status)
                ->whereBetween('created_at', [$lastMonthStart, $lastMonthEnd])
                ->count();

            }else{

                $thisMonthCount = DB::table($table)
                ->where($status_column, $status)
                ->where($id_column, $id)
                ->whereDate('created_at', '>=', $thisMonthStart)
                ->count();
        
                // Query to get the count of available properties last month
                $lastMonthCount = DB::table($table)
                ->where($status_column, $status)
                ->where($id_column, $id)
                ->whereBetween('created_at', [$lastMonthStart, $lastMonthEnd])
                ->count();

            }
            
            
        }


        // Calculate percentage change
        if ($lastMonthCount == 0) {
            $percentageChange = $thisMonthCount > 0 ? 100 : 0;  // Handle division by zero if last month was 0
        } else {
            $percentageChange = (($thisMonthCount - $lastMonthCount) / $lastMonthCount) * 100;
        }

        return $percentageChange;
    }
}



// Function to clean the Summernote content
if(!function_exists('cleanContent')){
    function cleanContent($content)
    {
        // Check if the content is just "<p><br></p>" and return an empty string if so
        if (trim($content) === '<p><br></p>') {
            return '';
        }
        return $content;
    }
}

//Function to send a mail to a single email
if(!function_exists('adminSendMail'))
{
    function adminSendMail($thisObj, $content, $email, $username, $subject, $company_name = null)
    {
        $content = cleanContent($content);

        $thisObj->validate();

        //Check if there's email
        if($email){

            //Check that the mail was sent
            try{

                Mail::to($email)->send(new AdminSendMail($username, $content, $subject, $company_name));
                $thisObj->dispatch('success', ['message' => 'Mail sent successfully!.']);
                $thisObj->dispatch('resetEditor');
                $thisObj->reset(['subject', 'channel']);
                return true;

            }catch(\Exception $e){
                $thisObj->dispatch('failure', ['message' => 'Mail not sent, please try again.']);
            }

        }else{
            $thisObj->dispatch('failure', ['message' => 'No email address found.']);
        }
    }
}

//Function to send a mail to multiple emails
if(!function_exists('adminSendBroadcastMail'))
{
    function adminsendBroadcastMail($thisObj, $message, $subject, $users)
    {
        $message = cleanContent($message);

        $thisObj->validate($thisObj->rules, $thisObj->messages);

        if(!empty($users)){
            try{
                foreach($users as $user)
                {
                    if($user->email){
                        Mail::to($user->email)->send(new BroadcastMessageAdmin("$user->first_name $user->last_name", $message, $subject));
                    }
                }
        
                $thisObj->dispatch('success', ['message' => 'Mail sent successfully!.']);
                $thisObj->dispatch('resetEditor');
                $thisObj->reset(['subject', 'channel']);

            }catch(\Exception $e){

                $thisObj->dispatch('failure', ['message' => 'Something went wrong, please try again.']);
            }

           
        }else{
            $thisObj->dispatch('failure', ['message' => 'No email found.']);
        }
    }
}


// Helper function to get ordinal suffixes (e.g., "1st", "2nd", "3rd", etc.)
if(!function_exists('getOdinal'))
{
    function getOrdinal($number)
    {
        $ends = ['th', 'st', 'nd', 'rd', 'th', 'th', 'th', 'th', 'th', 'th'];
        if ((($number % 100) >= 11) && (($number % 100) <= 13)) {
            return $number . 'th';
        }
        return $number . $ends[$number % 10];
    }
}



//function to generate random 6digit numbers
if(!function_exists('randomSixDigits'))
{
    function randomSixDigits()
    {
        // Generate an array of numbers from 1 to 100
        $numbers = range(0, 9);

        // Shuffle the array to randomize the order
        shuffle($numbers);

        // Get the first 6 unique numbers
        $randomNumbers = array_slice($numbers, 0, 6);

        // Convert the array of numbers to a single string
        $randomString = implode('', $randomNumbers);

        // Output the random string
        return $randomString;
    }
}

        

