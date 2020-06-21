if( 'function' === typeof importScripts) {
importScripts('https://cdn.onesignal.com/sdks/OneSignalSDKWorker.js');
   addEventListener('message', onMessage);

   function onMessage(e) { 
     // do some work here 
   }    
}