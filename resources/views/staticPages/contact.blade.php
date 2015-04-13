@extends('staticPages.gui')

@section( 'content')
   <div class="container">
      <div class="content">
         <div class="title">Contact me!</div>
         <div class="quote">Author:</div>
         <ul>
            <?php
                 if ( array_count_values( $vardas ) > 0 )
               foreach ( $vardas as $elementas )
                  echo "<li>$elementas</li>";
            ?>

         </ul>
      </div>
   </div>
@stop

@section( 'footer' )
   <script>alert( 'Haha' );</script>

@stop
@section( 'links')
   <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
@stop