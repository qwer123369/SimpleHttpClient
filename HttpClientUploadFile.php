<?php

/**
 * 上传文件
 */
class HttpClientUploadFile
{
    public $fileName = "";          // 文件名
    public $fileType = "";          // 文件类型
    public $fileContent = "";       // 文件内容
    
    public function __construct($fileName, $fileContent, $fileType="text/plain")
    {
        $this->fileName = $fileName;
        $this->fileContent = $fileContent;
        $this->fileType = $fileType;
    }
}