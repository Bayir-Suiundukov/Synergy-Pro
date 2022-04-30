require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.onload = function() {
                                     window.setInterval(function(){
                                              var date = new Date();

                                              var hours = date.getHours();
                                              var minutes = date.getMinutes()

                                              if (hours <  10) hours = "0" + hours;
                                              if (minutes <  10) minutes = "0" + minutes;

                                              var clock = hours + ":" + minutes;
                                              document.getElementById("clock").innetHTML = clock;
                                     });
                            }
