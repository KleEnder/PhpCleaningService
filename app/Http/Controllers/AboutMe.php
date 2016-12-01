<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMe extends Controller
{
    public function addTitle() {
        return view('about-me', ['title' => 'About me blog page'
            ,'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Quisque lorem augue, efficitur vitae nibh vitae, tincidunt mattis 
            metus. Pellentesque dictum, libero at fermentum faucibus, turpis 
            risus tincidunt leo, iaculis fermentum dui est id tellus. Nullam 
            sollicitudin feugiat neque, nec maximus sapien rutrum vel. Praesent
            et ipsum mi. Vivamus eget tellus a mi cursus feugiat dapibus sed 
            sapien. Suspendisse suscipit sit amet elit et bibendum. Donec 
            consectetur nibh sit amet turpis luctus, in commodo justo dapibus. 
            Quisque in augue a orci pretium egestas eu id sapien. Sed id nulla 
            viverra, eleifend purus vel, ultrices magna. Quisque id tellus orci. 
            Pellentesque habitant morbi tristique senectus et netus et malesuada 
            fames ac turpis egestas. Maecenas congue nisl eu felis rhoncus dignissim. 
            Morbi aliquet tellus ut vehicula ultricies. Vestibulum ante ipsum primis 
            in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent luctus 
            dictum ligula, eu tempor diam semper sed. Phasellus eu ultrices massa.', 'text2' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Quisque lorem augue, efficitur vitae nibh vitae, tincidunt mattis 
            metus. Pellentesque dictum, libero at fermentum faucibus, turpis 
            risus tincidunt leo, iaculis fermentum dui est id tellus. Nullam 
            sollicitudin feugiat neque, nec maximus sapien rutrum vel. Praesent
            et ipsum mi. Vivamus eget tellus a mi cursus feugiat dapibus sed 
            sapien. Suspendisse suscipit sit amet elit et bibendum. Donec 
            consectetur nibh sit amet turpis luctus, in commodo justo dapibus. 
            Quisque in augue a orci pretium egestas eu id sapien. Sed id nulla 
            viverra, eleifend purus vel, ultrices magna. Quisque id tellus orci. 
            Pellentesque habitant morbi tristique senectus et netus et malesuada 
            fames ac turpis egestas. Maecenas congue nisl eu felis rhoncus dignissim. 
            Morbi aliquet tellus ut vehicula ultricies. Vestibulum ante ipsum primis 
            in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent luctus 
            dictum ligula, eu tempor diam semper sed. Phasellus eu ultrices massa.',
            'text3' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Quisque lorem augue, efficitur vitae nibh vitae, tincidunt mattis 
            metus. Pellentesque dictum, libero at fermentum faucibus, turpis 
            risus tincidunt leo, iaculis fermentum dui est id tellus. Nullam 
            sollicitudin feugiat neque, nec maximus sapien rutrum vel. Praesent
            et ipsum mi. Vivamus eget tellus a mi cursus feugiat dapibus sed 
            sapien. Suspendisse suscipit sit amet elit et bibendum. Donec 
            consectetur nibh sit amet turpis luctus, in commodo justo dapibus. 
            Quisque in augue a orci pretium egestas eu id sapien. Sed id nulla 
            viverra, eleifend purus vel, ultrices magna. Quisque id tellus orci. 
            Pellentesque habitant morbi tristique senectus et netus et malesuada 
            fames ac turpis egestas. Maecenas congue nisl eu felis rhoncus dignissim. 
            Morbi aliquet tellus ut vehicula ultricies. Vestibulum ante ipsum primis 
            in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent luctus 
            dictum ligula, eu tempor diam semper sed. Phasellus eu ultrices massa.']);
    }
}
