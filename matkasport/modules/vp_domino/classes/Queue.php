<?php

class VpQueue
{
    private $_filename;

    public function __construct($filename)
    {
        $this->_filename = $filename;
    }

    public function readFile()
    {

        $file = explode("\n", file_get_contents($this->_filename));

        foreach($file as $id => $line) {
            if(empty($line) || $line === "\n") {
                unset($file[$id]);
            }
        }

        return array_values($file);
    }

    public function readLine()
    {
        $data = $this->readFile();

        return $data[0];

    }

    public function count()
    {
        $data = $this->readFile();

        return count($data);
    }

    public function write($data)
    {
        $data = implode("\n", $data);

        file_put_contents($this->_filename, $data. "\n");

    }

    public function writeLine($line)
    {
        file_put_contents($this->_filename, $line. "\n", FILE_APPEND);
    }

    public function deleteLine($line)
    {
        $contents = $this->readFile();


        unset($contents[0]);

        //if($line === $_line) {
            $this->write($contents);
        //}
    }



}