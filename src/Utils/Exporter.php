<?php
namespace App\Utils;

class Exporter{
    const availableFormats = ['xml', 'csv'];
    const defaultFormat = 'xml';

    private $format;
    private $data;
    private $outputFileName;

    public function __construct($data, $format = 'xml', $outputFileName = null)
    {
        $this->setData($data);
        $this->setFormat($format);
        $this->setOutputFileName($outputFileName);
    }

    public function setFormat($format){
        $this->format = in_array($format, self::availableFormats)?$format:self::defaultFormat;
    }

    public function setData($data){
        $this->data = $data;
    }

    /**
     * @param mixed $outputFileName
     */
    public function setOutputFileName($outputFileName): void
    {
        if(strpos($outputFileName, '.' . $this->format)<=0){
            $outputFileName .= '.' . $this->format;
        }
        $this->outputFileName = $outputFileName;
    }

    public function export(){
        $converter = new DataFilter($this->data, $this->format);
        $convertedData = $converter->convert();
        return $this->saveToFile($convertedData);
    }

    private function saveToFile($convertedData){
        file_put_contents($this->outputFileName, $convertedData);
        return true;
    }

    /**
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @return mixed
     */
    public function getOutputFileName()
    {
        return $this->outputFileName;
    }
}