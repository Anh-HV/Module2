<?php
class Patient
{
    public $name;
    public $code;
    public $next;

    public function __construct($name,$code)  
    {
        $this->name = $name;
        $this->code = $code;
    }
}

class PatientQueue
{
    public $front = null;
    public $back = null;

    public function isEmpty()
    {
        return $this->front == null;
    }

    public function enqueue($name, $code)
    {
        $patient = new Patient($name, $code);
        if ($this->isEmpty()) {
            $this->front = $patient;
            $this->back = $patient;
            $patient->next = null;
        } else {
            if ($patient->code <= $this->front->code) {
                $patient->next = $this->front;
                $this->front = $patient;
            } else if ($patient->code >= $this->back->code) {
                $this->back->next = $patient;
                $this->back = $patient;
                $patient->next = null;
            } else {
                $currentPatient = $this->front;
                while (!$currentPatient->next == null) {
                    if ($patient->code <= $currentPatient->next->code) {
                        $temp = $currentPatient->next;
                        $currentPatient->next = $patient;
                        $patient->next = $temp;
                    } else {
                        $currentPatient = $currentPatient->next;
                    }
                }
            }
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        } else {
            $current = $this->front;
            $this->front = $this->front->next;
            return $current->name;
        }
    }

    public function __toString()
    {
        $currentPatient = $this->front;
        $patientList = "";
        if ($this->isEmpty()) {
            return $patientList . " Empty Patient List";
        } else {
            do {
                $patientList = $patientList . "Patient: " . $currentPatient->name . " , code: " . $currentPatient->code . "<br>";
                $currentPatient = $currentPatient->next;
            } while ($currentPatient != null);
            return $patientList;
        }
    }
}

echo "<pre>";
$patientQueue = new PatientQueue();
$patientQueue->enqueue("Smith", 5);
$patientQueue->enqueue("Jones", 4);
$patientQueue->enqueue("Bernbach", 6);
$patientQueue->enqueue("Brown", 1);
$patientQueue->enqueue("Ingram", 1);
echo $patientQueue;
echo "<hr>";
echo $patientQueue->dequeue();
echo "<hr>";
echo $patientQueue;
echo "<hr>";
echo $patientQueue->dequeue();
echo "<hr>";
echo $patientQueue;
