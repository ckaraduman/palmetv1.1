<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Mail\OrderShipped;
use App\Models\Order;
use Illuminate\Http\UploadedFileSplFileInfo;
use App\Mail\SendMail;
use App\Mail\SendMail_Gsm;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{

        public function __construct()
        {
            $this->middleware('auth');
        }

        // -------------------------------------------------------------------------------------
        // Bu çalışan fonksiyon. Parametre alarak işlem yapan fonksiyon için yedeklendi--start1
        public function index()
        {
        $pgp_cons=DB::connection('sqlsrv')->table('GetData')->where('TMP_Tasitan','ELEKTRIK')
                                  ->where('OkumaTarihi','>=','2022-10-01 08:00:00.000')
                                  ->where('OkumaTarihi','<=','2022-10-10 08:00:00.000')
                                  ->sum('Tuketim2');
        $pgp_budget=DB::connection('sqlsrv')->table('GetData')->where('TMP_Tasitan','ELEKTRIK')
                                  ->where('OkumaTarihi','>=','2022-10-01 08:00:00.000')
                                  ->where('OkumaTarihi','<=','2022-10-10 08:00:00.000')
                                  ->sum('GunlukButceSm3');
        $pgp_total=$pgp_cons+$pgp_budget;
        $baymina_cons=DB::connection('sqlsrv')->table('GetData')->where('IstasyonAdi','BAYMINA')
                                  ->whereBetween('OkumaTarihi', ['2022-10-01 08:00:00.000','2022-10-10 08:00:00.000'])
                                  ->sum('Tuketim2');
        $baymina_budget=DB::connection('sqlsrv')->table('GetData')->where('IstasyonAdi','BAYMINA')
                                  ->whereBetween('OkumaTarihi', ['2022-10-01 08:00:00.000', '2022-10-10 08:00:00.000'])
                                  ->sum('GunlukButceSm3');
        $delta_cons=DB::connection('sqlsrv')->table('GetData')->where('IstasyonAdi','DELTA RMS/A')
                                  ->whereBetween('OkumaTarihi', ['2022-10-01 08:00:00.000','2022-10-10 08:00:00.000'])
                                  ->sum('Tuketim2');
        $delta_budget=DB::connection('sqlsrv')->table('GetData')->where('IstasyonAdi','DELTA RMS/A')
                                  ->whereBetween('OkumaTarihi', ['2022-10-01 08:00:00.000', '2022-10-10 08:00:00.000'])
                                  ->sum('GunlukButceSm3');
        $ales_cons=DB::connection('sqlsrv')->table('GetData')->where('IstasyonAdi','ALES RMS/A')
                                  ->whereBetween('OkumaTarihi', ['2022-10-01 08:00:00.000','2022-10-10 08:00:00.000'])
                                  ->sum('Tuketim2');
        $ales_budget=DB::connection('sqlsrv')->table('GetData')->where('IstasyonAdi','ALES RMS/A')
                                  ->whereBetween('OkumaTarihi', ['2022-10-01 08:00:00.000', '2022-10-10 08:00:00.000'])
                                  ->sum('GunlukButceSm3');
        $test_cem='';
        return view('hgf_dashboard', compact('pgp_cons','pgp_budget','baymina_cons', 'baymina_budget', 'delta_cons', 'delta_budget','test_cem', 'ales_cons', 'ales_budget'));
        }

        public function help()
        {
          $data=Auth::User();
          return view('help', $data);
        }

        public function insData()
        {
          $insdata=Auth::User();
          return view('insData', $insdata);
        }

        public function gsm()
        {
          $data=Auth::User();
          return view('gsm', $data);
        }

        public function helpRecord(Request $request)
        {
          $gsm_data='';
          echo Auth::User()->name;
          echo "<br>";
          echo Auth::User()->email;
          echo "<br>";
          echo $request->select1;
          echo "<br>";
          echo $request->select2;
          echo "<br>";
          echo $request->text1;
          echo "<br>";
          date_default_timezone_set('Europe/Istanbul');
          $total = count($_FILES['image']['name']);
          if ($total>5){
                echo "5 dosyadan fazla ek yapamazsınız!";
                }else{
                        echo "Dosya(lar) başarıyla alındı!";
                        echo "<br>";
                            $newFilePath='Dosya Eklenmedi!';
                            $FilePath1='';
                            $FilePath2='';
                            $FilePath3='';
                            $FilePath4='';
                            $FilePath5='';
                          for( $i=0 ; $i < $total ; $i++ ) {
                            $uniqfilename = uniqid();
                            $tmpFilePath = $_FILES['image']['tmp_name'][$i];
                            //Make sure we have a file path
                            if ($tmpFilePath != ""){
                              //Setup our new file path
                              // $newFilePath = "storage/" . $_FILES['image']['name'][$i];

                                    $dosya_adi=basename($_FILES['image']['name'][$i]);
                                    $isaret=".";
                                    $pos = strrpos($dosya_adi, $isaret);
                                    $len=strlen($dosya_adi);
                                    $fark=$len-$pos;
                                    $uzanti=substr($dosya_adi,$pos,$fark);
                                    // echo $uzanti;
                              $newFilePath = "storage/" . $uniqfilename.$uzanti;
                              //Upload the file into the temp dir
                              if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                                // echo $total;
                                // echo "<br>";
                                // echo $tmpFilePath;
                                echo "<br>";
                                echo $newFilePath;
                                // echo "<br>";
                                // echo "<img src=$newFilePath width='500'>";
                                $x=$i+1;
                                echo "<a href=$newFilePath>Yüklenen $x. dosya</a>";
                                echo "<br>";
                                if ($x==1){($FilePath1=$newFilePath);}
                                if ($x==2){($FilePath2=$newFilePath);}
                                if ($x==3){($FilePath3=$newFilePath);}
                                if ($x==4){($FilePath4=$newFilePath);}
                                if ($x==5){($FilePath5=$newFilePath);}
                                // $FilePath1=$newFilePath;
                                // echo $number.$string;
                                // echo "<br>";
                                // echo $timestamp;
                                // echo "<br>";
                                echo $uniqfilename;
                                echo "<br>";
                                // echo $test1;
                                // echo "<br>";
                                // echo $test2;
                                // echo "<br>";
                              }
                            }
                          }
                            echo "<br>";
                            echo $FilePath1;
                            echo "<br>";
                            echo $FilePath2;
                            echo "<br>";
                            echo $FilePath3;
                            echo "<br>";
                            echo $FilePath4;
                            echo "<br>";
                            echo $FilePath5;
                            echo "<br>";

                            $record=DB::connection('mysql')->table('help_request')
                                                           ->insert(
                            [
                              'request'=>$request->text1,
                              'attached_files1'=>$FilePath1,
                              'attached_files2'=>$FilePath2,
                              'attached_files3'=>$FilePath3,
                              'attached_files4'=>$FilePath4,
                              'attached_files5'=>$FilePath5,
                              'type'=>$request->select1,
                              'type2'=>$request->select2,
                              'primacy'=>'1',
                              'requesting'=>Auth::User()->name,
                              'email'=>Auth::User()->email,
                              'time'=>now(),
                              'status'=>'Bekliyor',
                              'target'=>'c.karaduman@palmet.com',
                              'sent'=>'0',
                              'closed'=>'0'
                            ]
                          );
                              echo "Kayıt işlemi tamamlandı!";
                              Mail::to('cemilkerkaraduman@gmail.com')->send(new SendMail($request, $FilePath1, $FilePath2, $FilePath3, $FilePath4, $FilePath5, $gsm_data));
                              // dd("Email is sent successfully.");
                             
                              
            //ILKER
                        }
                        return redirect()->route('main_page');                 
        }

        // public function target()
        // {
        //     // return view('target',['konu'=>'MakroPort']); -- BU komutla $konu olarak target sayfasında kullanılabilecek değişkeni gönderebiliyoruz.
        //
        //     $data = 'MakroPort 2022';
        //     return view('target', compact('data'));
        //     // Bu komutlarla da bir değişkeni karşı tarafa tek başına yollar ve kullanırız.
        // }

        public function gsmRecord(Request $gsm_data)
        {
          $request='';
          $FilePath1='';
          $FilePath2='';
          $FilePath3='';
          $FilePath4='';
          $FilePath5='';

          echo Auth::User()->name;
          echo "<br>";
          echo Auth::User()->email;
          echo "<br>";
          echo $gsm_data->gsm_select1;
          echo "<br>";
          echo $gsm_data->gsm_text1;
          echo "<br>";
          date_default_timezone_set('Europe/Istanbul');
                            
                          
                            $record=DB::connection('mysql')->table('gsm_request')
                                                           ->insert(
                            [
                              'request'=>$gsm_data->gsm_text1,
                              'type'=>$gsm_data->gsm_select1,
                              'primacy'=>'1',
                              'requesting'=>Auth::User()->name,
                              'email'=>Auth::User()->email,
                              'time'=>now(),
                              'status'=>'Bekliyor',
                              'target'=>'c.karaduman@palmet.com',
                              'sent'=>'0',
                              'closed'=>'0'
                            ]
                          );
                              echo "Kayıt işlemi tamamlandı!";
                              Mail::to('c.karaduman@palmet.com')->send(new SendMail($request, $FilePath1, $FilePath2, $FilePath3, $FilePath4, $FilePath5, $gsm_data));
                              // dd("Email is sent successfully.");
                              return redirect()->route('main_page');                 
        }






        public function request()
        {
            $request=DB::connection('mysql')->table('help_request')->get();
            return view('request', compact('request'));
        }
        public function form1()
        {
          return view ('form1');
        }

        public function web()
        {
          return view ('web');
        }

        public function cem()
        {
          return view ('accordion');
        }

        public function dataset()
        {
          return view ('dataset');
        }

        public function datalines()
        {
          $datalines=DB::connection('mysql')->table('datalines')->get();
          return view('datalines', compact('datalines'));
        }

        public function transceiver()
        {
          $transceiver=DB::connection('mysql')->table('transceiver')->get();
          return view('transceiver', compact('transceiver'));
        }

        public function sugges()
        {
          $data=Auth::User();
          return view('sugges', $data);
        }

        public function directory()
        {
          $data=DB::connection('mysql')->table('directory')->orderBy('fullname', 'asc')->get();
          return view('directory', compact('data'));
        }

      //   public function index1(Request $data)
      // {
      //   Mail::to('cemilkerkaraduman@gmail.com')->send(new SendMail($data));

      //   dd("Email is sent successfully.");
      // }

      public function suggesRecord(Request $sugdata)
      {
        echo Auth::User()->name;
        echo "<br>";
        echo Auth::User()->email;
        echo "<br>";
        echo $sugdata->select1;
        echo "<br>";
        echo $sugdata->text1;
        echo "<br>";
        date_default_timezone_set('Europe/Istanbul');
        $total = count($_FILES['image']['name']);
        echo "Dosya(lar) başarıyla alındı!";
        echo "<br>";
                          $newFilePath='Dosya Eklenmedi!';
                        for( $i=0 ; $i < $total ; $i++ ) {
                          $uniqfilename = uniqid();
                          $tmpFilePath = $_FILES['image']['tmp_name'][$i];
                          //Make sure we have a file path
                          if ($tmpFilePath != ""){
                            //Setup our new file path
                            // $newFilePath = "storage/" . $_FILES['image']['name'][$i];

                                  $dosya_adi=basename($_FILES['image']['name'][$i]);
                                  $isaret=".";
                                  $pos = strrpos($dosya_adi, $isaret);
                                  $len=strlen($dosya_adi);
                                  $fark=$len-$pos;
                                  $uzanti=substr($dosya_adi,$pos,$fark);
                                  // echo $uzanti;
                            $newFilePath = "storage/" . $uniqfilename.$uzanti;
                            //Upload the file into the temp dir
                            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                              // echo $total;
                              // echo "<br>";
                              // echo $tmpFilePath;
                              // echo "<br>";
                              // echo $newFilePath;
                              // echo "<br>";
                              // echo "<img src=$newFilePath width='500'>";
                              $x=$i+1;
                              echo "<a href=$newFilePath>Yüklenen $x. dosya</a>";
                              echo "<br>";
                              // echo $number.$string;
                              // echo "<br>";
                              // echo $timestamp;
                              // echo "<br>";
                              echo $uniqfilename;
                              echo "<br>";
                              // echo $test1;
                              // echo "<br>";
                              // echo $test2;
                              // echo "<br>";
                            }
                          }
                        }

                        //   $record=DB::connection('mysql')->table('help_request')
                        //                                  ->insert(
                        //   [
                        //     'request'=>$request->text1,
                        //     'attached_files'=>$newFilePath,
                        //     'type'=>$request->select1,
                        //     'primacy'=>'1',
                        //     'requesting'=>Auth::User()->name,
                        //     'email'=>Auth::User()->email,
                        //     'time'=>now(),
                        //     'status'=>'Bekliyor',
                        //     'target'=>'c.karaduman@palmet.com',
                        //     'sent'=>'0',
                        //     'closed'=>'0'
                        //   ]
                        // );
                            echo "İşlem tamamlandı!";
                        //     Mail::to('cemilkerkaraduman@gmail.com')->send(new SendMail($request));
                        //     dd("Email is sent successfully.");


          //ILKER

        }

        public function directoryUpdate(Request $dirdata) //Directory Update - START
      {
        echo Auth::User()->name;
        echo "<br>";
        echo Auth::User()->email;
        echo "<br>";
        echo $dirdata->fullname;
        echo "<br>";
        echo $dirdata->email;
        echo "<br>";
        echo $dirdata->id;
        echo "<br>";
                        $record=DB::connection('mysql')->table('directory')
                                                       ->where('id', $dirdata->id)
                                                       ->update(
                          [
                            'fullname'=>$dirdata->fullname,
                            'email'=>$dirdata->email,
                            'intercom'=>$dirdata->intercom,
                            'gsm'=>$dirdata->gsm,
                            'company'=>$dirdata->company,
                            'department'=>$dirdata->department,
                            'position'=>$dirdata->position,
                            'location'=>$dirdata->location
                           ]
                         );
                             echo "İşlem tamamlandı!";
                             echo "<br>";
                             echo "<a href='https://digital.palmet.com'>Palmet Digital AnaSayfa</a>";
                                                          
                            //  Mail::to('cemilkerkaraduman@gmail.com')->send(new SendMail($request));
                            //  dd("Email is sent successfully.");


          //Directory Update - END

        }

        public function insDataRec(Request $insdata) //Directory Insert Data - START
        {
          echo Auth::User()->name;
          echo "<br>";
          echo Auth::User()->email;
          echo "<br>";
          echo $insdata->fullname;
          echo "<br>";
          echo $insdata->email;
          echo "<br>";
          echo $insdata->id;
          echo "<br>";

          $record=DB::connection('mysql')->table('directory')
                                         ->insert(
                                [
                                'fullname'=>$insdata->fullname,
                                'email'=>$insdata->email,
                                'intercom'=>$insdata->intercom,
                                'gsm'=>$insdata->gsm,
                                'company'=>$insdata->company,
                                'department'=>$insdata->department,
                                'position'=>$insdata->position,
                                'location'=>$insdata->location
                                ]
                                );
                                echo "İşlem tamamlandı!";
                                echo "<br>";
                                echo "<a href='https://digital.palmet.com'>Palmet Digital AnaSayfa</a>";
                                            
                                //Directory Insert Data - END
          }

}
?>