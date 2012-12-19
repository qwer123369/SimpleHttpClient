<?php

class HttpClientException extends Exception
{
}


// 只描述重定向非本HOST的错误
class HttpClientLocationException extends HttpClientException
{
}