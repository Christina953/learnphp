<?php
// interface

// on olemas library kood, teised user'id ei või seda muuta
// oletame, et siis teeb mingi complex taski, lihtne näide allpool

class Job {
    public function task(Logger $logger) { //olen valmis vastu võtma ükskõik mis klassi mis vastab sellele lepingule
        for($i=0;$i<10;$i++) {
            // n some complex task
            // et teeks selle echo "Task $i done\n"; asemel
            $logger->log("Task $i done");
        }
    }
}

class ConsoleLogger implements Logger {
    public function log($message) {
        echo "$message\n";
    }
}
// kui tuleb palju eri soove kasutajatelt, saab rakendada interface'i
// interface on nagu leping, tal ei ole sisu, vaid ta ütleb, et sul peab olema selline asi
//Lihtsalt öeldes: interface on tööjuhis klassidele, mis tagab, et kõik nendest järgivad samu reegleid.
interface Logger {
    public function log($message);
}




// siis tuleb kasutaja, kes tahab seda kasutada, ja tahaks midagi muuta, 
// kui on tehtud interface, siis võib kasutaja luua nii palju loggereid kui vaja
class NothingLogger implements Logger {
    public function log($message) {
        
    }
}
class FileLogger implements Logger {
    public function log ($message) {
        $file =fopen('log.log', 'a');
        fwrite($file, "$message\n");
        fclose($file);
    }
}
$job = new Job();
$logger = new FileLogger();
$job->task($logger);


