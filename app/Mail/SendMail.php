<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;
    public $FilePath1;
    public $FilePath2;
    public $FilePath3;
    public $FilePath4;
    public $FilePath5;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $FilePath1, $FilePath2, $FilePath3, $FilePath4, $FilePath5,)
    {
      $this->request = $request;
      $this->FilePath1 = $FilePath1;
      $this->FilePath2 = $FilePath2;
      $this->FilePath3 = $FilePath3;
      $this->FilePath4 = $FilePath4;
      $this->FilePath5 = $FilePath5;
    }

    public function build()
    {
      // $data = [
      //             'name' => 'Mail from ItSolutionStuff.com',
      //             'email' => 'This is for testing email using smtp.'
      //         ];
      
      // return $this->subject('Palmet Digital Bilgilendirme') // Çalışıyor
      //             ->cc('c.karaduman@palmet.com')            // Çalışıyor
      //               ->view('target', $data->all());         // Çalışıyor

      return $this->subject('Palmet Digital Bilgilendirme') 
                  ->cc('c.karaduman@palmet.com')            
                  ->view('target')->with(['select1' => $this->request->select1, 'select2' => $this->request->select2, 'text1' => $this->request->text1, 'FilePath1' => $this->FilePath1,
                                                     'FilePath2' => $this->FilePath2, 'FilePath3' => $this->FilePath3, 'FilePath4' => $this->FilePath4, 'FilePath5' => $this->FilePath5]);      

    }

    // /**
    //  * Get the message envelope.
    //  *
    //  * @return \Illuminate\Mail\Mailables\Envelope
    //  */
    // public function envelope()
    // {
    //     return new Envelope(
    //         subject: 'Send Mail',
    //     );
    // }
    //
    // /**
    //  * Get the message content definition.
    //  *
    //  * @return \Illuminate\Mail\Mailables\Content
    //  */
    // public function content()
    // {
    //     return new Content(
    //         view: 'target.blade.php',
    //     )->with('data',$this->data);
    // }
    //
    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array
    //  */
    // public function attachments()
    // {
    //     return [];
    // }
}
