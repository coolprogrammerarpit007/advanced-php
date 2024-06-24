<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advance PHP</title>
</head>
<body>
    <h1>Advanced PHP</h1>

    <?php 

            // echo "Date and Time in PHP". "<br>";
            // $today_date = date("d-m-Y");
            // $day_today = date("l");
            // $current_time = date("h:i:sa");
            // echo "Today date is: {$today_date} and day today is: {$day_today} " ."<br>";
            // echo "Current Time is: {$current_time}" ."<br>";
            // // mktime(hour,minute,second,month,day,year) is used to create a custom date.

            // $tomorrow = strtotime("tomorrow");
            // echo date("Y-m-d:h:i:sa",$tomorrow) . "<br>"; 

            // // Printing next 6 saturdays from today.
            // $start_date = strtotime("saturday");
            // $end_date = strtotime("+6 weeks",$start_date);
            // // echo date("d-m-Y",$start_date). "<br>";
            // // echo date("d-m-y",$end_date). "<br>";

            // while($start_date < $end_date){
            //     echo date("M d",$start_date)."<br>";
            //     $start_date = strtotime("+1 week",$start_date);
            // }


            //  File Handling in PHP
            // $my_file = fopen("dictionary.txt","r") or die("Unable to open the file.");
            // // echo fread($my_file,filesize("dictionary.txt"));
            // // fclose($my_file);

            // while(!feof($my_file)){
            //     echo fgets($my_file) . "<br>";
            // }

            // fclose($my_file);

            // Writing to the existing file
            $my_file = fopen("dictionary.txt","w") or die("Unable to open the file");
            $new_txt = "File Handling in PHP";
            fwrite($my_file,$new_txt);
            fclose($my_file);

            // Now reading the file

            $new_file = fopen("dictionary.txt","r") or die("Unable to open the file");
            while(!feof($new_file)){
                echo fgets($new_file);
            }

            fclose($new_file);
    ?>
</body>
</html>