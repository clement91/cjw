<?php

namespace App\Http\Controllers;

use App\Attend;
use Mail;
use Illuminate\Http\Request;

class AttendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('rsvp');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attend $Attend
     * @return \Illuminate\Http\Response
     */
    public function show(Attend $Attend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attend  $Attend
     * @return \Illuminate\Http\Response
     */
    public function edit(Attend $Attend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attend $Attend
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request)
     {
         //
         date_default_timezone_set('Asia/Singapore');
         $date = date("Y-m-d H:i:s");

         $out = '';
         $update = Attend::where('contact', $request->get('contactNo'));

         if($update->get()->Count())
         {
           // update
           $updatef = $update->first();
           $updatef->pax = $request->get('noOfPax');
           $updatef->babyChair = $request->get('babyChair');
           $updatef->halalFood = $request->get('halalFood');
           $updatef->message = $request->get('contactMessage');

           $updatef->save();
           $out = 'Update Success';

           //send email
           $data = array(
             'title' => 'Your info was successfully update!',
             'name' => $request->get('contactName'),
             'email' => $request->get('contactEmail'),
             'contact' => $request->get('contactNo'),
             'noOfPax' => $request->get('noOfPax'),
             'babyChair' => $request->get('babyChair'),
             'halalFood' => $request->get('halalFood'),
             //'message' => (string)$request->get('contactMessage'),
           );

         }
         else
         {
           // insert
           $add = new Attend();

           $add->name = $request->get('contactName');
           $add->email = $request->get('contactEmail');
           $add->contact = $request->get('contactNo');
           $add->pax = $request->get('noOfPax');
           $add->babyChair = $request->get('babyChair');
           $add->halalFood = $request->get('halalFood');
           $add->message = $request->get('contactMessage');

           $add->save();
           $out = 'Insert Success';

           $data = array(
             'title' => 'Your message was successfully sent!',
             'name' => $request->get('contactName'),
             'email' => $request->get('contactEmail'),
             'contact' => $request->get('contactNo'),
             'noOfPax' => $request->get('noOfPax'),
             'babyChair' => $request->get('babyChair'),
             'halalFood' => $request->get('halalFood'),
             //'message' => (string)$request->get('contactMessage'),
           );

         }

         $to_mail = $request->get('contactEmail');
         $bcc_mail = ['clejacweds@gmail.com'];

         Mail::send('email_template', $data, function ($message) use ($to_mail, $bcc_mail) {
             $message->from('clejacweds@gmail.com', 'clejacWeds');

             $message->to($to_mail)->subject('Thanks for your RSVP with #clejacweds');
             $message->bcc($bcc_mail)->subject('Pss.. Someone has RSVP with us!');

         });

         return $out;
     }

     public function indexReport()
     {
         return view('report');
     }

     public function viewReport()
     {
         $out = Attend::all();
         return $out;
     }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attend  $Attend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attend $Attend)
    {
        //
    }
}
