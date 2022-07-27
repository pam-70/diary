<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiaryController extends Controller
{
    //
    public function update(Request $request)
    {
        if ($request->isMethod('post')) {



            $url_date = [
                'url_update' => " Возврат с сервера",
                //"url_percent" =>$percent,

            ];

            return ($url_date);
        } else {
            // return view('home');
            // echo("77777");
            $mass_dat = [];
            // $date = date("Y") . "/" . date("m") . "/01";
            $ya = "2021";
            $ms = "12";
            $dt = "01";

            $str_date = $ya . '-' . $ms . '-' . $dt;
            $first_dat = strtotime($str_date); //Перевод даты в timestamp
            //$dnei = date('t', mktime(0, 0, 0,  date("n", $time) - 1)); //количество дней в месяце
            $dat = date('w', $first_dat);
            // if ($dat == 0) {
            //    $dat = 7;
            //}
            echo $dat . " Номер дня недели <br>";
            $str_dat = (string)$dat - 1;
            $date_start = date("d.m.Y", strtotime("-" . $str_dat . " days", strtotime($str_date)));

            echo "Дата окончания премиум аккаунта: " . $date_start;
            $kol_dn = 1;
            for ($i = 0; $i <= 5; $i++) { //заполняем массив текушим ммесяцем и следующим

                $mas_vr = [];
                for ($ii = 0; $ii <= 6; $ii++) {
                    $ss_dd = (string)$kol_dn - 1;
                    $mas_vr[] =  date("d.m.Y", strtotime("+" . $ss_dd . " days", strtotime($date_start)));
                    $kol_dn++;
                }
                $mass_dat[] = $mas_vr;
            }








            dd($mass_dat);
            $time = strtotime($str_date); //Перевод даты в timestamp
            $log = false;
            $dtm = (int) $dt;
            for ($i = 0; $i <= 5; $i++) { //заполняем массив текушим ммесяцем и следующим
                $mas_vr = [];
                for ($ii = 0; $ii <= 6; $ii++) {
                    if ($dat - 1 == $ii and $log == false) {
                        $log = true;
                    }
                    if ($log == false) {
                        $mas_vr[] = "";
                    } else {
                        $mas_vr[] = $dtm;
                        $dtm++;
                    }
                    if ($dtm > $dnei) {
                        $dtm = 1;
                    }
                }
                $mass_dat[] = $mas_vr;
            }
            for ($i = 0; $i < $dat - 1; $i++) {
                $mass_dat[0][$i] = $i;
            }




            dd($mass_dat);





            echo date("d.m.Y", strtotime("last day of previous month")) . "<br>";  // последний день прошлого месяца
            $pr_dt = date("d.m.Y", strtotime("last day of previous month")) . "<br>";  // последний день прошлого месяца
            $pr_dt = strtotime($pr_dt);
            echo date("N", $pr_dt) . "<br>";
            echo date("d.m.Y", $pr_dt) . "<br>";

            $date = "23.03." . date("Y");
            $d1 = strtotime($date); // переводит из строки в дату
            echo date('d.m.Y', strtotime("last Monday")) . "<br>";
            $mpr = date('m.Y', strtotime("last Monday"));
            echo date($d1, strtotime("-1 months")) . 'dat pr mes <br>';
            echo  "<br>";


            $date2 = date("d.m.Y", $d1); // переводит в новый формат
            $dp = date($d1, strtotime("last Monday")) . "вот здесь =<br>"; // последний понедельник месяца
            echo $dp . "<br>";
            echo date("d", $d1) . "<br>";
            echo $date2 . "<br>";
            echo date("N", $d1) . "<br>"; //день недели
            echo date("d", $d1) . "<br>";
            echo date("m", $d1) . "<br>";
            echo date("Y", $d1) . "<br>";
            echo date('t', mktime(0, 0, 0,  date("n", $d1) - 1)) . "<br>"; // Количество дней в - месяце текущего года

            //echo $date2 . "<br>";
            //$today = date("d/m/Y");
            // echo $today . "<br>";
            // echo date("N") . "<br>"; //день недели
            // echo date("t") . "<br>"; //дней в месяце
            // echo date('t', mktime(0, 0, 0,  date("n") - 1)) . "<br>"; // Количество дней в - месяце текущего года
            // echo date('t', mktime(0, 0, 0,  date("n",$d1) - 1)) . "<br>"; // Количество дней в - месяце текущего года
            //======================================
            for ($i = 1; $i <= 7; $i++) {
                $mas_vr = [];
                for ($ii = 1; $ii <= 7; $ii++) {
                    $mas_vr[] = $ii;
                }
                $mass_dat[] = $mas_vr;
            }

            dd($mass_dat);
        }


        // return view('home');
    }
}
