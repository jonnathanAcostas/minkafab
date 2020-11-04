<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SensorGraphics extends Controller
{
//
    public function getSensorsValorbySensorIDMensual(){

                  $sensors_id = DB::table('sensor')->where('customer_id', '=', 34)->select('sensor_id', 'measure')->orderby('sensor_id')->get();
                  $DataTimeNow = time();
                  // convert time zone on Ecuator  rest 5h = a 18000 Unix or seconds Time Now
                  $DataTimeNow = $DataTimeNow - 18000;
                  // get Date once Month before
                  $DataMonthLast = $DataTimeNow - 2419200;
          //   Porcentge
                      $sensors_mesure1 = $sensors_id[0]->measure;
                      $sensors_valor1 = DB::table('sensor_valor')->take(1400)
                      ->where('sensor_id', '=', $sensors_id[0]->sensor_id)
                      ->where('tiempo','>',$DataMonthLast)
                      ->select('valor', 'tiempo')->orderByDesc('tiempo')->get();
          //   Celcius
                      $sensors_mesure2 = $sensors_id[1]->measure;
                      $sensors_valor2 = DB::table('sensor_valor')
                      ->take(1400)->where('sensor_id', '=', $sensors_id[1]->sensor_id)
                      ->where('tiempo','>',$DataMonthLast)->select('valor', 'tiempo')
                      ->orderByDesc('tiempo')->get();
          //    Us/cm
                     $sensors_mesure3 = $sensors_id[2]->measure;
                      $sensors_valor3 = DB::table('sensor_valor')->take(1400)
                      ->where('sensor_id', '=', $sensors_id[2]->sensor_id)
                      ->where('tiempo','>',$DataMonthLast)->select('valor', 'tiempo')
                      ->orderByDesc('tiempo')->get();
          //    Volt
                      $sensors_mesure4 = $sensors_id[3]->measure;
                      $sensors_valor4 = DB::table('sensor_valor')->take(1400)
                      ->where('sensor_id', '=', $sensors_id[3]->sensor_id)
                      ->where('tiempo','>',$DataMonthLast)->select('valor', 'tiempo')
                      ->orderByDesc('tiempo')->get();

                  return response()->json(
                      [

                          'message' => 'GET Succesfully',
                          'action'=>'GET',
                          'sensors_valor1'=>[
                              'measure' => $sensors_mesure1,
                              'sensors' => $sensors_valor1,
                          ],
                          'sensors_valor2'=>[
                              'measure' => $sensors_mesure2,
                              'sensors' => $sensors_valor2,
                          ],
                          'sensors_valor3'=>[
                              'measure' => $sensors_mesure3,
                              'sensors' => $sensors_valor3,
                           ],
                          'sensors_valor4'=>[
                              'measure' => $sensors_mesure4,
                              'sensors' => $sensors_valor4,
                          ],
                      ]
                  );
              }
               public function getSensorsValorbySensorIDHora(){

                          $sensors_id = DB::table('sensor')->where('customer_id', '=', 34)->select('sensor_id', 'measure')->orderby('sensor_id')->get();
                          $DataTimeNow = time();
                          // convert time zone on Ecuator  rest 5h = a 18000 Unix or seconds Time Now
                          $DataTimeNow = $DataTimeNow - 18000;
                          // get Date once Month before
                          $DataHourLast = $DataTimeNow - 3600;
                  //   Porcentge
                              $sensors_mesure1 = $sensors_id[0]->measure;
                              $sensors_valor1 = DB::table('sensor_valor')->take(1400)
                              ->where('sensor_id', '=', $sensors_id[0]->sensor_id)
                              ->where('tiempo','>',$DataHourLast)
                              ->select('valor', 'tiempo')->orderByDesc('tiempo')->get();
                  //   Celcius
                              $sensors_mesure2 = $sensors_id[1]->measure;
                              $sensors_valor2 = DB::table('sensor_valor')
                              ->take(1400)->where('sensor_id', '=', $sensors_id[1]->sensor_id)
                              ->where('tiempo','>',$DataHourLast)->select('valor', 'tiempo')
                              ->orderByDesc('tiempo')->get();
                  //    Us/cm
                             $sensors_mesure3 = $sensors_id[2]->measure;
                              $sensors_valor3 = DB::table('sensor_valor')->take(1400)
                              ->where('sensor_id', '=', $sensors_id[2]->sensor_id)
                              ->where('tiempo','>',$DataHourLast)->select('valor', 'tiempo')
                              ->orderByDesc('tiempo')->get();
                  //    Volt
                              $sensors_mesure4 = $sensors_id[3]->measure;
                              $sensors_valor4 = DB::table('sensor_valor')->take(1400)
                              ->where('sensor_id', '=', $sensors_id[3]->sensor_id)
                              ->where('tiempo','>',$DataHourLast)->select('valor', 'tiempo')
                              ->orderByDesc('tiempo')->get();

                          return response()->json(
                              [

                                  'message' => 'GET Succesfully',
                                  'action'=>'GET',
                                  'sensors_valor1'=>[
                                      'measure' => $sensors_mesure1,
                                      'sensors' => $sensors_valor1,
                                  ],
                                  'sensors_valor2'=>[
                                      'measure' => $sensors_mesure2,
                                      'sensors' => $sensors_valor2,
                                  ],
                                  'sensors_valor3'=>[
                                      'measure' => $sensors_mesure3,
                                      'sensors' => $sensors_valor3,
                                   ],
                                  'sensors_valor4'=>[
                                      'measure' => $sensors_mesure4,
                                      'sensors' => $sensors_valor4,
                                  ],
                              ]
                          );
                      }
               public function getSensorsValorbySensorIDDay(){

                          $sensors_id = DB::table('sensor')->where('customer_id', '=', 34)->select('sensor_id', 'measure')->orderby('sensor_id')->get();
                          $DataTimeNow = time();
                          // convert time zone on Ecuator  rest 5h = a 18000 Unix or seconds Time Now
                          $DataTimeNow = $DataTimeNow - 18000;
                          // get Date once Month before
                          $DataDayLast = $DataTimeNow - 86400;
                  //   Porcentge
                              $sensors_mesure1 = $sensors_id[0]->measure;
                              $sensors_valor1 = DB::table('sensor_valor')->take(1400)
                              ->where('sensor_id', '=', $sensors_id[0]->sensor_id)
                              ->where('tiempo','>',$DataDayLast)
                              ->select('valor', 'tiempo')->orderByDesc('tiempo')->get();
                  //   Celcius
                              $sensors_mesure2 = $sensors_id[1]->measure;
                              $sensors_valor2 = DB::table('sensor_valor')
                              ->take(1400)->where('sensor_id', '=', $sensors_id[1]->sensor_id)
                              ->where('tiempo','>',$DataDayLast)->select('valor', 'tiempo')
                              ->orderByDesc('tiempo')->get();
                  //    Us/cm
                             $sensors_mesure3 = $sensors_id[2]->measure;
                              $sensors_valor3 = DB::table('sensor_valor')->take(1400)
                              ->where('sensor_id', '=', $sensors_id[2]->sensor_id)
                              ->where('tiempo','>',$DataDayLast)->select('valor', 'tiempo')
                              ->orderByDesc('tiempo')->get();
                  //    Volt
                              $sensors_mesure4 = $sensors_id[3]->measure;
                              $sensors_valor4 = DB::table('sensor_valor')->take(1400)
                              ->where('sensor_id', '=', $sensors_id[3]->sensor_id)
                              ->where('tiempo','>',$DataDayLast)->select('valor', 'tiempo')
                              ->orderByDesc('tiempo')->get();

                          return response()->json(
                              [

                                  'message' => 'GET Succesfully',
                                  'action'=>'GET',
                                  'sensors_valor1'=>[
                                      'measure' => $sensors_mesure1,
                                      'sensors' => $sensors_valor1,
                                  ],
                                  'sensors_valor2'=>[
                                      'measure' => $sensors_mesure2,
                                      'sensors' => $sensors_valor2,
                                  ],
                                  'sensors_valor3'=>[
                                      'measure' => $sensors_mesure3,
                                      'sensors' => $sensors_valor3,
                                   ],
                                  'sensors_valor4'=>[
                                      'measure' => $sensors_mesure4,
                                      'sensors' => $sensors_valor4,
                                  ],
                              ]
                          );
                      }
          public function getSensorsValorbySensorIDSemana(){

              $sensors_id = DB::table('sensor')->where('customer_id', '=', 34)->select('sensor_id', 'measure')->orderby('sensor_id')->get();
              $DataTimeNow = time();
              // convert time zone on Ecuator  rest 5h = a 18000 Unix or seconds Time Now
              $DataTimeNow = $DataTimeNow - 18000;
              // get Date once week before
              $DataWeekLast = $DataTimeNow - 604800;
              //get Date twice week before
              $Data2WeekLast = $DataTimeNow - 1209600;
      //   Porcentge
                  $sensors_mesure1 = $sensors_id[0]->measure;
                  $sensors_valor1 = DB::table('sensor_valor')->take(1400)
                  ->where('sensor_id', '=', $sensors_id[0]->sensor_id)
                  ->where('tiempo','>',$DataWeekLast)
                  ->select('valor', 'tiempo')->orderByDesc('tiempo')->get();
      //   Celcius
                  $sensors_mesure2 = $sensors_id[1]->measure;
                  $sensors_valor2 = DB::table('sensor_valor')->take(1400)
                  ->where('sensor_id', '=', $sensors_id[1]->sensor_id)
                  ->where('tiempo','>',$DataWeekLast)->select('valor', 'tiempo')
                  ->orderByDesc('tiempo')->get();
      //    Us/cm
                 $sensors_mesure3 = $sensors_id[2]->measure;
                  $sensors_valor3 = DB::table('sensor_valor')->take(1400)
                  ->where('sensor_id', '=', $sensors_id[2]->sensor_id)
                  ->where('tiempo','>',$DataWeekLast)->select('valor', 'tiempo')
                  ->orderByDesc('tiempo')->get();
      //    Volt
                  $sensors_mesure4 = $sensors_id[3]->measure;
                  $sensors_valor4 = DB::table('sensor_valor')->take(1400)
                  ->where('sensor_id', '=', $sensors_id[3]->sensor_id)
                  ->where('tiempo','>',$DataWeekLast)->select('valor', 'tiempo')
                  ->orderByDesc('tiempo')->get();

              return response()->json(
                  [

                      'message' => 'GET Succesfully',
                       'action'=>'GET',
                      'sensors_valor1'=>[
                          'measure' => $sensors_mesure1,
                          'sensors' => $sensors_valor1,
                      ],
                      'sensors_valor2'=>[
                          'measure' => $sensors_mesure2,
                          'sensors' => $sensors_valor2,
                      ],
                      'sensors_valor3'=>[
                          'measure' => $sensors_mesure3,
                          'sensors' => $sensors_valor3,
                       ],
                      'sensors_valor4'=>[
                          'measure' => $sensors_mesure4,
                          'sensors' => $sensors_valor4,
                      ],
                  ]
              );
          }
}
