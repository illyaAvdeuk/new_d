<!DOCTYPE html>
<html>
  <head>
    <title>jCoverflip Test</title>
    
    <link rel="stylesheet" href="https://www.newsignature.com/wp-content/jcoverflip/jcoverflip-demo/jquery-ui-1.7.2/css/ui-lightness/jquery-ui-1.7.2.custom.css" type="text/css" media="all" />
    <style>
      .ui-jcoverflip {
        position: relative;
      }
      
      .ui-jcoverflip--item {
        position: absolute;
        display: block;
      }
      
      /* Basic sample CSS */
      #flip {
        height: 350px;
        border: solid 1px #666;
      }
      
      #flip .ui-jcoverflip--title {
        position: absolute;
        top: 0;
        width: 100%;
        text-align: center;
      }
      
      #flip img {
        display: block;
      }
      
      
      
      
      
      
      body {
        font-family: Arial, sans-serif;
        min-width: 850px;
      }
      
      #controls {
        position: relative;
        background-color: white;
        float: left;
        width: 35%;
      }
      
      #console-table {
        float: right;
        width: 64%;
        padding: 0;
        margin: 0;
        border-collapse: collapse;
        font-size: 11px;
      }
      
      #console-table th {
        padding: 2px;
        background-color: #eee;
        text-align: left;
      }
      
      #console-table td {
        border-width: 0 1px 1px;
        border-color: #ddd #eee;
        border-style: solid;
        padding: 2px;
      }
    </style>
    
    <script type="text/javascript" src="https://www.newsignature.com/wp-content/jcoverflip/jcoverflip-demo/jquery-1.3.2.js"></script>
    <script type="text/javascript" src="https://www.newsignature.com/wp-content/jcoverflip/jcoverflip-demo/jquery-ui-1.7.2/development-bundle/ui/jquery-ui-1.7.2.custom.js"></script>
    <script type="text/javascript" src="https://www.newsignature.com/wp-content/jcoverflip/jcoverflip-demo/jquery.jcoverflip.js"></scrip>
    
    <script>
    function timestamp( ){
      var d = new Date( );
      var ms = d.getMilliseconds( ).toString( );
      while( ms.length < 3 ){
        ms = '0'+ms;
      }
      
      var s = d.getSeconds( ).toString( );
      while( s.length < 2 ){
        s = '0'+s;
      }
      
      var m = d.getMinutes( ).toString( );
      while( m.length < 2 ){
        m = '0'+m;
      }
      return m+';'+s+';'+ms;
    }
    jQuery( document ).ready( function(){
      
      // Setup test controls
      
      // Create/Destroy
      jQuery( '#t-create' ).click( function( ){
        jQuery( '#flip' ).jcoverflip( { 
          'wrapItemsAround': true,
          'current': 2,
          'time': 5000,
          'next': function( event, ui ){
            jQuery( '#console' ).prepend( '<tr><td>'+timestamp( )+'</td><td>option</td><td>next</td><td>'+event.type+'</td><td>'+((event.originalEvent && event.originalEvent.type) || '')+'</td><td>'+ui.from+'</td><td>'+ui.to+'</td><td></td></tr>' );
          },
          'previous': function( event, ui ){
            jQuery( '#console' ).prepend( '<tr><td>'+timestamp( )+'</td><td>option</td><td>previous</td><td>'+event.type+'</td><td>'+((event.originalEvent && event.originalEvent.type) || '')+'</td><td>'+ui.from+'</td><td>'+ui.to+'</td><td></td></tr>' );
          },
          'last': function( event, ui ){
            jQuery( '#console' ).prepend( '<tr><td>'+timestamp( )+'</td><td>option</td><td>last</td><td>'+event.type+'</td><td>'+((event.originalEvent && event.originalEvent.type) || '')+'</td><td>'+ui.from+'</td><td>'+ui.to+'</td><td></td></tr>' );
          },
          'first': function( event, ui ){
            jQuery( '#console' ).prepend( '<tr><td>'+timestamp( )+'</td><td>option</td><td>first</td><td>'+event.type+'</td><td>'+((event.originalEvent && event.originalEvent.type) || '')+'</td><td>'+ui.from+'</td><td>'+ui.to+'</td><td></td></tr>' );
          },
          'change': function( event, ui ){
            jQuery( '#console' ).prepend( '<tr><td>'+timestamp( )+'</td><td>option</td><td>change</td><td>'+event.type+'</td><td>'+((event.originalEvent && event.originalEvent.type) || '')+'</td><td>'+ui.from+'</td><td>'+ui.to+'</td><td></td></tr>' );
          },
          'start': function( event, ui ){
            jQuery( '#console' ).prepend( '<tr><td>'+timestamp( )+'</td><td>option</td><td>start</td><td>'+event.type+'</td><td>'+((event.originalEvent && event.originalEvent.type) || '')+'</td><td>'+ui.from+'</td><td>'+ui.to+'</td><td></td></tr>' );
          }
          ,
          'stop': function( event, ui ){
            jQuery( '#console' ).prepend( '<tr><td>'+timestamp( )+'</td><td>option</td><td>stop</td><td>'+event.type+'</td><td>'+((event.originalEvent && event.originalEvent.type) || '')+'</td><td>'+ui.from+'</td><td>'+ui.to+'</td><td>'+ui.time+'</td></tr>' );
          }
          
        } );
      } );
      
      
      
      
      // bind events
      jQuery( '#flip' ).bind( 'jcoverflipnext', function( event, ui ){
        jQuery( '#console' ).prepend( '<tr><td>'+timestamp( )+'</td><td>bind</td><td>jcoverflipnext</td><td>'+event.type+'</td><td>'+((event.originalEvent && event.originalEvent.type) || '')+'</td><td>'+ui.from+'</td><td>'+ui.to+'</td><td></td></tr>' );
      } );
      
      jQuery( '#flip' ).bind( 'jcoverflipprevious', function( event, ui ){
        jQuery( '#console' ).prepend( '<tr><td>'+timestamp( )+'</td><td>bind</td><td>jcoverflipprevious</td><td>'+event.type+'</td><td>'+((event.originalEvent && event.originalEvent.type) || '')+'</td><td>'+ui.from+'</td><td>'+ui.to+'</td><td></td></tr>' );
      } );
      
      jQuery( '#flip' ).bind( 'jcoverfliplast', function( event, ui ){
        jQuery( '#console' ).prepend( '<tr><td>'+timestamp( )+'</td><td>bind</td><td>jcoverfliplast</td><td>'+event.type+'</td><td>'+((event.originalEvent && event.originalEvent.type) || '')+'</td><td>'+ui.from+'</td><td>'+ui.to+'</td><td></td></tr>' );
      } );
      
      jQuery( '#flip' ).bind( 'jcoverflipfirst', function( event, ui ){
        jQuery( '#console' ).prepend( '<tr><td>'+timestamp( )+'</td><td>bind</td><td>jcoverflipfirst</td><td>'+event.type+'</td><td>'+((event.originalEvent && event.originalEvent.type) || '')+'</td><td>'+ui.from+'</td><td>'+ui.to+'</td><td></td></tr>' );
      } );
      
      jQuery( '#flip' ).bind( 'jcoverflipstart', function( event, ui ){
        jQuery( '#console' ).prepend( '<tr><td>'+timestamp( )+'</td><td>bind</td><td>jcoverflipstart</td><td>'+event.type+'</td><td>'+((event.originalEvent && event.originalEvent.type) || '')+'</td><td>'+ui.from+'</td><td>'+ui.to+'</td><td></td></tr>' );
      } );
      
      jQuery( '#flip' ).bind( 'jcoverflipchange', function( event, ui ){
        jQuery( '#console' ).prepend( '<tr><td>'+timestamp( )+'</td><td>bind</td><td>jcoverflipchange</td><td>'+event.type+'</td><td>'+((event.originalEvent && event.originalEvent.type) || '')+'</td><td>'+ui.from+'</td><td>'+ui.to+'</td><td></td></tr>' );
      } );
      
      jQuery( '#flip' ).bind( 'jcoverflipstop', function( event, ui ){
        jQuery( '#console' ).prepend( '<tr><td>'+timestamp( )+'</td><td>bind</td><td>jcoverflipstop</td><td>'+event.type+'</td><td>'+((event.originalEvent && event.originalEvent.type) || '')+'</td><td>'+ui.from+'</td><td>'+ui.to+'</td><td>'+ui.time+'</td></tr>' );
      } );
      
      
      // Controls
      
      jQuery( '#t-destroy' ).click( function( ){
        jQuery( '#flip' ).jcoverflip( 'destroy' );
      } );
      
      
      // Next/Previous
      jQuery( '#t-first' ).click( function( ){
        jQuery( '#flip' ).jcoverflip( 'first', function( event, ui ){
          jQuery( '#console' ).prepend( '<tr><td>'+timestamp( )+'</td><td>callback</td><td>first</td><td>'+event.type+'</td><td>'+((event.originalEvent && event.originalEvent.type) || '')+'</td><td>'+ui.from+'</td><td>'+ui.to+'</td><td></td></tr>' );
        } );
      } );
      
      jQuery( '#t-previous' ).click( function( ){
        jQuery( '#flip' ).jcoverflip( 'previous', function( event, ui ){
          jQuery( '#console' ).prepend( '<tr><td>'+timestamp( )+'</td><td>callback</td><td>previous</td><td>'+event.type+'</td><td>'+((event.originalEvent && event.originalEvent.type) || '')+'</td><td>'+ui.from+'</td><td>'+ui.to+'</td><td></td></tr>' );
        } );
      } );
      
      jQuery( '#t-next' ).click( function( ){
        jQuery( '#flip' ).jcoverflip( 'next', function( event, ui ){
          jQuery( '#console' ).prepend( '<tr><td>'+timestamp( )+'</td><td>callback</td><td>next</td><td>'+event.type+'</td><td>'+((event.originalEvent && event.originalEvent.type) || '')+'</td><td>'+ui.from+'</td><td>'+ui.to+'</td><td></td></tr>' );
        } );
      } );
      
      jQuery( '#t-last' ).click( function( ){
        jQuery( '#flip' ).jcoverflip( 'last', function( event, ui ){
          jQuery( '#console' ).prepend( '<tr><td>'+timestamp( )+'</td><td>callback</td><td>last</td><td>'+event.type+'</td><td>'+((event.originalEvent && event.originalEvent.type) || '')+'</td><td>'+ui.from+'</td><td>'+ui.to+'</td><td></td></tr>' );
        } );
      } );
      
      jQuery( '#t-previous-ops' ).click( function( ){
        var num = jQuery( '#t-previous-ops-num' ).val( );
        var wrap = jQuery( '#t-previous-ops-wrap' ).get( 0 ).checked;
        jQuery( '#flip' ).jcoverflip( 'previous', num, wrap );
      } );
      
      jQuery( '#t-next-ops' ).click( function( ){
        var num = jQuery( '#t-next-ops-num' ).val( );
        var wrap = jQuery( '#t-next-ops-wrap' ).get( 0 ).checked;
        jQuery( '#flip' ).jcoverflip( 'next', num, wrap );
      } );
      
      
      // Enable/Disable
      jQuery( '#t-enable' ).click( function( ){
        jQuery( '#flip' ).jcoverflip( 'enable' );
      } );
      
      jQuery( '#t-disable' ).click( function( ){
        jQuery( '#flip' ).jcoverflip( 'disable' );
      } );
      
    });
    </script>
  </head>        
  </head>
  <body>
    <div id="wrapper">
    <ul id="flip">
      <li title="The first image" ><img src="https://www.newsignature.com/wp-content/jcoverflip/jcoverflip-demo/1.png" /></li>
      <li title="A second image" ><img src="https://www.newsignature.com/wp-content/jcoverflip/jcoverflip-demo/2.png" /></li>
      <li title="This is the description" ><img src="https://www.newsignature.com/wp-content/jcoverflip/jcoverflip-demo/5.png" /></li>
      <li title="Another description" ><img src="https://www.newsignature.com/wp-content/jcoverflip/jcoverflip-demo/4.png" /></li>
      <li title="A title for the image" ><img src="https://www.newsignature.com/wp-content/jcoverflip/jcoverflip-demo/3.png" /></li>
      
    </ul>
    <div id="scrollbar"></div>
    </div>


   </body>
</html>