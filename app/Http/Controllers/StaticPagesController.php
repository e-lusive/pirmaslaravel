<?php namespace App\Http\Controllers;

class StaticPagesController extends Controller
{
   public function displayContact()
   {
    $vardas = ['Darius', 'Petrauskas'];;
//      $vardas = "Darius";
//      $pavarde = "Petrauskas";



      return view( 'staticPages.contact', compact( 'vardas' ) );
   }

   public function displayAbout()
   {
      return view( 'staticPages.about' );
   }

}

/**
 * Created by PhpStorm.
 * User: e.lusive
 * Date: 2015.04.13
 * Time: 13:25
 */