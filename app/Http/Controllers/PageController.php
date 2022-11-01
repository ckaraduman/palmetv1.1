<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Http\UploadedFileSplFileInfo;

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
        $test_cem='';
        return view('hgf_dashboard', compact('pgp_cons','pgp_budget','baymina_cons', 'baymina_budget', 'delta_cons', 'delta_budget','test_cem'));
        }

        public function help()
        {
          $data=Auth::User();
          return view('help', $data);
        }

        public function helpRecord(Request $request)
        {
          // return $request->all();
          // echo $request->input('select1'); --
          // echo "<br>"; --
          // echo $request->input('text1'); --
//***************************************************************START
          // echo $request->select1;
          // echo "<br>";
          // echo $request->text1;
          // echo "<br>";
          // $path = $request->photo->store('images');
          // echo $path;
          // echo "<br>";
//***************************************************************END

//-----------------------------------------------111111111111111111
                                        // if(isset($_FILES['image'])){
                                        //    $errors= array();
                                        //    $file_name = $_FILES['image']['name'];
                                        //    $file_size =$_FILES['image']['size'];
                                        //    $file_tmp =$_FILES['image']['tmp_name'];
                                        //    $file_type=$_FILES['image']['type'];
                                        //
                                        //    if($file_size > 2097152){
                                        //       $errors[]='File size must be excately 2 MB';
                                        //    }
                                        //
                                        //    if(empty($errors)==true){
                                        //       move_uploaded_file($file_tmp,"storage/".$file_name);
                                        //       echo "Success";
                                        //    }else{
                                        //       print_r($errors);
                                        //    }
                                        // }

//----------------------------------------------999999999999999999

            //CEM
            //$files = array_filter($_FILES['upload']['name']); //something like that to be used before processing files.

            // Count # of uploaded files in array
            $total = count($_FILES['image']['name']);
            $number=rand(0,1000000000);
            $string = Str::random(30);
            date_default_timezone_set('Europe/Istanbul');
            $timestamp = date('Y').date('m').date('d').date('H').date('i').date('s');
            // Loop through each file
            for( $i=0 ; $i < $total ; $i++ ) {

              //Get the temp file path
              $tmpFilePath = $_FILES['image']['tmp_name'][$i];

              //Make sure we have a file path
              if ($tmpFilePath != ""){
                //Setup our new file path
                $newFilePath = "storage/" . $_FILES['image']['name'][$i];

                //Upload the file into the temp dir
                if(move_uploaded_file($tmpFilePath, $newFilePath)) {

                  echo "Dosya(lar) başarıyla kaydedildi!";
                  echo "<br>";
                  echo $total;
                  echo "<br>";
                  echo $tmpFilePath;
                  echo "<br>";
                  echo $newFilePath;
                  echo "<br>";
                  echo "<img src=$newFilePath>";
                  echo "<br>";
                  echo $number.$string;
                  echo "<br>";
                  echo $timestamp;
                }
              }
            }
            //ILKER

          }

        public function target()
        {
            // return view('target',['konu'=>'MakroPort']); -- BU komutla $konu olarak target sayfasında kullanılabilecek değişkeni gönderebiliyoruz.

            $data = 'MakroPort 2022';
            return view('target', compact('data'));
            // Bu komutlarla da bir değişkeni karşı tarafa tek başına yollar ve kullanırız.
        }

}
