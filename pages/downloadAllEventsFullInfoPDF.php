<?php
    
    session_start();
    require("fpdf/fpdf.php");
    if(isset($_SESSION['username']))
    {

        $xml = simplexml_load_file('pages/AllEvents.xml') or die("Error: Xml dokument je prazan");
        $arrayList = array();
        

        foreach ($xml->eventInfo as $event) {
            $row1 =  $event->name->getName()." : ".$event->name;
            array_push($arrayList,$row1);  
            $row2 = $event->date->getName() ." : ".$event->date;
            array_push($arrayList,$row2);  
            $row3 = $event->location->getName() ." : ".$event->location;
            array_push($arrayList,$row3);  
            $row4 = $event->type->getName() ." : ".$event->type;
            array_push($arrayList,$row4);  
            $row5 =  $event->mainInfo->getName() ." : ". $event->mainInfo;
            array_push($arrayList,$row5);  
            $line = "===========================================================";
            array_push($arrayList,$line);  
        }

        $pdf = new FPDF();
        $pdf->AddPage();
        $Naslov = "Izvjestaj";
        $pdf->SetFont('Arial', 'B', 25);
        $pdf->Multicell(0, 12, $Naslov);
        $pdf->SetFont('Arial', 'B', 12);

        foreach ($arrayList as $row) {
            $pdf->Multicell(0, 12, $row);
        }//TODO automatsko dodavanje stranica
        $pdf->AddPage();
        $pdf->Output();

    }

    else
    {
        echo "Only admin can download files!"; //Ne bi trebalo ovo nikad ispisat
    }
?>





