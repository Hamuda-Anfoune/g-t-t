<?php

namespace App\Http\Controllers;

use App\Models\calorificData;
use Illuminate\Http\Request;
use App\Libraries;

class CalorificDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("page");
    }

    public function fetch(){
        // return file_get_contents("http://mip-prd-web.azurewebsites.net/CustomDataDownload?LatestValue=true&Applicable=applicableFor&FromUtcDatetime=2022-01-01T00:00:00.000Z&ToUtcDateTime=2022-04-13T00:00:00.000Z&PublicationObjectStagingIds=PUBOBJ1660,PUBOB4507,PUBOB4508,PUBOB4510,PUBOB4509,PUBOB4511,PUBOB4512,PUBOB4513,PUBOB4514,PUBOB4515,PUBOB4516,PUBOB4517,PUBOB4518,PUBOB4519,PUBOB4521,PUBOB4520,PUBOB4522,PUBOBJ1661,PUBOBJ1662");
        $data_source = "http://mip-prd-web.azurewebsites.net/CustomDataDownload?LatestValue=true&Applicable=applicableFor&FromUtcDatetime=" . date("Y") . "-01-01T00:00:00.000Z&ToUtcDateTime=" . date("Y-m-d") . "T00:00:00.000Z&".
                        "PublicationObjectStagingIds=PUBOBJ1660,PUBOB4507,PUBOB4508,PUBOB4510,PUBOB4509,PUBOB4511,PUBOB4512,PUBOB4513,PUBOB4514,PUBOB4515,PUBOB4516,PUBOB4517,PUBOB4518,PUBOB4519,PUBOB4521,PUBOB4520,PUBOB4522,PUBOBJ1661,PUBOBJ1662&FileType=Csv";

        
        // Read and parce the csv file
        // file_get_contents()

        // $ch = curl_init($data_source);
        // // $ch = curl_init("http://www.example.com/");
        // $fp = fopen("example_homepage.txt", "w");

        // curl_setopt($ch, CURLOPT_FILE, $fp);
        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_HEADER, 0);

        // curl_exec($ch);
        // if(curl_error($ch)) {
        //     fwrite($fp, curl_error($ch));
        // }
        // curl_close($ch);
        // fclose($fp);
        // echo file_get_contents("example_homepage.txt", "r");
        // exit("done!");
        
        return file_get_contents($data_source);
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
     * @param  \App\Models\calorificData  $calorificData
     * @return \Illuminate\Http\Response
     */
    public function show(calorificData $calorificData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\calorificData  $calorificData
     * @return \Illuminate\Http\Response
     */
    public function edit(calorificData $calorificData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\calorificData  $calorificData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, calorificData $calorificData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\calorificData  $calorificData
     * @return \Illuminate\Http\Response
     */
    public function destroy(calorificData $calorificData)
    {
        //
    }
}
